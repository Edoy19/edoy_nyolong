<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Menu extends CI_Controller
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
	/** ---------------------------------------------- Menu----------------------------------------------**/

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_name') == "") { // unutk check session : jika session kosong maka balik ke control auth (login)
			redirect('Auth');
		}


		$this->load->helper('date'); //Untuk load fungsi date now()    
		$this->load->helper('file');  //untuk fungsi attach       
		$this->load->model('M_Menu'); //untuk load model Menu

		$this->load->model('UserModel');  //untuk load user model hak akses menu     
		$this->load->library('encryption');  //untuk encryp data

		// Cari hak akses by controller
		$Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'), 'C_Menu');
		if ($Hak_akses->found != 'found') {
			redirect('Auth'); // Kembali ke halaman Auth
		}
	}

	/// @see index()
	/// @note Fungsi tampilan utama
	/// @attention Mengirim data data yang diperlukan untuk view
	public function Index()
	{

		$menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
		$menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
		$data['menu_name'] =  $menu_name;
		$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
		$data['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)

		$data['parent_id'] = $this->M_Menu->Get_Where(array('ParentId' => ''), 'a_menu')->result(); //search filter parent id

		$this->load->view('result/layout/header'); //Tampil header
		$this->load->view('templates/sidebar', $data_akses); // Tampil Sidebar
		$this->load->view('Menu/V_Menu', $data); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer

	}

	/// @see view_data()
	/// @note Menampilkan data yang ada di table 
	/// @attention Menampilkan data tanpa kondisi
	function view_data()
	{

		$tables = "a_menu";   // tabel yang akan di load
		$search = array('hdrid', 'menu_id', 'menu_name', 'controller', 'parentid', 'level', 'icon'); //default kolom pencarian di datatabel        
		$isWhere = null; // where kondisi : null       
		header('Content-Type: application/json');
		echo $this->M_Menu->get_tables($tables, $search, $isWhere); // process data dari datamodel

	}

	/// @see view_data_where()
	/// @note Menampilkan data yang ada di table 
	/// @attention Menampilkan data dengan kondisi tertentu
	// Satu table dengan where
	function view_data_where()
	{

		$tables = "a_menu";          // tabel yang akan di load
		$search = array('hdrid', 'menu_id', 'menu_name', 'controller', 'parentid', 'level', 'icon'); //default kolom pencarian di datatabel   
		if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') { //default jika filter date kosong     
			$where  = array('transaction_date >' => '2020-01-01');      //default data akan dimunculkan tahun 2020-01-01          
		} else {
			$where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate']); // jika filter date diisi    
		};
		$isWhere = null; // where kondisi null       
		header('Content-Type: application/json'); // Format json
		echo $this->M_Menu->get_tables_where($tables, $search, $where, $isWhere); // process data dari datamodel

	}

	/// @see ajax_add()
	/// @note Add Data
	/// @attention Tambah data baru ke database
	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  ********************* 
		$mdate = "TR" . mdate('%Y%m', time());        // mengambil data tanggal sekarang
		$hdrid2 = $this->M_Menu->Max_data($mdate, 'a_menu')->row();   // mengambil maximal nomor hdrid /transaksi id
		if ($hdrid2->hdrid == NULL) { // jika traksaksi id belum ada          
			$hdrid3 = $mdate . "001"; // dimuali dari angka 001
		} else { // mengambil maximal hdrid yang sudah ada
			$hdrid3 = $hdrid2->hdrid;
			$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);  // transaksi id yang sudah ada ditambah 1 (increase)
		}
		$hdrid = $hdrid3; // tampung header id

		// ********************* 1. Set hdrid  *********************
		$post_data2 = array('hdrid' => $hdrid3); // hdrid tampung ke array 

		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time())); // tanggal tampung ke array 

		$menu_code = $this->encryption->encrypt($this->input->post('menu_id'));

		$post_data4 = array('menu_id_encrypt' => $menu_code); // hdrid tampung ke array 


		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();     // semua post tampung ke array 
		$msg = "success save"; //Pesan success

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3, $post_data4); // menggabungkan semua array

		// ********************* 5. Simpan data     *********************

		$this->M_Menu->Input_Data($post_datamerge, 'a_menu'); // model input data ke tabel

		// ********************* 6. Upload file jika ada  *********************   
		if (!empty($_FILES['file']['name'])) // Jika file attach ada
		{
			$this->upload_file_attach('file', $hdrid, 'a_menu'); // perintah untuk upload  
		}


		$data['status'] = $msg; // simpan data status
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // send json data

	}

	/// @see ajax_update()
	/// @note Update Data
	/// @attention Updata data field sesuai hdrid
	public function ajax_update()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$hdrid = $this->input->post('hdrid');

		$msg = "success Update";

		// **********************  Upload file (filename,hdrid,table)  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $hdrid, 'a_menu');
		}

		// *********************  Merge data All post *********************
		$menu_code = $this->encryption->encrypt($this->input->post('menu_id'));
		$post_data2 = array('menu_id_encrypt' => $menu_code); // hdrid tampung ke array 

		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data2);

		// **********************  Simpan data ************************        
		$where = array('hdrid' => $hdrid);
		$this->M_Menu->Update_Data($where, $post_datamerge, 'a_menu');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/// @see ajax_delete()
	/// @note Delete Data
	/// @attention Delete data berdasarkan hdrid
	public function ajax_delete()
	{


		$where = array('hdrid' => $this->input->post('hdrid'));
		$this->M_Menu->Delete_Data($where, 'a_menu');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/// @see ajax_getbyhdrid()
	/// @note Mencari data berdasarkan hdrid
	/// @attention Untuk data field ketika view modal(View,Update)
	function ajax_getbyhdrid()
	{

		$hdrid = $this->input->get('hdrid');
		$data = $this->M_Menu->ajax_getbyhdrid($hdrid, 'a_menu')->row();
		echo json_encode($data);
	}

	/// @see upload_file_attach()
	/// @note Upload File 
	/// @attention Configurasi settingan upload file
	function upload_file_attach($filename, $hdrid, $table)
	{

		if (!empty($_FILES[$filename]['name'])) {

			$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['overwrite'] = True;
			$config['max_size']  = '1000000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['file_name'] = $hdrid . '_' . $filename;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload($filename)) {
				// $status = "error";
				$msg = $this->upload->display_errors();
			} else {
				$msg = "success upload";

				$dataupload = $this->upload->data();

				$data_update = array($filename => $dataupload['file_name']);

				$where = array('hdrid' => $hdrid);
				$this->M_Menu->Update_Data($where, $data_update, $table);
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
			redirect('C_Menu');
		} else {

			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';

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

				foreach ($sheetData as $key => $value) {

					// ********************* 0. Generate nomor transaksi  *********************          

					// Cari database sekali saja
					if ($index == 0) {
						$mdate = "TR" . mdate('%Y%m', time());
						$hdrid2 = $this->M_Menu->Max_data($mdate, 'a_menu')->row();
						if ($hdrid2->hdrid == NULL) {
							// Jika belum ada
							$hdrid3 = $mdate . "001";
							//    $resultData[$index]['hdrid'] =   $hdrid3;
						} else {
							$hdrid3 = $hdrid2->hdrid;
							// Jika sudah ada maka naik 1 level
							$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);
							// $resultData[$index]['hdrid'] =   $hdrid3;    
						}
					} else {
						$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);
					}

					$resultData[$index]['hdrid'] =   $hdrid3;
					$resultData[$index]['transaction_date'] = mdate('%Y-%m-%d', time());

					// ---------------------------------- Import Macro Batas sini 1---------------------------------

					//  Sample

					$resultData[$index]['menu_id'] = ucwords($value['A']);
					$resultData[$index]['menu_name'] = ucwords($value['B']);
					$resultData[$index]['controller'] = ucwords($value['C']);
					$resultData[$index]['parentid'] = ucwords($value['D']);
					$resultData[$index]['level'] = ucwords($value['E']);
					$resultData[$index]['icon'] = ucwords($value['F']);


					// ---------------------------------- / Import Macro Batas sini 1--------------------------------

					// if ($key != 1) {

					// $check = $this->M_legalitas->check_nama($value['C']);

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
					// 	$resultData[$index]['nama_doc'] = ucwords($value['C']);
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

				unlink('./assets/excel/' . $data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_Menu->insert_batch('a_menu', $resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_Menu');
					}
				} else {
					// $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('C_Menu');
				}
			}
		}
	}

	/** ---------------------------------------------- /Close controller----------------------------------------------**/
}
