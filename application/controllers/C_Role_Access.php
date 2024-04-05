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

        $this->load->helper('date'); // Load helper date fungsi tanggal
        $this->load->helper('file'); // Load helper file fungsi upload
        $this->load->model('M_Role_Access'); // Load model
        $this->load->model('UserModel');  //untuk load user model hak akses menu     
        $this->load->library('encryption');  //untuk encryp data\

        // Cari hak akses by controller
        $Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'),'C_Role_Access'); 
        if($Hak_akses->found!='found') {
		redirect('Auth'); // Kembali ke halaman Auth
	}
        
    }
    
    /// @see index()
    /// @note Fungsi tampilan utama
    /// @attention Mengirim data data yang diperlukan untuk view
	public function Index()
	{

        $data['hasil'] =$this->M_Role_Access->get_tb_menu(); // Menarik data dan menampung ke hasil
        $data['hasil2'] =$this->M_Role_Access->get_tb_role(); // Menarik data dan menampung ke hasil2

        $menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
        $menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
        $data['menu_name'] =  $menu_name; // Menarik $menu_name dan menampung ke menu_name
        $data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
    
        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
		// // $this->load->view('Role_Access/V_Role_Access',$data); // Tampil data
        $this->load->view('Role_Access/V_Role_Access',$data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer

    }

    /// @see view_data()
    /// @note Menampilkan data yang ada di table 
    /// @attention Menampilkan data tanpa kondisi
    function view_data()
    {
        
        $tables = "a_user_role_access"; // Datatables yang akan ditampilkan         
        $search = array('hdrid','role_id','role_name','menu_id','menu_name','allow_add','allow_edit','allow_delete','allow_import','allow_export'); // Column-column pencarian di feature search datatables
        $isWhere = null; // jika memakai IS NULL pada where sql
         // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
        echo $this->M_Role_Access->get_tables($tables,$search,$isWhere); // Mengambil data dari database
        
    }

    /// @see view_data_where()
    /// @note Menampilkan data yang ada di table 
    /// @attention Menampilkan data dengan kondisi tertentu
    // Satu table dengan where
    function view_data_where()
    {

        $tables = "a_user_role_access"; // Datatables yang akan ditampilkan            
        $search = array('hdrid','role_id','role_name','menu_id','menu_name','allow_add','allow_edit','allow_delete','allow_import','allow_export'); // Column-column pencarian di feature search datatables
        
        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        $isWhere = null; // jika memakai IS NULL pada where sql
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
        echo $this->M_Role_Access->get_tables_where($tables,$search,$where,$isWhere); // Mengambil data dari database
        
    }

    /// @see ajax_add()
    /// @note Add Data
    /// @attention Tambah data baru ke database
    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="RA".mdate('%Y%m',time()); // Buat HDRID otomatis dengan format RA Tahun Bulan Jam (TR202210)                  
        $hdrid2=$this->M_Role_Access->Max_data($mdate,'a_user_role_access')->row();   // Mengambil row dari database            
        if ($hdrid2->hdrid==NULL){// Jika HDRID belum ada
        $hdrid3=$mdate."001"; // Maka mulai dari 001
        }else{
        $hdrid3=$hdrid2->hdrid; // Jika sudah ada 
        $hdrid3="RA".(intval(substr($hdrid3,2,10))+1); // Jika sudah ada maka naik 1 level
        }
                
        // ********************* 1. Set hdrid  *********************
        $post_data2=array('hdrid'=>$hdrid3);

        // *********************  Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time())); // Buat array untuk post ke field Transaction_date
                
         // ********************* 2. Collect all data post *********************     
        $post_data = $this->input->post(); // Ambil semua data post    

        $msg = "success save"; // Menampung message untuk notif

        // ********************** 4. Upload file jika ada  *********************   
        if(!empty($_FILES['file']['name']))
        {

        }

        // ********************* 3. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3); // Menggabungkan semua data 

        // ********************** 4. Simpan data     *********************

        $this->M_Role_Access->Input_Data($post_datamerge,'a_user_role_access');  // Kirim hasil gabungan data ke model untuk insert tb_tipe_transfer
        

        $data['status']= $msg; // Menarik dan menampung $msg menjadi status

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }
    
    /// @see ajax_update()
    /// @note Update Data
    /// @attention Updata data field sesuai hdrid
    public function ajax_update()
	{

         // ********************* 1. Collect data post *********************
        $post_data = $this->input->post(); // Ambil semua data post    
        $hdrid=$this->input->post('hdrid'); // Ambil data post hdrid    
    
        $msg = "success Update";// Menampung message untuk notif

        // **********************  Upload file (filename,hdrid,table)  *********************   
        if(!empty($_FILES['file']['name']))
        {          
            $this->upload_file_attach('file',$hdrid,'a_user_role_access'); // Upload file attach ke table a_user_role_access               
        }
                
        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge=array_merge($post_data,$post_data); // Menggabungkan semua data

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid); // Buat array untuk kondisi where di query        
        $this->M_Role_Access->Update_Data($where,$post_datamerge,'a_user_role_access'); // Kirim hasil gabungan,kondisi sesuai hdrid data ke model untuk update a_user_role_access

        $data['status']="berhasil update"; // Menarik dan menampung $msg menjadi status

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }

    /// @see ajax_delete()
    /// @note Delete Data
    /// @attention Delete data berdasarkan hdrid
    public function ajax_delete()
	{

        
        $where = array('hdrid' => $this->input->post('hdrid'));  // Buat array untuk kondisi query,hdrid diambil dari input post hdrid
        $this->M_Role_Access->Delete_Data($where,'a_user_role_access'); // Kirim kondisi where,di table a_user_role_access untuk query di model
        $data['status']="berhasil dihapus"; // Menarik dan menampung $msg menjadi status
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }
    
    /// @see ajax_getbyhdrid()
    /// @note Mencari data berdasarkan hdrid
    /// @attention Untuk data field ketika view modal(View,Update)
    function ajax_getbyhdrid(){      

        $hdrid=$this->input->get('hdrid'); // Tarik data hdrid dari input get
        $data=$this->M_Role_Access->ajax_getbyhdrid($hdrid,'a_user_role_access')->row(); // Kirim $hdrid,di table a_user_role_access untuk query di model
        echo json_encode($data);// Mengembalikan nilai data format json

    }

    function upload_file_attach($filename,$hdrid,$table){

        if(!empty($_FILES[$filename]['name']))
        {
        
            $config['upload_path'] = './assets/upload'; // Configurasi folder yang ingin dijadikan penyimpanan untuk upload file  
            $config['allowed_types'] = 'gif|jpg|png|pdf'; // Configurasi tipe yang bisa di upload        
            $config['overwrite'] = True; // Configurasi agar bisa di ubah        
            $config['max_size']  = '1000000'; // Configurasi max size dari file yang di upload
            $config['max_width']  = '1024'; // Configurasi lebar dari file yang di upload  
            $config['max_height']  = '768'; // Configurasi tinggi dari file yang di upload
            $config['file_name']=$hdrid.'_'.$filename; // Configurasi nama sesuai format hdrid dan juga file name
            $this->load->library('upload', $config); // Load library untuk upload file 
            $this->upload->initialize($config); 

            if ( ! $this->upload->do_upload($filename)){
                // $status = "error";
                 $msg = $this->upload->display_errors(); // Munculkuan notif error
            }
            else{
                $msg = "success upload"; // Menampung message untuk notif

                $dataupload = $this->upload->data(); // Upload data 
                // $status = "success";
                // $msg = $dataupload['file_name']." berhasil diupload";                      
                $data_update = array($filename =>$dataupload['file_name']); // Buat array    
                $where = array('hdrid' => $hdrid); // Buat array untuk kondisi di query model 
                $this->M_Role_Access->Update_Data($where,$data_update,$table); // Kirim semua parameter ke model

            }

        }


    }

    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}