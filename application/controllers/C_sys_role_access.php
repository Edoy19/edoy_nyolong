<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Role_Access extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 **/
     /** ---------------------------------------------- Role_Access----------------------------------------------**/


     public function __construct(){
        parent::__construct();   

        $this->load->helper('date');
        $this->load->helper('file');        
        $this->load->model('M_sys_role_access');
        $this->load->model('UserModel');  //untuk load user model hak akses menu     
        $this->load->library('encryption');  //untuk encryp data
        
    }

	public function Index()
	{

        $data['hasil'] =$this->M_sys_role_access->get_tb_menu();
        $data['hasil2'] =$this->M_sys_role_access->get_tb_role();

        $menu_code = $this->encryption->decrypt($this->input->get('var'));  // Decrypt menu ID   untuk dekrip menu   
        $data['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export) 
    
        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar'); //Tampil Sidebar
		// // $this->load->view('Role_Access/V_sys_role_access',$data); // Tampil data
        $this->load->view('Role_Access/V_sys_role_access',$data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer

    }

     // Satu table tanpa where
    function view_data()
    {
        
        $tables = "a_user_role_access";         
        $search = array('hdrid','role_id','role_name','menu_id','menu_name','allow_add','allow_edit','allow_delete','allow_import','allow_export');
         // jika memakai IS NULL pada where sql
        $isWhere = null;
         // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_sys_role_access->get_tables($tables,$search,$isWhere);
        
    }

    // Satu table dengan where
    function view_data_where()
    {

        $tables = "a_user_role_access";         
        $search = array('hdrid','role_id','role_name','menu_id','menu_name','allow_add','allow_edit','allow_delete','allow_import','allow_export');
        
        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_sys_role_access->get_tables_where($tables,$search,$where,$isWhere);
        
    }

    // Multy table / Query
    function view_data_query()
    {

        $query  = "SELECT kategori.nama_kategori AS nama_kategori, subkat.* FROM subkat 
                    JOIN kategori ON subkat.id_kategori = kategori.id_kategori";
        $search = array('nama_kategori','subkat','tgl_add');
        $where  = null; 
        // $where  = array('nama_kategori' => 'Tutorial');
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere);

    }


    //    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
    //     }else{
    //     redirect('auth');
    //     }

    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="RA".mdate('%Y%m',time());        
        $hdrid2=$this->M_sys_role_access->Max_data($mdate,'a_user_role_access')->row();        
        if ($hdrid2->hdrid==NULL){
            // Jika belum ada
           $hdrid3=$mdate."001";
        }else{
           $hdrid3=$hdrid2->hdrid;
           // Jika sudah ada maka naik 1 level
           $hdrid3="RA".(intval(substr($hdrid3,2,10))+1);
        }
                
        // ********************* 1. Set hdrid  *********************
        $post_data2=array('hdrid'=>$hdrid3);

        // *********************  Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time()));
                
         // ********************* 2. Collect all data post *********************     
        $post_data = $this->input->post();   

        $msg = "success save";

        // ********************** 4. Upload file jika ada  *********************   
        if(!empty($_FILES['file']['name']))
        {

        }

        // ********************* 3. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3);

        // ********************** 4. Simpan data     *********************

        $this->M_sys_role_access->Input_Data($post_datamerge,'a_user_role_access');
        

        $data['status']= $msg;

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }
    
    
    public function ajax_update()
	{

         // ********************* 1. Collect data post *********************
        $post_data = $this->input->post();
        $hdrid=$this->input->post('hdrid');
       
        $msg = "success Update";

        // **********************  Upload file (filename,hdrid,table)  *********************   
        if(!empty($_FILES['file']['name']))
        {          
            $this->upload_file_attach('file',$hdrid,'a_user_role_access');          
        }
                
        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge=array_merge($post_data,$post_data);

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid);        
        $this->M_sys_role_access->Update_Data($where,$post_datamerge,'a_user_role_access');

        $data['status']="berhasil update";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    public function ajax_delete()
	{

         
        $where = array('hdrid' => $this->input->post('hdrid'));
        $this->M_sys_role_access->Delete_Data($where,'a_user_role_access');
        $data['status']="berhasil dihapus";
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }
    

    function ajax_getbyhdrid(){      

        $hdrid=$this->input->get('hdrid');
        $data=$this->M_sys_role_access->ajax_getbyhdrid($hdrid,'a_user_role_access')->row();
        echo json_encode($data);

    }

    function upload_file_attach($filename,$hdrid,$table){

        if(!empty($_FILES[$filename]['name']))
        {
          
            $config['upload_path'] = './assets/upload';   
            $config['allowed_types'] = 'gif|jpg|png|pdf';         
            $config['overwrite'] = True;          
            $config['max_size']  = '1000000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['file_name']=$hdrid.'_'.$filename;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($filename)){
                // $status = "error";
                 $msg = $this->upload->display_errors();
            }
            else{
                 $msg = "success upload";

                $dataupload = $this->upload->data();
                // $status = "success";
                // $msg = $dataupload['file_name']." berhasil diupload";                      
                $data_update = array($filename =>$dataupload['file_name']);   
               
                $where = array('hdrid' => $hdrid);        
                $this->M_sys_role_access->Update_Data($where,$data_update,$table);

            }

        }


    }

    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}
