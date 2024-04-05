<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Part_model extends CI_Controller {

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
     /** ---------------------------------------------- Customer_Name----------------------------------------------**/

     public function __construct(){
        parent::__construct();   

        if ($this->session->userdata('user_name')=="") {
			redirect('Auth');
		}

        $this->load->helper('date');
        $this->load->helper('file');        
        $this->load->model('M_Part_model');
        $this->load->model('UserModel');  //untuk load user model hak akses menu     
        //$this->load->library('encryption');  //untuk encryp data

        // Cari hak akses by controller
	    $Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'),'C_Part_model'); 
	    if($Hak_akses->found!='found') {
		redirect('Auth'); // Kembali ke halaman Auth
	}
                  
      }

	public function Index()
	{
        $menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
        $menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  

        $data['tb_daftar_material_name'] =$this->M_Part_model->get_tb_part_model(); // Menarik dan menampung ke data nik

        $data['menu_name'] =  $menu_name; 
        $data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)

        // // $data['cust_name'] = $this->M_Part_model->Tampil_Data();
        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
		// // $this->load->view('Customer_Name/V_Part_model',$data); // Tampil data
        $this->load->view('part_model/V_Part_model',$data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer
               
    }

     // Satu table tanpa where
     function view_data()
     {
        
        $tables = "tb_daftar_material_name";        
        $search = array('id_material','part_number','part_name','qty');

         // jika memakai IS NULL pada where sql
         $isWhere = null;
         // $isWhere = 'artikel.deleted_at IS NULL';
         header('Content-Type: application/json');
         echo $this->M_Part_model->get_tables($tables,$search,$isWhere);
         
     }

    // Satu table dengan where
    function view_data_where()
    {

        $tables = "tb_daftar_material_name";        
        $search = array('id_material','part_number','part_name','qty');

        
        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Part_model->get_tables_where($tables,$search,$where,$isWhere);
        
    }

    // Multy table / Query
    //    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
    //     }else{
    //     redirect('auth');
    //     }

    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="PRT".mdate('%Y%m',time());        
        $id_material2=$this->M_Part_model->Max_data($mdate,'tb_daftar_material_name')->row();        
            if ($id_material2->id_material==NULL){
        // Jika belum ada
                $id_material3=$mdate."001";
            }else{
        // Jika sudah ada maka naik 1 level
        $id_material3=$id_material2->id_material;// Jika sudah ada 
        $id_material3="PRT".(intval(substr($id_material3,3,11))+1);
        // $number = intval(substr($id_material2->id_material,3,11)) + 1; // Ambil bagian numerik dan tambahkan 1
        // $id_material3 = $mdate . str_pad($number, 1, STR_PAD_LEFT); // Tambahkan padding nol jika diperlukan
        }

       
        // ********************* 1. Set id_material  *********************
        $post_data2=array('id_material'=>$id_material3);

        // ********************* 2. Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time()));
                
         // ******************** 3. Collect all data post *********************     
        $post_data = $this->input->post();   

        $msg = "success save";
              
        // ********************* 4. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3);

        // ********************* 5. Simpan data     *********************

        $this->M_Part_model->Input_Data($post_datamerge,'tb_daftar_material_name');

        // ********************* 6. Upload file jika ada  *********************   
        if(!empty($_FILES['file']['name']))
        {
            $this->upload_file_attach('file',$id_material,'tb_daftar_material_name');           
        }
       

        $data['status']= $msg;

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }
    
    
    public function ajax_update()
	{

         // ********************* 1. Collect data post *********************
        $post_data = $this->input->post();
        $id_material=$this->input->post('id_material');
       
        $msg = "success Update";

        // **********************  Upload file (filename,id_material,table)  *********************   
        if(!empty($_FILES['file']['name']))
        {          
            $this->upload_file_attach('file',$id_material,'tb_daftar_material_name');          
        }
                
        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge=array_merge($post_data,$post_data);

        // **********************  Simpan data ************************        
        $where = array('id_material' => $id_material);        
        $this->M_Part_model->Update_Data($where,$post_datamerge,'tb_daftar_material_name');

        $data['status']="berhasil update";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    public function ajax_delete()
	{

         
        $where = array('id_material' => $this->input->post('id_material'));
        $this->M_Part_model->Delete_Data($where,'tb_daftar_material_name');
        $data['status']="berhasil dihapus";
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }
    

    function ajax_getbyid_material(){      

        $id_material=$this->input->get('id_material');
        $data=$this->M_Part_model->ajax_getbyid_material($id_material,'tb_daftar_material_name')->row();
        echo json_encode($data);

    }

    function form_approver_link_mail(){
        
        $id_user_reg=$this->input->get('var1');
        $nik=$this->input->get('var2');
        
        $data['get_approver']=$this->M_Part_model->get_approver($id_user_reg); 
		$data['get_requester']=$this->M_Part_model->get_requester($id_user_reg); 
		$data['data']=$this->M_Part_model->get_data($id_user_reg); 
        
        $this->load->view('email/V_Part_model',$data); // Tampil data
      
    }

    function upload_file_attach($filename,$id_material,$table){

        if(!empty($_FILES[$filename]['name']))
        {
          
            $config['upload_path'] = './assets/upload';   
            $config['allowed_types'] = 'gif|jpg|png|pdf';         
            $config['overwrite'] = True;          
            $config['max_size']  = '1000000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['file_name']=$id_material.'_'.$filename;
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 

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
               
                $where = array('id_material' => $id_material);        
                $this->M_Part_model->Update_Data($where,$data_update,$table);

            }

        }

    }


    public function import() {

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
            redirect('C_Part_model');

		} else {

			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{

				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;

				foreach ($sheetData as $key => $value) {

                     // ********************* 0. Generate nomor transaksi  *********************          
                       
                        // Cari database sekali saja
                        if($index==0){
                            $mdate="PRT".mdate('%Y%m',time());        
                            $id_material2=$this->M_Part_model->Max_data($mdate,'tb_daftar_material_name')->row();  
                            if ($id_material2->id_material==NULL){
                                // Jika belum ada
                               $id_material3=$mdate."001";
                            //    $resultData[$index]['id_material'] =   $id_material3;
                            }else{
                                $id_material3=$id_material2->id_material;
                                // Jika sudah ada maka naik 1 level
                                $id_material3="PRT".(intval(substr($id_material3,2,10))+1);
                                // $resultData[$index]['id_material'] =   $id_material3;    
                            }

                        }else{
                            $id_material3="PRT".(intval(substr($id_material3,2,10))+1);
                        }

                        $resultData[$index]['id_material'] =   $id_material3;  
                        $resultData[$index]['transaction_date'] = mdate('%Y-%m-%d',time());    

                       // ---------------------------------- Import Macro Batas sini 1---------------------------------
                    
                        //  Sample
                                           
                        $resultData[$index]['part_number'] = ucwords($value['A']);
                        $resultData[$index]['part_name'] = ucwords($value['A']);
                        $resultData[$index]['qty'] = ucwords($value['A']);


                        
                    // ---------------------------------- / Import Macro Batas sini 1--------------------------------

					// if ($key != 1) {

						// $check = $this->M_legalitas->check_name($value['C']);
						
						// Tanggal Terbit
						// $tanggal = substr($value['E'],0,2);
						// $bulan = substr($value['E'],3,2);
						// $tahun = substr($value['E'],6,4);
						// $date = $tahun.'-'.$bulan.'-'.$tanggal;

						// Tanggal Berakhir
						// $tanggal2 = substr($value['F'],0,2);
						// $bulan2 = substr($value['F'],3,2);
						// $tahun2 = substr($value['F'],6,4);
						// $date2 = $tahun2.'-'.$bulan2.'-'.$tanggal2;

						// if ($check != 1) {
						// 	$resultData[$index]['kategori'] = ucwords($value['A']);
						// 	$resultData[$index]['name_doc'] = ucwords($value['C']);
						// 	$resultData[$index]['no_doc'] = ucwords($value['D']);
						// 	$resultData[$index]['t_terbit'] = $date;
						// 	$resultData[$index]['t_berakhir'] = $date2;
						// 	$resultData[$index]['instansi'] = ucwords($value['G']);
						// 	$resultData[$index]['keterangan'] = ucwords($value['H']);
						// 	$resultData[$index]['file'] = 'No File';
						// 	$resultData[$index]['status'] = 'MASIH BERLAKU';
						// }

					// }

					$index++;

				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_Part_model->insert_batch('tb_daftar_material_name',$resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_Part_model');
					}
				} else {
                        // $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
                        redirect('C_Part_model');
				}

			}
		}
	}
    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}