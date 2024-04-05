<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_superior extends CI_Controller
{

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
	/** ---------------------------------------------- superior----------------------------------------------**/

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_name') == "") { // Jika username kosong
			redirect('Auth'); // Kembali ke halaman Auth
		}

		$this->load->helper('date'); // Load helper date fungsi tanggal
		$this->load->helper('file'); // Load helper file fungsi upload      
		$this->load->model('M_superior'); // Load model
		$this->load->model('UserModel');  // Untuk load user model hak akses menu     
		$this->load->library('encryption');  // Untuk encryp data
		// $this->load->library('encrypt');    

		// Cari hak akses by controller
		$Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'), 'C_superior');
		if ($Hak_akses->found != 'found') {
			redirect('Auth'); // Kembali ke halaman Auth
		}
	}

	/// @see index()
	/// @note Fungsi tampilan utama
	/// @attention Mengirim data data yang diperlukan untuk view
	public function Index()
	{

		$data['nik'] = $this->M_superior->Tampil_user(); // Menarik data dan menampung nya menjadi nik
		$data['nik_superior'] = $this->M_superior->Tampil_user(); // Menarik data dan menampung nya menjadi nik_superior

		$menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
		$menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
		$data['menu_name'] =  $menu_name;
		$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
		$data['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
		$this->load->view('result/layout/header'); //Tampil header
		$this->load->view('templates/sidebar', $data_akses); //Tampil Sidebar
		// // $this->load->view('superior/V_superior',$data); // Tampil data
		$this->load->view('superior/V_superior', $data); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer

	}


	/// @see view_data()
	/// @note Menampilkan data yang ada di table 
	/// @attention Menampilkan data tanpa kondisi
	function view_data()
	{

		$tables = "tb_superior"; // Datatables yang akan ditampilkan 
		$search = array('hdrid', 'nik_superior', 'name_superior', 'kode_section_superior', 'name_section_superior', 'email_superior', 'nik_superior2', 'name_superior2', 'kode_section_superior2', 'name_section_superior2', 'email_superior2', 'nik_superior3', 'name_superior3', 'kode_section_superior3', 'name_section_superior3', 'email_superior3', 'nik_superior4', 'name_superior4', 'kode_section_superior4', 'name_section_superior4', 'email_superior4', 'nik_superior5', 'name_superior5', 'kode_section_superior5', 'name_section_superior5', 'email_superior5'); // Column-column pencarian di feature search datatables
		$isWhere = null; // jika memakai IS NULL pada where sql
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
		echo $this->M_superior->get_tables($tables, $search, $isWhere); // Mengambil data dari database

	}

	/// @see view_data_where()
	/// @note Menampilkan data yang ada di table 
	/// @attention Menampilkan data dengan kondisi tertentu
	// Satu table dengan where
	function view_data_where()
	{

		$tables = "tb_superior"; // Datatables yang akan ditampilkan 
		$search = array('hdrid', 'nik_superior', 'name_superior', 'kode_section_superior', 'name_section_superior', 'email_superior', 'nik_superior2', 'name_superior2', 'kode_section_superior2', 'name_section_superior2', 'email_superior2', 'nik_superior3', 'name_superior3', 'kode_section_superior3', 'name_section_superior3', 'email_superior3', 'nik_superior4', 'name_superior4', 'kode_section_superior4', 'name_section_superior4', 'email_superior4', 'nik_superior5', 'name_superior5', 'kode_section_superior5', 'name_section_superior5', 'email_superior5'); // Column-column pencarian di feature search datatables

		if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
			$where  = array('transaction_date >' => '2020-01-01');
		} else {
			$where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate']);
		};
		$isWhere = null; // jika memakai IS NULL pada where sql
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
		echo $this->M_superior->get_tables_where($tables, $search, $where, $isWhere); // Mengambil data dari database

	}

	/// @see ajax_add()
	/// @note Add Data
	/// @attention Tambah data baru ke database
	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "TR" . mdate('%Y%m', time()); // Buat HDRID otomatis dengan format TR Tahun Bulan Jam (TR202210)               
		$hdrid2 = $this->M_superior->Max_data($mdate, 'tb_superior')->row(); // Mengambil row dari database                   
		if ($hdrid2->hdrid == NULL) { // Jika HDRID belum ada
			$hdrid3 = $mdate . "001"; // Maka mulai dari 001
		} else {
			$hdrid3 = $hdrid2->hdrid; // Jika sudah ada 

			$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1); // Jika sudah ada maka naik 1 level
		}
		$hdrid = $hdrid3; // Deklarasi $hdrid = $hdrid3

		// ********************* 1. Set hdrid  *********************
		$post_data2 = array('hdrid' => $hdrid3); // Buat array untuk post ke field HDRID
		$post_data4 = array('position_name2' => 'SUPERVISOR', 'position_name3' => 'MANAGER', 'position_name4' => 'QC MANAGER', 'position_name5' => 'GENERAL MANAGER'); // Buat array untuk post ke field HDRID


		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time())); // Buat array untuk post ke field Transaction_date

		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();  // Ambil semua data post   

		$msg = "success save"; // Menampung message untuk notif

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3, $post_data4); // Menggabungkan semua data 

		// ********************* 5. Simpan data     *********************

		$this->M_superior->Input_Data($post_datamerge, 'tb_superior'); // Kirim hasil gabungan data ke model untuk insert tb_superior

		// ********************* 6. Upload file jika ada  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $hdrid, 'tb_superior');  // Upload file attach ke table tb_superior           
		}


		$data['status'] = $msg; // Menarik dan menampung $msg menjadi status

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
		$post_data4 = array('position_name2' => 'SUPERVISOR', 'position_name3' => 'MANAGER', 'position_name4' => 'QC MANAGER', 'position_name5' => 'GENERAL MANAGER'); // Buat array untuk post ke field HDRID


		$hdrid = $this->input->post('hdrid'); // Ambil inputan post hdrid

		$msg = "success Update"; // Menampung message untuk notif

		// **********************  Upload file (filename,hdrid,table)  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $hdrid, 'tb_superior');  // Upload file attach ke table tb_superior                
		}

		// *********************  Merge data All post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data4); // Menggabungkan semua data 

		// **********************  Simpan data ************************        
		$where = array('hdrid' => $hdrid);
		$this->M_superior->Update_Data($where, $post_datamerge, 'tb_superior'); // Kirim hasil gabungan,kondisi sesuai hdrid data ke model untuk update tb_superior
		$data['status'] = "berhasil update"; // Menarik dan menampung $msg menjadi status
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

	}

	/// @see ajax_delete()
	/// @note Delete Data
	/// @attention Delete data berdasarkan hdrid
	public function ajax_delete()
	{


		$where = array('hdrid' => $this->input->post('hdrid')); // Buat array untuk kondisi query,hdrid diambil dari input post hdrid
		$this->M_superior->Delete_Data($where, 'tb_superior'); // Kirim kondisi where,di table tb_superior untuk query di model
		$data['status'] = "berhasil dihapus"; // Menarik dan menampung $msg menjadi status
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

	}

	/// @see ajax_getbyhdrid()
	/// @note Mencari data berdasarkan hdrid
	/// @attention Untuk data field ketika view modal(View,Update)
	function ajax_getbyhdrid()
	{

		$hdrid = $this->input->get('hdrid'); // Tarik data hdrid dari input get
		$data = $this->M_superior->ajax_getbyhdrid($hdrid, 'tb_superior')->row(); // Kirim $hdrid,di table tb_superior untuk query di model
		echo json_encode($data); // Mengembalikan nilai data format json

	}



	/// @see upload_file_attach()
	/// @note Upload File 
	/// @attention Configurasi settingan upload file
	function upload_file_attach($filename, $hdrid, $table)
	{

		if (!empty($_FILES[$filename]['name'])) {

			$config['upload_path'] = './assets/upload'; // Configurasi folder yang ingin dijadikan penyimpanan untuk upload file  
			$config['allowed_types'] = 'gif|jpg|png|pdf'; // Configurasi tipe yang bisa di upload        
			$config['overwrite'] = True; // Configurasi agar bisa di ubah        
			$config['max_size']  = '1000000'; // Configurasi max size dari file yang di upload
			$config['max_width']  = '1024'; // Configurasi lebar dari file yang di upload  
			$config['max_height']  = '768'; // Configurasi tinggi dari file yang di upload
			$config['file_name'] = $hdrid . '_' . $filename; // Configurasi nama sesuai format hdrid dan juga file name
			$this->load->library('upload', $config); // Load library untuk upload file 
			$this->upload->initialize($config);

			if (!$this->upload->do_upload($filename)) {
				// $status = "error";
				$msg = $this->upload->display_errors(); // Munculkuan notif error
			} else {
				$msg = "success upload"; // Menampung message untuk notif

				$dataupload = $this->upload->data(); // Upload data 
				// $status = "success";
				// $msg = $dataupload['file_name']." berhasil diupload";                      
				$data_update = array($filename => $dataupload['file_name']); // Buat array    
				$where = array('hdrid' => $hdrid); // Buat array untuk kondisi di query model        
				$this->M_account->Update_Data($where, $data_update, $table); // Kirim semua parameter ke model

			}
		}
	}

	/// @see import()
	/// @note Import data 
	/// @attention Import data excel ke database
	public function import()
	{

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
			redirect('C_superior'); // Kembali ke halaman C_superior

		} else {

			$config['upload_path'] = './assets/excel/'; // Configurasi folder yang digunakan untuk menyimpan hasil upload
			$config['allowed_types'] = 'xls|xlsx'; // Type yang boleh di upload 

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('excel')) {
				$error = array('error' => $this->upload->display_errors());
			} else {

				$data = $this->upload->data();

				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' . $data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

				$index = 0;
				$rowexcel = 1;

				foreach ($sheetData as $key => $value) {

					// ********************* 0. Generate nomor transaksi  *********************     
					if ($rowexcel > 2) {

						// Cari database sekali saja
						if ($index == 0) {
							$mdate = "TR" . mdate('%Y%m', time());
							$hdrid2 = $this->M_superior->Max_data($mdate, 'tb_superior')->row();
							if ($hdrid2->hdrid == NULL) { // Jika belum ada
								$hdrid3 = $mdate . "001"; // Maka mulai dari 001
								//    $resultData[$index]['hdrid'] =   $hdrid3;
							} else {
								$hdrid3 = $hdrid2->hdrid; // Jika sudah ada
								$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1); //maka naik 1 level
								// $resultData[$index]['hdrid'] =   $hdrid3;    
							}
						} else {
							$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);  // maka naik 1 level
						}

						$resultData[$index]['hdrid'] =   $hdrid3;
						$resultData[$index]['transaction_date'] = mdate('%Y-%m-%d', time());

						// ---------------------------------- Import Macro Batas sini 1---------------------------------

						$resultData[$index]['nik'] = ucwords($value['A']); // Isi nik dari column A excel 
						$resultData[$index]['name'] = ucwords($value['B']); // Isi name dari column B excel
						$resultData[$index]['nik_superior2'] = ucwords($value['H']); // Isi nik_superior2 dari column H excel 
						$resultData[$index]['name_superior2'] = ucwords($value['I']); // Isi name_superior2 dari column I excel 
						$resultData[$index]['kode_section_superior2'] = ucwords($value['J']); // Isi kode_section_superior2 dari column J excel 
						$resultData[$index]['name_section_superior2'] = ucwords($value['K']); // Isi name_section_superior2 dari column K excel 
						$resultData[$index]['email_superior2'] = ucwords($value['L']); // Isi email_superior2 dari column L excel 

						$resultData[$index]['nik_superior3'] = ucwords($value['H']); // Isi nik_superior3 dari column H excel 
						$resultData[$index]['name_superior3'] = ucwords($value['I']); // Isi name_superior3 dari column I excel 
						$resultData[$index]['kode_section_superior3'] = ucwords($value['J']); // Isi kode_section_superior3 dari column J excel  
						$resultData[$index]['name_section_superior3'] = ucwords($value['K']); // Isi name_section_superior3 dari column K excel 
						$resultData[$index]['email_superior3'] = ucwords($value['L']); // Isi email_superior3 dari column L excel 

						$resultData[$index]['nik_superior4'] = ucwords($value['H']); // Isi nik_superior4 dari column H excel 
						$resultData[$index]['name_superior4'] = ucwords($value['I']); // Isi name_superior4 dari column I excel 
						$resultData[$index]['kode_section_superior4'] = ucwords($value['J']); // Isi kode_section_superior4 dari column J excel   
						$resultData[$index]['name_section_superior4'] = ucwords($value['K']); // Isi name_section_superior4 dari column K excel  
						$resultData[$index]['email_superior4'] = ucwords($value['L']); // Isi email_superior4 dari column L excel 

						$resultData[$index]['nik_superior5'] = ucwords($value['H']); // Isi nik_superior5 dari column H excel 
						$resultData[$index]['name_superior5'] = ucwords($value['I']); // Isi name_superior5 dari column I excel 
						$resultData[$index]['kode_section_superior5'] = ucwords($value['J']); // Isi kode_section_superior5 dari column J excel 
						$resultData[$index]['name_section_superior5'] = ucwords($value['K']); // Isi name_section_superior5 dari column K excel
						$resultData[$index]['email_superior5'] = ucwords($value['L']); // Isi email_superior5 dari column L excel 

						$resultData[$index]['nik_superior6'] = ucwords($value['H']); // Isi nik_superior6 dari column H excel 
						$resultData[$index]['name_superior6'] = ucwords($value['I']); // Isi name_superior6 dari column I excel 
						$resultData[$index]['kode_section_superior6'] = ucwords($value['J']); // Isi kode_section_superior6 dari column J excel 
						$resultData[$index]['name_section_superior6'] = ucwords($value['K']); // Isi name_section_superior6 dari column K excel
						$resultData[$index]['email_superior6'] = ucwords($value['L']); // Isi email_superior6 dari column L excel 
						// ---------------------------------- / Import Macro Batas sini 1--------------------------------
						$index++;
					}

					$rowexcel++;
				}

				unlink('./assets/excel/' . $data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_superior->insert_batch('tb_superior', $resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_superior'); // Kembali ke halaman C_superior
					}
				} else {
					// $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('C_superior'); // Kembali ke halaman C_superior
				}
			}
		}
	}

	/** ---------------------------------------------- /Close controller----------------------------------------------**/
}