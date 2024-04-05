<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_bank extends CI_Controller {

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
    /** ---------------------------------------------- bank----------------------------------------------**/

    public function __construct(){
        parent::__construct();   

        if ($this->session->userdata('user_name')=="") { // Jika username kosong(Belum login) maka 
			redirect('Auth'); // Kembali ke halaman Auth
		}

        $this->load->helper('date'); // Load helper date fungsi tanggal
        $this->load->helper('file'); // Load helper file fungsi upload         
        $this->load->model('M_bank'); // Load model
        $this->load->model('UserModel');  //untuk load user model hak akses menu     
        $this->load->library('encryption');  //untuk encryp data
        // $this->load->library('encrypt');   
        
        // Cari hak akses by controller
        $Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'),'C_bank'); 
        if($Hak_akses->found!='found') {
		 redirect('Auth'); // Kembali ke halaman Auth
	}
                
    }

    /// @see index()
    /// @note Fungsi tampilan utama
    /// @attention Mengirim data data yang diperlukan untuk view
	public function Index()
	{

        $data['groups'] = $this->M_bank->get_tb_bank(); // Menarik data dan menampung ke groups
        // var_dump($data);
        // die;
        $menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
        $menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
        $data['menu_name'] =  $menu_name; 
        $data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
        $data['payee_code'] = $this->M_bank->Tampil_PayeeCode(); // Menarik data dan menampung ke payee_code
        $data['tipe_transfer'] = $this->M_bank->Tampil_TipeTransfer(); // Menarik data dan menampung ke tipe_transfer

        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
		// // $this->load->view('bank/V_bank',$data); // Tampil data
        $this->load->view('bank/V_bank',$data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer
            
    }

    /// @see view_data()
    /// @note Menampilkan data yang ada di table 
    /// @attention Menampilkan data tanpa kondisi
    function view_data()
    {
        
        $tables = "tb_bank"; // Datatables yang akan ditampilkan       
        $search = array('hdrid','payee_code','tipe_transfer','nama_bank'); // Column-column pencarian di feature search datatables

         $isWhere = null;  // jika memakai IS NULL pada where sql
         // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
        echo $this->M_bank->get_tables($tables,$search,$isWhere); // Mengambil data dari database
        
    }

    /// @see view_data_where()
    /// @note Menampilkan data yang ada di table 
    /// @attention Menampilkan data dengan kondisi tertentu
    // Satu table dengan where
    function view_data_where()
    {

        $tables = "tb_bank"; // Datatables yang akan ditampilkan       
        $search = array('hdrid','payee_code','tipe_transfer','nama_bank'); // Column-column pencarian di feature search datatables

        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        $isWhere = null;     // jika memakai IS NULL pada where sql
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
        echo $this->M_bank->get_tables_where($tables,$search,$where,$isWhere); // Mengambil data dari database
        
    }

    /// @see ajax_add()
    /// @note Add Data
    /// @attention Tambah data baru ke database
    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="TR".mdate('%Y%m',time()); // Buat HDRID otomatis dengan format TR Tahun Bulan Jam (TR202210)                 
        $hdrid2=$this->M_bank->Max_data($mdate,'tb_bank')->row();  // Mengambil row dari database       
        if ($hdrid2->hdrid==NULL){ // Jika HDRID belum ada
        $hdrid3=$mdate."001"; // Maka mulai dari 001
        }else{
        $hdrid3=$hdrid2->hdrid; // Jika sudah ada 
           // Jika sudah ada maka naik 1 level
        $hdrid3="TR".(intval(substr($hdrid3,2,10))+1); // Jika sudah ada maka naik 1 level
        }
        $hdrid=$hdrid3; // Deklarasi $hdrid = $hdrid3
    
        // ********************* 1. Set hdrid  *********************
        $post_data2=array('hdrid'=>$hdrid3); // Buat array untuk post ke field HDRID

        // ********************* 2. Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time())); // Buat array untuk post ke field Transaction_date
                
         // ******************** 3. Collect all data post *********************     
        $post_data = $this->input->post(); // Ambil semua data post

        $msg = "success save"; // Menampung message untuk notif
            
        // ********************* 4. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3); // Menggabungkan semua data 

        // ********************* 5. Simpan data     *********************

        $this->M_bank->Input_Data($post_datamerge,'tb_bank'); // Kirim hasil gabungan data ke model untuk insert tb_bank

        // ********************* 6. Upload file jika ada  *********************   
        if(!empty($_FILES['file']['name']))
        {
            $this->upload_file_attach('file',$hdrid,'tb_bank'); // Upload file attach ke table tb_bank                
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
            $this->upload_file_attach('file',$hdrid,'tb_bank'); // Upload file attach ke table tb_bank                    
        }
                
        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge=array_merge($post_data,$post_data); // Menggabungkan semua data 

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid); // Membuat array untuk kondisi sesuai hdrid           
        $this->M_bank->Update_Data($where,$post_datamerge,'tb_bank'); // Kirim hasil gabungan,kondisi sesuai hdrid data ke model untuk update tb_bank

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
        $this->M_bank->Delete_Data($where,'tb_bank'); // Kirim kondisi where,di table tb_bank_refund untuk query di model
        $data['status']="berhasil dihapus"; // Menarik dan menampung $msg menjadi status
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }
    
    /// @see ajax_getbyhdrid()
    /// @note Mencari data berdasarkan hdrid
    /// @attention Untuk data field ketika view modal(View,Update)
    function ajax_getbyhdrid(){      

        $hdrid=$this->input->get('hdrid'); // Tarik data hdrid dari input get
        $data=$this->M_bank->ajax_getbyhdrid($hdrid,'tb_bank')->row(); // Kirim $hdrid,di table tb_bank untuk query di model
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
                $this->M_bank->Update_Data($where,$data_update,$table); // Kirim semua parameter ke model

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
            redirect('C_bank'); // Kembali ke halaman C_bank

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

				foreach ($sheetData as $key => $value) {

                    if ($index > 1 && ucwords($value['D'])!='' ) {


                        // ********************* 0. Generate nomor transaksi  *********************          
                        
                            // Cari database sekali saja
                            if($index==2){
                                $mdate="TR".mdate('%Y%m',time());        
                                $hdrid2=$this->M_bank->Max_data($mdate,'tb_bank')->row();  
                                if ($hdrid2->hdrid==NULL){ // Jika belum ada
                                $hdrid3=$mdate."001"; // Maka mulai dari 001
                                //    $resultData[$index]['hdrid'] =   $hdrid3;
                                }else{
                                    $hdrid3=$hdrid2->hdrid; // Jika sudah ada 
                                    
                                    $hdrid3="TR".(intval(substr($hdrid3,2,10))+1); // Jika sudah ada maka naik 1 level
                                    // $resultData[$index]['hdrid'] =   $hdrid3;    
                                }

                            }else{
                                $hdrid3="TR".(intval(substr($hdrid3,2,10))+1); // maka naik 1 level
                            }

                            $resultData[$index]['hdrid'] =   $hdrid3;  
                            $resultData[$index]['transaction_date'] = mdate('%Y-%m-%d',time());    

                            // ---------------------------------- Import Macro Batas sini 1---------------------------------
                        
                            $resultData[$index]['payee_code'] = ucwords($value['A']); // Isi payee_code dari column A excel 
                            $resultData[$index]['tipe_transfer'] = ucwords($value['B']); // Isi tipe_transfer dari column B excel 
                            $resultData[$index]['nama_bank'] = ucwords($value['C']); // Isi nama_bank dari column C excel 
                            
                    }

					$index++;

				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_bank->insert_batch('tb_bank',$resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_bank'); // Kembali ke halaman C_bank
					}
				} else {
                        // $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
                        redirect('C_bank'); // Kembali ke halaman C_bank
				}

			}
		}
	}
    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}