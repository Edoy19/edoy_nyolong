
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_finance extends CI_Controller {

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
    /** ---------------------------------------------- finance----------------------------------------------**/

    public function __construct(){
        parent::__construct();   

        if ($this->session->userdata('user_name')=="") { // Jika username kosong
			redirect('Auth'); // Kembali ke halaman Auth
		}

        $this->load->helper('date'); // Load helper date fungsi tanggal
        $this->load->helper('file'); // Load helper file fungsi upload      
        $this->load->model('M_finance'); // Load model
        $this->load->model('UserModel');  // Untuk load user model hak akses menu     
        $this->load->library('encryption');  // Untuk encryp data
        // $this->load->library('encrypt');   
        
        // Cari hak akses by controller
	    $Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'),'C_finance'); 
	    if($Hak_akses->found!='found') {
		redirect('Auth'); // Kembali ke halaman Auth
	}
                
    }
    
    /// @see index()
    /// @note Fungsi tampilan utama
    /// @attention Mengirim data data yang diperlukan untuk view
	public function Index()
	{

        $data['nik'] = $this->M_finance->Tampil_user(); // Menarik data dan menampung nya menjadi nik
        $data['nik_finance'] = $this->M_finance->Tampil_user(); // Menarik data dan menampung nya menjadi nik_finance

        $menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
        $menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
        $data['menu_name'] =  $menu_name; 
        $data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
		// // $this->load->view('finance/V_finance',$data); // Tampil data
        $this->load->view('finance/V_finance',$data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer
            
    }

    /// @see view_data()
    /// @note Menampilkan data yang ada di table 
    /// @attention Menampilkan data tanpa kondisi
    function view_data()
    {
    
    $tables = "tb_finance"; // Datatables yang akan ditampilkan 
    $search = array('hdrid','nik','name','nik_finance2','name_finance2','kode_setion_finance2','name_section_finance2','email_finance2','nik_finance3','name_finance3','kode_setion_finance3','name_section_finance3','email_finance3','nik_finance4','name_finance4','kode_setion_finance4','name_section_finance4','email_finance4','nik_finance5','name_finance5','kode_setion_finance5','name_section_finance5','email_finance5','nik_finance6','name_finance6','kode_setion_finance6','name_section_finance6','email_finance6'); // Column-column pencarian di feature search datatables
    $isWhere = null; // jika memakai IS NULL pada where sql
    // $isWhere = 'artikel.deleted_at IS NULL';
    header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
    echo $this->M_finance->get_tables($tables,$search,$isWhere); // Mengambil data dari database
        
    }

    /// @see view_data_where()
    /// @note Menampilkan data yang ada di table 
    /// @attention Menampilkan data dengan kondisi tertentu
    // Satu table dengan where
    function view_data_where()
    {

        $tables = "tb_finance"; // Datatables yang akan ditampilkan 
        $search = array('hdrid','nik','name','nik_finance2','name_finance2','kode_setion_finance2','name_section_finance2','email_finance2','nik_finance3','name_finance3','kode_setion_finance3','name_section_finance3','email_finance3','nik_finance4','name_finance4','kode_setion_finance4','name_section_finance4','email_finance4','nik_finance5','name_finance5','kode_setion_finance5','name_section_finance5','email_finance5','nik_finance6','name_finance6','kode_setion_finance6','name_section_finance6','email_finance6'); // Column-column pencarian di feature search datatables
        
        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        $isWhere = null; // jika memakai IS NULL pada where sql
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
        echo $this->M_finance->get_tables_where($tables,$search,$where,$isWhere); // Mengambil data dari database
        
    }

    /// @see ajax_add()
    /// @note Add Data
    /// @attention Tambah data baru ke database
    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="TR".mdate('%Y%m',time()); // Buat HDRID otomatis dengan format TR Tahun Bulan Jam (TR202210)               
        $hdrid2=$this->M_finance->Max_data($mdate,'tb_finance')->row(); // Mengambil row dari database                   
        if ($hdrid2->hdrid==NULL){ // Jika HDRID belum ada
           $hdrid3=$mdate."001"; // Maka mulai dari 001
        }else{
        $hdrid3=$hdrid2->hdrid;// Jika sudah ada 
        
        $hdrid3="TR".(intval(substr($hdrid3,2,10))+1); // Jika sudah ada maka naik 1 level
        }
        $hdrid=$hdrid3; // Deklarasi $hdrid = $hdrid3
    
        // ********************* 1. Set hdrid  *********************
        $post_data2=array('hdrid'=>$hdrid3); // Buat array untuk post ke field HDRID
        $post_data4=array('position_name2'=>'FINANCE APPROVER 1','position_name3'=>'FINANCE APPROVER 2','position_name4'=>'FINANCE APPROVER 3','position_name5'=>'DIRECTOR','position_name6'=>'PRESIDENT DIRECTOR'); // Buat array untuk post ke field HDRID


        // ********************* 2. Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time())); // Buat array untuk post ke field Transaction_date
                
         // ******************** 3. Collect all data post *********************     
        $post_data = $this->input->post();  // Ambil semua data post   

        $msg = "success save"; // Menampung message untuk notif
            
        // ********************* 4. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3,$post_data4); // Menggabungkan semua data 

        // ********************* 5. Simpan data     *********************

        $this->M_finance->Input_Data($post_datamerge,'tb_finance'); // Kirim hasil gabungan data ke model untuk insert tb_finance

        // ********************* 6. Upload file jika ada  *********************   
        if(!empty($_FILES['file']['name']))
        {
            $this->upload_file_attach('file',$hdrid,'tb_finance');  // Upload file attach ke table tb_finance           
        }
    

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
        $hdrid=$this->input->post('hdrid'); // Ambil inputan post hdrid
    
        $msg = "success Update"; // Menampung message untuk notif

        // **********************  Upload file (filename,hdrid,table)  *********************   
        if(!empty($_FILES['file']['name']))
        {          
            $this->upload_file_attach('file',$hdrid,'tb_finance');  // Upload file attach ke table tb_finance                
        }
                
        // $post_data4=array('position_name2'=>'ASSISTANT MANAGER','position_name3'=>'MANAGER','position_name4'=>'GENERAL MANAGER','position_name5'=>'DIRECTOR','position_name6'=>'PRESIDENT DIRECTOR'); // Buat array untuk post ke field HDRID

        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge=array_merge($post_data,$post_data); // Menggabungkan semua data 

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid);        
        $this->M_finance->Update_Data($where,$post_datamerge,'tb_finance'); // Kirim hasil gabungan,kondisi sesuai hdrid data ke model untuk update tb_finance
        $data['status']="berhasil update"; // Menarik dan menampung $msg menjadi status
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }

    /// @see ajax_delete()
    /// @note Delete Data
    /// @attention Delete data berdasarkan hdrid
    public function ajax_delete()
	{

        
        $where = array('hdrid' => $this->input->post('hdrid')); // Buat array untuk kondisi query,hdrid diambil dari input post hdrid
        $this->M_finance->Delete_Data($where,'tb_finance'); // Kirim kondisi where,di table tb_finance untuk query di model
        $data['status']="berhasil dihapus"; // Menarik dan menampung $msg menjadi status
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }
    
    /// @see ajax_getbyhdrid()
    /// @note Mencari data berdasarkan hdrid
    /// @attention Untuk data field ketika view modal(View,Update)
    function ajax_getbyhdrid(){      

        $hdrid=$this->input->get('hdrid'); // Tarik data hdrid dari input get
        $data=$this->M_finance->ajax_getbyhdrid($hdrid,'tb_finance')->row(); // Kirim $hdrid,di table tb_finance untuk query di model
        echo json_encode($data); // Mengembalikan nilai data format json

    }

    /// @see upload_file_attach()
    /// @note Upload File 
    /// @attention Configurasi settingan upload file
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
                $this->M_finance->Update_Data($where,$data_update,$table); // Kirim semua parameter ke model

            }

        }

    }

    /// @see import()
    /// @note Import data 
    /// @attention Import data excel ke database
    public function import() {

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
            redirect('C_finance'); // Kembali ke halaman C_finance

		} else {

			$config['upload_path'] = './assets/excel/'; // Configurasi folder yang digunakan untuk menyimpan hasil upload
			$config['allowed_types'] = 'xls|xlsx'; // Type yang boleh di upload 
			
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
                $rowexcel = 1;

				foreach ($sheetData as $key => $value) {

                       // ********************* 0. Generate nomor transaksi  *********************     
                    if($rowexcel>2){

                            // Cari database sekali saja
                            if($index==0){
                                $mdate="TR".mdate('%Y%m',time());        
                                $hdrid2=$this->M_finance->Max_data($mdate,'tb_finance')->row();  
                                if ($hdrid2->hdrid==NULL){ // Jika belum ada
                                $hdrid3=$mdate."001"; // Maka mulai dari 001
                                //    $resultData[$index]['hdrid'] =   $hdrid3;
                                }else{
                                    $hdrid3=$hdrid2->hdrid;// Jika sudah ada
                                    $hdrid3="TR".(intval(substr($hdrid3,2,10))+1); //maka naik 1 level
                                    // $resultData[$index]['hdrid'] =   $hdrid3;    
                                }

                            }else{
                                $hdrid3="TR".(intval(substr($hdrid3,2,10))+1);  // maka naik 1 level
                            }

                            $resultData[$index]['hdrid'] =   $hdrid3;  
                            $resultData[$index]['transaction_date'] = mdate('%Y-%m-%d',time());    

                        // ---------------------------------- Import Macro Batas sini 1---------------------------------

                        $resultData[$index]['nik'] = ucwords($value['A']); // Isi nik dari column A excel 
                        $resultData[$index]['name'] = ucwords($value['B']); // Isi name dari column B excel
                        $resultData[$index]['nik_finance2'] = ucwords($value['H']); // Isi nik_finance2 dari column H excel 
                        $resultData[$index]['name_finance2'] = ucwords($value['I']); // Isi name_finance2 dari column I excel 
                        $resultData[$index]['kode_setion_finance2'] = ucwords($value['J']); // Isi kode_setion_finance2 dari column J excel 
                        $resultData[$index]['name_section_finance2'] = ucwords($value['K']); // Isi name_section_finance2 dari column K excel 
                        $resultData[$index]['email_finance2'] = ucwords($value['L']); // Isi email_finance2 dari column L excel 

                        $resultData[$index]['nik_finance3'] = ucwords($value['H']); // Isi nik_finance3 dari column H excel 
                        $resultData[$index]['name_finance3'] = ucwords($value['I']); // Isi name_finance3 dari column I excel 
                        $resultData[$index]['kode_setion_finance3'] = ucwords($value['J']); // Isi kode_setion_finance3 dari column J excel  
                        $resultData[$index]['name_section_finance3'] = ucwords($value['K']); // Isi name_section_finance3 dari column K excel 
                        $resultData[$index]['email_finance3'] = ucwords($value['L']); // Isi email_finance3 dari column L excel 

                        $resultData[$index]['nik_finance4'] = ucwords($value['H']);// Isi nik_finance4 dari column H excel 
                        $resultData[$index]['name_finance4'] = ucwords($value['I']);// Isi name_finance4 dari column I excel 
                        $resultData[$index]['kode_setion_finance4'] = ucwords($value['J']);// Isi kode_setion_finance4 dari column J excel   
                        $resultData[$index]['name_section_finance4'] = ucwords($value['K']);// Isi name_section_finance4 dari column K excel  
                        $resultData[$index]['email_finance4'] = ucwords($value['L']);// Isi email_finance4 dari column L excel 

                        $resultData[$index]['nik_finance5'] = ucwords($value['H']);// Isi nik_finance5 dari column H excel 
                        $resultData[$index]['name_finance5'] = ucwords($value['I']);// Isi name_finance5 dari column I excel 
                        $resultData[$index]['kode_setion_finance5'] = ucwords($value['J']);// Isi kode_setion_finance5 dari column J excel 
                        $resultData[$index]['name_section_finance5'] = ucwords($value['K']);// Isi name_section_finance5 dari column K excel
                        $resultData[$index]['email_finance5'] = ucwords($value['L']);// Isi email_finance5 dari column L excel 

                        $resultData[$index]['nik_finance6'] = ucwords($value['H']);// Isi nik_finance6 dari column H excel 
                        $resultData[$index]['name_finance6'] = ucwords($value['I']);// Isi name_finance6 dari column I excel 
                        $resultData[$index]['kode_setion_finance6'] = ucwords($value['J']);// Isi kode_setion_finance6 dari column J excel 
                        $resultData[$index]['name_section_finance6'] = ucwords($value['K']);// Isi name_section_finance6 dari column K excel
                        $resultData[$index]['email_finance6'] = ucwords($value['L']);// Isi email_finance6 dari column L excel 
                            // ---------------------------------- / Import Macro Batas sini 1--------------------------------
                            $index++;


                    }
                    
                    $rowexcel++;

				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_finance->insert_batch('tb_finance',$resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_finance'); // Kembali ke halaman C_finance
					}
				} else {
                        // $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
                        redirect('C_finance'); // Kembali ke halaman C_finance
				}

			}
		}
	}
    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}
