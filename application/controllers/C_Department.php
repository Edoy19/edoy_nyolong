<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_department extends CI_Controller {

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
     /** ---------------------------------------------- department----------------------------------------------**/

     public function __construct(){
        parent::__construct();   

        if ($this->session->userdata('user_name')=="") { // Jika username kosong(Belum login) maka
			redirect('Auth'); // Kembali ke halaman Auth
		}

        $this->load->helper('date');// Load helper date fungsi tanggal
        $this->load->helper('file');// Load helper date fungsi tanggal           
        $this->load->model('M_department');// Load model
        $this->load->model('UserModel');  //untuk load user model hak akses menu     
        $this->load->library('encryption');  //untuk encryp data
        // $this->load->library('encrypt');  
        
        // Cari hak akses by controller
	    $Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'),'C_Department'); 
	    if($Hak_akses->found!='found') {
		redirect('Auth'); // Kembali ke halaman Auth
	}
                  
      }

	public function Index()
	{

        $menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
        $menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
        $data['menu_name'] =  $menu_name; 
        $data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)

        // // $data['department'] = $this->M_department->Tampil_Data();
        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
		// // $this->load->view('department/V_department',$data); // Tampil data
        $this->load->view('department/V_department'); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer
               
    }

    /// @see view_data()
    /// @note
    /// @attention
     // Satu table tanpa where
     function view_data()
     {
        
        $tables = "tb_Department";  // Table yang digunakan      
        $search = array('hdrid','department_code','department_name'); // Column-column pencarian di feature search datatables

         // jika memakai IS NULL pada where sql
         $isWhere = null;
         // $isWhere = 'artikel.deleted_at IS NULL';
         header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
         echo $this->M_department->get_tables($tables,$search,$isWhere); // Mengambil data dari database
         
     }

    /// @see view_data_where()
    /// @note
    /// @attention
    // Satu table dengan where
    function view_data_where()
    {

        $tables = "tb_Department"; // Table yang digunakan        
        $search = array('hdrid','department_code','department_name'); // Column-column pencarian di feature search datatables

        
        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){ //pencarian melalui tanggal
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
        echo $this->M_department->get_tables_where($tables,$search,$where,$isWhere); // Mengambil data dari database
        
    }

    /// @see view_data_query()
    /// @note
    /// @attention
    // Multy table / Query
    function view_data_query()
    {

        $query  = "SELECT kategori.name_kategori AS name_kategori, subkat.* FROM subkat 
                    JOIN kategori ON subkat.id_kategori = kategori.id_kategori"; // Memmbuat relasi antar table
        $search = array('name_kategori','subkat','tgl_add'); // Membuat array dengan nama $search
        $where  = null; // Jika memakai IS NULL pada where sql
        // $where  = array('name_kategori' => 'Tutorial');
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere); // Mengambil data dari database

    }


    //    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
    //     }else{
    //     redirect('auth');
    //     }

    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="TR".mdate('%Y%m',time()); // Buat format untuk hdrid          
        $hdrid2=$this->M_department->Max_data($mdate,'tb_Department')->row();        
        if ($hdrid2->hdrid==NULL){ // Jika hdrid kosong
            // Jika belum ada
           $hdrid3=$mdate."001"; // Jika belum ada = 001
        }else{
           $hdrid3=$hdrid2->hdrid; // Jika sudah ada hdrid maka akan tetap sama
           // Jika sudah ada maka naik 1 level
           $hdrid3="TR".(intval(substr($hdrid3,2,10))+1); // Jika sudah ada maka naik 1 level
        }
        $hdrid=$hdrid3; // hdrid=hdrid
       
        // ********************* 1. Set hdrid  *********************
        $post_data2=array('hdrid'=>$hdrid3);  // Buat array untuk set hdrid

        // ********************* 2. Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time())); // menampung tahun bulan hari jam 
                
         // ******************** 3. Collect all data post *********************     
        $post_data = $this->input->post(); // Tarik semua data input post   

        $msg = "success save"; // Menampung message untuk notif
              
        // ********************* 4. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3); // Menggabungkan semua data post 

        // ********************* 5. Simpan data     *********************

        $this->M_department->Input_Data($post_datamerge,'tb_Department'); //simpan data

        // ********************* 6. Upload file jika ada  *********************   
        if(!empty($_FILES['file']['name']))
        {
            $this->upload_file_attach('file',$hdrid,'tb_Department'); // Fungsi upload field attach ke table tb_Department sesuai field          
        }
       

        $data['status']= $msg; //status

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }
    
    /// @see ajax_find_update()
    /// @note
    /// @attention
    public function ajax_update()
	{

         // ********************* 1. Collect data post *********************
        $post_data = $this->input->post(); // Tarik data input post
        $hdrid=$this->input->post('hdrid'); // Tarik data input post hdrid
       
        $msg = "success Update"; //message ketika berhasil update

        // **********************  Upload file (filename,hdrid,table)  *********************   
        if(!empty($_FILES['file']['name']))
        {          
            $this->upload_file_attach('file',$hdrid,'tb_Department'); // Fungsi upload field attach ke table tb_Department sesuai field         
        }
                
        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge=array_merge($post_data,$post_data); //menggabungkan semua data

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid); // Buat kondisi where untuk dikirim ke model        
        $this->M_department->Update_Data($where,$post_datamerge,'tb_Department'); // Buat kondisi where untuk dikirim ke model

        $data['status']="berhasil update"; //message ketika berhasil update

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    /// @see ajax_delete()
    /// @note
    /// @attention
    public function ajax_delete()
	{

         
        $where = array('hdrid' => $this->input->post('hdrid'));// Buat array untuk kondisi where di query model 
        $this->M_department->Delete_Data($where,'tb_Department'); // Mengirim param ke model untuk query delete
        $data['status']="berhasil dihapus"; //pesan saat berhasil dihapus
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // mengembalikkan nilai dari format json

    }
    

    function ajax_getbyhdrid(){      

        $hdrid=$this->input->get('hdrid'); //mengambil dari hdrid
        $data=$this->M_department->ajax_getbyhdrid($hdrid,'tb_Department')->row(); // Mengirim param ke model untuk query 
        echo json_encode($data); // mengembalikkan nilai dari format json

    }

    function form_approver_link_mail(){
        
        $id_user_reg=$this->input->get('var1'); // Mengambil var1 dan menampung nya sebagai $id_user_reg
        $nik=$this->input->get('var2'); // Mengambil var2 dan menampung nya sebagai $nik
        
        $data['get_approver']=$this->M_department->get_approver($id_user_reg); // Menarik data hasil query dan menampung nya sebagai data get_approver
		$data['get_requester']=$this->M_department->get_requester($id_user_reg); // Menarik data hasil query dan menampung nya sebagai data get_requester
		$data['data']=$this->M_department->get_data($id_user_reg); // Menarik data hasil query dan menampung nya sebagai data 
        
        $this->load->view('email/V_department',$data); // Tampil data
      
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
            $config['file_name']=$hdrid.'_'.$filename;// Configurasi nama sesuai format hdrid dan juga file name
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
               
                $where = array('hdrid' => $hdrid);  // Buat array untuk kondisi di query model      
                $this->M_department->Update_Data($where,$data_update,$table); // Kirim semua parameter ke model

            }

        }

    }


    public function import() { //fungsi untuk import

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
            redirect('C_department'); //kembali ke C_department

		} else {

			$config['upload_path'] = './assets/excel/'; // Configurasi folder yang ingin dijadikan penyimpanan untuk import file   
			$config['allowed_types'] = 'xls|xlsx'; // Configurasi tipe yang bisa di import 
			
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
                            $mdate="TR".mdate('%Y%m',time());        
                            $hdrid2=$this->M_department->Max_data($mdate,'tb_Department')->row();  
                            if ($hdrid2->hdrid==NULL){
                                // Jika belum ada
                               $hdrid3=$mdate."001";
                            //    $resultData[$index]['hdrid'] =   $hdrid3;
                            }else{
                                $hdrid3=$hdrid2->hdrid;
                                // Jika sudah ada maka naik 1 level
                                $hdrid3="TR".(intval(substr($hdrid3,2,10))+1);
                                // $resultData[$index]['hdrid'] =   $hdrid3;    
                            }

                        }else{
                            $hdrid3="TR".(intval(substr($hdrid3,2,10))+1);
                        }

                        $resultData[$index]['hdrid'] =   $hdrid3;  
                        $resultData[$index]['transaction_date'] = mdate('%Y-%m-%d',time());    

                       // ---------------------------------- Import Macro Batas sini 1---------------------------------
                    
                        //  Sample
                                           
                        $resultData[$index]['department_name'] = ucwords($value['A']); // Isi department_name dari column A excel 
                        $resultData[$index]['report_no'] = ucwords($value['A']); // Isi report_no dari column A excel 






                        
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
					$result = $this->M_department->insert_batch('tb_Department',$resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_department'); // Kembali ke halaman C_department
					}
				} else {
                        // $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
                        redirect('C_department'); // Kembali ke halaman C_department
				}

			}
		}
	}
    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}
