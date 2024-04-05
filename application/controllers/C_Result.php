<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Result extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_name') == "") { // unutk check session : jika session kosong maka balik ke control auth (login)
			redirect('Auth');
		}
		$this->load->helper('date'); //Untuk load fungsi date now()    
		$this->load->helper('file');  //untuk fungsi attach       
		$this->load->model('M_Result'); //untuk load model Menu
		$this->load->model('UserModel');  //untuk load user model hak akses menu     
		$this->load->library('encryption');  //untuk encryp data
		// Cari hak akses by controller
		$Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'), 'C_Result');
		if ($Hak_akses->found != 'found') {
			redirect('Auth'); // Kembali ke halaman Auth
		}
	}

	/// @see index()
	/// @attention Mengirim data data yang diperlukan untuk view
	public function Index()
	{

		$menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
		$menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  

		$data['part_model'] = $this->M_Result->get_tb_part_model(); // Menarik dan menampung ke data nik
		$data['customer'] = $this->M_Result->get_tb_customer_name(); // Menarik dan menampung ke data nik
		$data['spv'] = $this->M_Result->get_tb_spv(); // Menarik dan menampung ke data nik
		$data['qc'] = $this->M_Result->get_tb_qc(); // Menarik dan menampung ke data nik
		$data['user_role'] = $this->M_Result->get_tb_user_system(); // Menarik dan menampung ke data nik
		// $data['lot'] =$this->M_Result->get_tb_lot();
		$data['superior'] = $this->M_Result->get_leaderbyspv();
		$data['user'] = $this->M_Result->get_tb_user_system($this->session->userdata('name'));

		$data['menu_name'] =  $menu_name;
		$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
		$data['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
		$data['sortir'] = $this->db->get('sortir')->result();
		$data['approve'] = $this->db->get('rework')->result();
		//$data['parent_id']=$this->M_Result->Get_Where(array('ParentId' =>''),'tb_result')->result(); //search filter parent id

		// $this->load->view('templates/header'); //Tampil header
		$this->load->view('result/layout/header'); //Tampil header
		$this->load->view('templates/sidebar', $data_akses); // Tampil Sidebar
		$this->load->view('Result/V_Result', $data); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer

	}

	function spv()
	{
		$this->load->model('M_Result');
		$data['query'] = $this->M_Result->get_tb_spv();
		echo $this->M_Result->get_spv('username', $data);
	}

	/// @attention Menampilkan data yang ada di table  tanpa kondisi

	function view_data()
	{
		$tables = "rework";
		$search = array('hdrid', 'part_number', 'part_name', 'cust_name', 'cust_name2', 'problem', 'occ_place', 'occ_date', 'ng_qty', 'defect_lot', 'area', 'sketch1', 'deskripsi1', 'sketch2', 'deskripsi2', 'skecth3', 'deskripsi3', 'checking_method', 'attach_ik', 'marking_photo', 'marking', 'sortir', 'perubahan_sortir');
		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables($tables, $search, $isWhere);
	}

	function view_data_result()
	{

		$tables = "tb_result";   // tabel yang akan di load
		$search = array('id_result', 'ResultDate', 'StartTime', 'FinishTime', 'InspectorName', 'QTYTotal', 'QTYok', 'QTYng', 'Remarks', 'part_number', 'lot_produksi', 'id_sortir'); //default kolom pencarian di datatabel        
		$isWhere = null; // where kondisi : null       
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables($tables, $search, $isWhere); // process data dari datamodel

	}

	function view_data_sortir()
	{
		$tables = "sortir";
		$search = array('id_sortir', 'part_number', 'lot_produksi', 'customer', 'masalah_stok', 'masalah_kirim_customer', 'tgl_berangkat_customer', 'tgl_datang_customer', 'masalah_stok_yusen', 'tgl_berangkat_yusen', 'tgl_datang_yusen', 'qty', 'perlu_info');

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables($tables, $search, $isWhere);
	}

	function view_data_perubahan()
	{

		$tables = "change_sortir";
		$search = array('id', 'tgl_perubahan', 'jenis_perubahan', 'check_spv', 'check_mgr');
		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables($tables, $search, $isWhere);
	}

	/// @attention Menampilkan data  yang ada di table  dengan kondisi tertentu
	// Satu table dengan where

	function view_data_where()
	{
		$tables = "rework";
		$search = array('hdrid', 'part_number', 'part_name', 'cust_name', 'cust_name2', 'problem', 'occ_place', 'occ_date', 'ng_qty', 'defect_lot', 'area', 'sketch1', 'deskripsi1', 'sketch2', 'deskripsi2', 'skecth3', 'deskripsi3', 'checking_method', 'attach_ik', 'marking_photo', 'marking', 'sortir', 'perubahan_sortir');
		if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
			$where  = array('transaction_date >' => '2020-01-01');
		} else {
			$where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate']);
		};
		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables_where($tables, $search, $where, $isWhere);
	}

	function view_data_where_result()
	{
		$tables = "tb_result";          // tabel yang akan di load
		$search = array('id_result', 'ResultDate', 'StartTime', 'FinishTime', 'InspectorName', 'QTYTotal', 'QTYok', 'QTYng', 'Remarks', 'id_request', 'part_number', 'lot_produksi', 'id_sortir'); //default kolom pencarian di datatabel        
		// if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') { //default jika filter date kosong     
		// 	$where  = array('transaction_date >' => '2020-01-01');      //default data akan dimunculkan tahun 2020-01-01          
		// } else {
		$where  = array('transaction_date >' => '2020-01-01', 'id_request' => $_POST['hdrid']);		// };
		$isWhere = null; // where kondisi null       
		header('Content-Type: application/json'); // Format json
		echo $this->M_Result->get_tables_where($tables, $search, $where, $isWhere); // process data dari datamodel
	}

	function view_data_where_sortir()
	{
		$tables = "sortir";
		$search = array('id_sortir', 'part_number', 'lot_produksi', 'customer', 'masalah_stok', 'masalah_kirim_customer', 'tgl_berangkat_customer', 'tgl_datang_customer', 'masalah_stok_yusen', 'tgl_berangkat_yusen', 'tgl_datang_yusen', 'qty', 'perlu_info', 'id_request');

		// if($_POST['hdrid']==''){
		//     $where  = array('transaction_date >'=>'2020-01-01');              
		// }else{
		//     $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
		// };
		// if($_POST['hdrid']==''){
		$where  = array('transaction_date >' => '2020-01-01', 'id_request' => $_POST['hdrid']);
		// }else{
		//     $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
		// };

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables_where($tables, $search, $where, $isWhere);
	}

	function view_data_where_perubahan()
	{

		$tables = "change_sortir";
		$search = array('id', 'tgl_perubahan', 'jenis_perubahan', 'check_spv', 'check_mgr', 'id_request');
		// if($_POST['hdrid']==''){
		//     $where  = array('transaction_date >'=>'2020-01-01');              
		// }else{
		//     $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
		// };
		// if($_POST['hdrid']==''){
		$where  = array('transaction_date >' => '2020-01-01', 'id_request' => $_POST['hdrid']);
		// }else{
		//     $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
		// };

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Result->get_tables_where($tables, $search, $where, $isWhere);
	}

	function view_data_where_approval()
	{
		$table = "approval";
		$search = array('id_approval', 'id_request', 'tgl_approve', 'request_rework', 'checked_rework', 'approved_rework');
		$where = array('id_request' => $_POST['hdrid']);

		// Mengambil data menggunakan model
		$result = $this->M_Result->get_tables_where($table, $search, $where);

		// Mengirimkan data dalam format JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}


	/// @see ajax_add()
	/// @note Add Data
	/// @attention Tambah data baru ke database

	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "REQ" . mdate('%Y%m', time());
		$hdrid2 = $this->M_Result->Max_data($mdate, 'rework')->row();
		if ($hdrid2->hdrid == NULL) {
			// Jika belum ada
			$hdrid3 = $mdate . "001";
		} else {
			// Jika sudah ada maka naik 1 level
			$hdrid3 = $hdrid2->hdrid; // Jika sudah ada 
			$hdrid3 = "REQ" . (intval(substr($hdrid3, 3, 11)) + 1);
			// $number = intval(substr($hdrid2->hdrid,3,11)) + 1; // Ambil bagian numerik dan tambahkan 1
			// $hdrid3 = $mdate . str_pad($number, 1, STR_PAD_LEFT); // Tambahkan padding nol jika diperlukan
		}
		$hdrid = $hdrid3;

		// ********************* 1. Set hdrid  *********************
		$post_data2 = array('hdrid' => $hdrid3);

		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));

		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();

		$msg = "success save";
		$occdate = $this->input->post('occ_date');
		if ($occdate == '') {
			$post_data5 = array('occ_date' => null);
		} else {
			$post_data5 = array('occ_date' => $occdate);
		}

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3, $post_data5);
		$post_update = array('id_request' => $hdrid);
		// ********************* 5. Simpan data     *********************
		$where = array('id_request' => $this->input->post('hdrid'));
		$this->M_Result->Input_Data($post_datamerge, 'rework');
		$this->M_Result->Update_Data($where, $post_update, 'sortir');
		$this->M_Result->Update_Data($where, $post_update, 'change_sortir');
		$this->M_Result->Update_Data($where, $post_update, 'tb_result');

		// ********************* 6. Upload file jika ada  *********************   
		if (!empty($_FILES['sketch1']['name'])) {
			$this->upload_file_sketch('sketch1', $hdrid, 'rework');
		}
		if (!empty($_FILES['sketch2']['name'])) {
			$this->upload_file_sketch('sketch2', $hdrid, 'rework');
		}
		if (!empty($_FILES['skecth3']['name'])) {
			$this->upload_file_sketch('skecth3', $hdrid, 'rework');
		}
		if (!empty($_FILES['attach_ik']['name'])) {
			$this->upload_file_attach('attach_ik', $hdrid, 'rework');
		}
		if (!empty($_FILES['marking_photo']['name'])) {
			$this->upload_file_sketch('marking_photo', $hdrid, 'rework');
		}

		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	// form_sortir
	public function ajax_add_sortir()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "SOR" . mdate('%Y%m', time());
		$id_sortir2 = $this->M_Result->Max_data_sortir($mdate, 'sortir')->row();
		if ($id_sortir2->id_sortir == NULL) {
			// Jika belum ada
			$id_sortir3 = $mdate . "001";
		} else {
			// Jika sudah ada maka naik 1 level
			$id_sortir3 = $id_sortir2->id_sortir; // Jika sudah ada 
			$id_sortir3 = "SOR" . (intval(substr($id_sortir3, 3, 11)) + 1);
			// $number = intval(substr($id_sortir2->id_sortir,3,11)) + 1; // Ambil bagian numerik dan tambahkan 1
			// $id_sortir3 = $mdate . str_pad($number, 1, STR_PAD_LEFT); // Tambahkan padding nol jika diperlukan
		}
		$id_sortir = $id_sortir3;

		// ********************* 1. Set id_sortir  *********************
		$post_data2 = array('id_sortir' => $id_sortir3);

		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));

		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();

		$msg = "success save";

		//ubah tgl_customer
		$tgl_brngkt = $this->input->post('tgl_berangkat_customer');
		$tgl_dtg = $this->input->post('tgl_datang_customer');
		$tgl_byusen = $this->input->post('tgl_berangkat_yusen');
		$tgl_dtgyusen = $this->input->post('tgl_datang_yusen');

		$tgl_customer = array(
			'tgl_berangkat_customer' => $tgl_brngkt ? $tgl_brngkt : null,
			'tgl_datang_customer' => $tgl_dtg ? $tgl_dtg : null,
		);
		//ubah tgl_yusen

		$tgl_yusen = array(
			'tgl_berangkat_yusen' => $tgl_byusen ? $tgl_byusen : null,
			'tgl_datang_yusen' => $tgl_dtgyusen ? $tgl_dtgyusen : null,
		);

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3, $tgl_customer, $tgl_yusen);

		// ********************* 5. Simpan data     *********************

		$this->M_Result->Input_Data($post_datamerge, 'sortir');

		// ********************* 6. Upload file jika ada  *********************   

		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	// form_perubahan
	public function ajax_add_perubahan()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "CHG" . mdate('%Y%m', time());
		$id2 = $this->M_Result->Max_data_perubahan($mdate, 'change_sortir')->row();
		if ($id2->id == NULL) {
			// Jika belum ada
			$id3 = $mdate . "001";
		} else {
			// Jika sudah ada maka naik 1 level
			$id3 = $id2->id; // Jika sudah ada 
			$id3 = "CHG" . (intval(substr($id3, 3, 11)) + 1);
			// $id3 = "SOR" . (intval(substr($id3, 3, 11))+1);
			// $number = intval(substr($id2->id,3,11)) + 1; // Ambil bagian numerik dan tambahkan 1
			// $id3 = $mdate . str_pad($number, 1, STR_PAD_LEFT); // Tambahkan padding nol jika diperlukan
		}
		$id = $id3;

		// ********************* 1. Set id  *********************
		$post_data2 = array('id' => $id3);

		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));

		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();

		$msg = "success save";

		$tgl_perubahan_sortir = $this->input->post('tgl_perubahan');

		$tgl_perubahan = array(
			'tgl_perubahan' => $tgl_perubahan_sortir ? $tgl_perubahan_sortir : null,
		);

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3, $tgl_perubahan);

		// ********************* 5. Simpan data     *********************

		$this->M_Result->Input_Data($post_datamerge, 'change_sortir');

		// ********************* 6. Upload file jika ada  *********************   

		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_add_result()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "RES" . mdate('%Y%m', time()); // Buat HDRID otomatis dengan format RA Tahun Bulan Jam (TR202210)                  
		$id_result2 = $this->M_Result->Max_data_result($mdate, 'tb_result')->row();   // Mengambil row dari database            
		if ($id_result2->id_result == NULL) { // Jika id_result belum ada
			$id_result3 = $mdate . "001"; // Maka mulai dari 001
		} else {
			$id_result3 = $id_result2->id_result; // Jika sudah ada 
			$id_result3 = "RES" . (intval(substr($id_result3, 3, 11)) + 1); // Jika sudah ada maka naik 1 level
		}
		$id_result = $id_result3;
		// ********************* 1. Set id_result  *********************
		$post_data2 = array('id_result' => $id_result3);

		// *********************  Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time())); // Buat array untuk post ke field Transaction_date

		// ********************* 2. Collect all data post *********************     
		$post_data = $this->input->post(); // Ambil semua data post    
		$tglResult = $this->input->post('ResultDate');
		$tgl_result = array(
			'ResultDate' => $tglResult ? $tglResult : null,
		);

		$msg = "success save"; // Menampung message untuk notif

		// ********************** 4. Upload file jika ada  *********************   
		// if (!empty($_FILES['file']['name'])) {
		// }

		// ********************* 3. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3, $tgl_result); // Menggabungkan semua data 

		// ********************** 4. Simpan data     *********************

		$this->M_Result->Input_Data($post_datamerge, 'tb_result');  // Kirim hasil gabungan data ke model untuk insert tb_tipe_transfer


		$data['status'] = $msg; // Menarik dan menampung $msg menjadi status

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

	}

	/// @note Update Data
	/// @attention Updata data field sesuai id_result

	public function ajax_update()
	{
		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$hdrid = $this->input->post('hdrid');

		// Inisialisasi array data yang akan diupdate
		$data = array(
			'occ_date' => $this->input->post('occ_date'),
			// Masukkan kolom lainnya sesuai kebutuhan
		);

		// Periksa jika 'occ_date' inputnya null, jika demikian, set nilai 'occ_date' dalam array menjadi null
		if ($this->input->post('occ_date') === null) {
			$data['occ_date'] = null;
		}

		$msg = "Berhasil Update";

		// **********************  Upload file (filename,hdrid,table)  *********************

		if (!empty($_FILES['sketch1']['name'])) {
			$this->upload_file_sketch('sketch1', $hdrid, 'rework');
		}
		if (!empty($_FILES['sketch2']['name'])) {
			$this->upload_file_sketch('sketch2', $hdrid, 'rework');
		}
		if (!empty($_FILES['skecth3']['name'])) {
			$this->upload_file_sketch('skecth3', $hdrid, 'rework');
		}
		if (!empty($_FILES['attach_ik']['name'])) {
			$this->upload_file_attach('attach_ik', $hdrid, 'rework');
		}
		if (!empty($_FILES['marking_photo']['name'])) {
			$this->upload_file_sketch('marking_photo', $hdrid, 'rework');
		}
		$occdate = $this->input->post('occ_date');
		if ($occdate == '') {
			$post_data5 = array('occ_date' => null);
		} else {
			$post_data5 = array('occ_date' => $occdate);
		}

		// *********************  Merge data All post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data, $post_data5);

		// **********************  Simpan data ************************        
		$where = array('hdrid' => $hdrid);
		$this->M_Result->Update_Data($where, $post_datamerge, 'rework');

		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_update_sortir()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$id_sortir = $this->input->post('id_sortir');

		$msg = "Berhasil Update";

		// *********************  Merge data All post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data);

		$data = array(
			'part_number' => $this->input->post('part_number'),
			'lot_produksi' => $this->input->post('lot_produksi'),
			'customer' => $this->input->post('customer'),
			'masalah_stok' => $this->input->post('masalah_stok'),
			'masalah_kirim_customer' => $this->input->post('masalah_kirim_customer'),
			'tgl_berangkat_customer' => $this->input->post('tgl_berangkat_customer'),
			'tgl_datang_customer' => $this->input->post('tgl_datang_customer'),
			'masalah_stok_yusen' => $this->input->post('masalah_stok_yusen'),
			'tgl_berangkat_yusen' => $this->input->post('tgl_berangkat_yusen'),
			'tgl_datang_yusen' => $this->input->post('tgl_datang_yusen'),
			'qty' => $this->input->post('qty'),
			'perlu_info' => $this->input->post('perlu_info'),
		);

		// Periksa jika 'tgl_berangkat_customer' inputnya null atau kosong, jika demikian, set nilainya menjadi null
		if ($this->input->post('tgl_berangkat_customer') === null || $this->input->post('tgl_berangkat_customer') === '') {
			$data['tgl_berangkat_customer'] = null;
		}
		if ($this->input->post('tgl_datang_customer') === null || $this->input->post('tgl_datang_customer') === '') {
			$data['tgl_datang_customer'] = null;
		}
		if ($this->input->post('tgl_berangkat_yusen') === null || $this->input->post('tgl_berangkat_yusen') === '') {
			$data['tgl_berangkat_yusen'] = null;
		}
		if ($this->input->post('tgl_datang_yusen') === null || $this->input->post('tgl_datang_yusen') === '') {
			$data['tgl_datang_yusen'] = null;
		}

		// **********************  Simpan data ************************        
		$where = array('id_sortir' => $id_sortir);
		$this->M_Result->Update_Data_Sortir($where, $data, 'sortir');

		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		// print_r($post_data);

	}

	public function ajax_update_perubahan()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$id = $this->input->post('id');

		$msg = "success Update";

		// **********************  Upload file (filename,hdrid,table)  *********************   


		// *********************  Merge data All post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data);

		$data = array(
			'tgl_perubahan' => $this->input->post('tgl_perubahan'),
			'jenis_perubahan' => $this->input->post('jenis_perubahan'),
			'check_spv' => $this->input->post('check_spv'),
			'check_mgr' => $this->input->post('check_mgr'),
		);

		// **********************  Simpan data ************************        
		$where = array('id' => $id);
		$this->M_Result->Update_Data_Perubahan($where, $data, 'change_sortir');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		// print_r($post_data);

	}

	public function ajax_update_result()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$id_result = $this->input->post('id_result');

		$msg = "success Update";

		// **********************  Upload file (filename,id_result,table)  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $id_result, 'tb_result');
		}

		// *********************  Merge data All post *********************
		//$menu_code = $this->encryption->encrypt($this->input->post('menu_id'));
		//$post_data2=array('menu_id_encrypt'=>$menu_code); // id_result tampung ke array 

		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data);

		$data = array(
			'ResultDate' => $this->input->post('ResultDate'),
			'StartTime' => $this->input->post('StartTime'),
			'FinishTime' => $this->input->post('FinishTime'),
			'InspectorName' => $this->input->post('InspectorName'),
			'QTYTotal' => $this->input->post('QTYTotal'),
			'QTYok' => $this->input->post('QTYok'),
			'QTYng' => $this->input->post('QTYng'),
			'Remarks' => $this->input->post('Remarks'),
		);
		if ($this->input->post('ResultDate') === null || $this->input->post('ResultDate') === '') {
			$data['ResultDate'] = null;
		}

		// **********************  Simpan data ************************        
		$where = array('id_result' => $id_result);
		$this->M_Result->Update_Data($where, $data, 'tb_result');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/// @see ajax_delete()
	/// @note Delete Data
	/// @attention Delete data berdasarkan id_result

	public function ajax_delete()
	{

		$where = array('hdrid' => $this->input->post('hdrid'));
		$this->M_Result->Delete_Data($where, 'rework');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete_sortir()
	{

		$where = array('id_sortir' => $this->input->post('id_sortir'));
		$this->M_Result->Delete_Data_Sortir($where, 'sortir');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete_perubahan()
	{

		$where = array('id' => $this->input->post('id'));
		$this->M_Result->Delete_Data_Perubahan($where, 'change_sortir');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete_result()
	{


		$where = array('id_result' => $this->input->post('id_result'));
		$this->M_Result->Delete_Data($where, 'tb_result');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/// @see ajax_getbyid_result()
	/// @note Mencari data berdasarkan id_result
	/// @attention Untuk data field ketika view modal(View,Update)

	function ajax_getbyhdrid()
	{

		$hdrid = $this->input->get('hdrid');
		$data = $this->M_Result->ajax_getbyhdrid($hdrid, 'rework')->row();
		echo json_encode($data);
	}

	function ajax_getbyhdrid_sortir()
	{

		$id_sortir = $this->input->get('sortir');
		$data = $this->M_Result->ajax_getbyhdrid_sortir($id_sortir, 'sortir')->row();
		echo json_encode($data);
	}

	function ajax_getbyhdrid_perubahan()
	{

		$id = $this->input->get('change_sortir');
		$data = $this->M_Result->ajax_getbyhdrid_perubahan($id, 'change_sortir')->row();
		echo json_encode($data);
	}

	function ajax_getbyhdrid_result()
	{

		$id_result = $this->input->get('id_result');
		$data = $this->M_Result->ajax_getbyhdrid_result($id_result, 'tb_result')->row();
		echo json_encode($data);
	}

	// function ajax_getbyhdrid_approval()
	// {
	// 	$id_approval = $this->input->get('id_approval');
	// 	$data = $this->M_Result->ajax_getbyhdrid_approval($id_approval, 'approval')->row();
	// 	echo json_encode($data);
	// }


	function ajax_rework()
	{
		$data['rework'] = $this->db->get('rework')->result();
		echo json_encode($data);
	}
	function ajax_sortir()
	{
		$data['sortir'] = $this->db->get('sortir')->result();
		echo json_encode($data);
	}
	function ajax_perubahan()
	{
		$data['change_sortir'] = $this->db->get('change_sortir')->result();
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
				$this->M_Result->Update_Data($where, $data_update, $table);
			}
		}
	}

	/** ---------------------------------------------- /Close controller----------------------------------------------**/

	// public function import()
	// {

	// 	// $this->form_validation->set_rules('excel', 'File', 'trim|required');

	// 	if ($_FILES['excel']['name'] == '') {

	// 		$this->session->set_flashdata('msg', 'File harus diisi');
	// 		redirect('C_Result');
	// 	} else {

	// 		$config['upload_path'] = './assets/excel/resultImport';
	// 		$config['allowed_types'] = 'xls|xlsx';

	// 		$this->load->library('upload', $config);

	// 		if (!$this->upload->do_upload('excel')) {
	// 			$error = array('error' => $this->upload->display_errors());
	// 		} else {
	// 			$data = $this->upload->data();
	// 			error_reporting(E_ALL);
	// 			date_default_timezone_set('Asia/Jakarta');

	// 			include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

	// 			$inputFileName = './assets/excel/resultImport/' . $data['file_name'];
	// 			$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
	// 			$sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

	// 			$index = 0;

	// 			foreach ($sheetData as $key => $value) {

	// 				if ($index > 1 && ucwords($value['D']) != '') {


	// 					// ********************* 0. Generate nomor transaksi  *********************          

	// 					// Cari database sekali saja
	// 					if ($index == 2) {
	// 						$mdate = "REQ" . mdate('%Y%m', time());
	// 						$hdrid2 = $this->M_Result->Max_data($mdate, 'rework')->row();
	// 						if ($hdrid2->hdrid == NULL) {
	// 							// Jika belum ada
	// 							$hdrid3 = $mdate . "001";
	// 							//    $resultData[$index]['hdrid'] =   $hdrid3;
	// 						} else {
	// 							$hdrid3 = $hdrid2->hdrid;
	// 							// Jika sudah ada maka naik 1 level
	// 							$hdrid3 = "REQ" . (intval(substr($hdrid3, 2, 10)) + 1);
	// 							// $resultData[$index]['hdrid'] =   $hdrid3;    
	// 						}
	// 					} else {
	// 						$hdrid3 = "REQ" . (intval(substr($hdrid3, 2, 10)) + 1);
	// 					}

	// 					// $resultData[$index]['hdrid'] =   $hdrid3;
	// 					$resultData[$index]['transaction_date'] = mdate('%Y-%m-%d', time());

	// 					// ---------------------------------- Import Macro Batas sini 1---------------------------------

	// 					$resultData[$index]['part_number'] = ucwords($value['A']);
	// 					$resultData[$index]['part_name'] = ucwords($value['A']);
	// 					$resultData[$index]['cust_name'] = ucwords($value['A']);
	// 					$resultData[$index]['cust_name2'] = ucwords($value['A']);
	// 					$resultData[$index]['problem'] = ucwords($value['A']);
	// 					$resultData[$index]['occ_place'] = ucwords($value['A']);
	// 					$resultData[$index]['occ_date'] = ucwords($value['A']);
	// 					$resultData[$index]['ng_qty'] = ucwords($value['A']);
	// 					$resultData[$index]['defect_lot'] = ucwords($value['A']);
	// 					$resultData[$index]['area'] = ucwords($value['A']);
	// 					$resultData[$index]['sketch1'] = ucwords($value['A']);
	// 					$resultData[$index]['deskripsi1'] = ucwords($value['A']);
	// 					$resultData[$index]['sketch2'] = ucwords($value['A']);
	// 					$resultData[$index]['deskripsi2'] = ucwords($value['A']);
	// 					$resultData[$index]['sketch3'] = ucwords($value['A']);
	// 					$resultData[$index]['deskripsi3'] = ucwords($value['A']);
	// 					$resultData[$index]['checking_method'] = ucwords($value['A']);
	// 					$resultData[$index]['attach_ik'] = ucwords($value['A']);
	// 					$resultData[$index]['marking_photo'] = ucwords($value['A']);
	// 					$resultData[$index]['marking'] = ucwords($value['A']);
	// 					$resultData[$index]['sortir'] = ucwords($value['A']);
	// 					$resultData[$index]['perubahan_sortir'] = ucwords($value['A']);
	// 					$resultData[$index]['request_to'] = ucwords($value['A']);
	// 					$resultData[$index]['nama_spv'] = ucwords($value['A']);
	// 					$resultData[$index]['request_by'] = ucwords($value['A']);
	// 					$resultData[$index]['checked_by'] = ucwords($value['A']);
	// 					$resultData[$index]['approved_by'] = ucwords($value['A']);
	// 					$resultData[$index]['jabatan_request'] = ucwords($value['A']);
	// 					$resultData[$index]['jabatan_checked'] = ucwords($value['A']);
	// 					$resultData[$index]['jabatan_approved'] = ucwords($value['A']);
	// 				}

	// 				$index++;
	// 			}

	// 			unlink('./assets/excel/resultImport/' . $data['file_name']);

	// 			if (count($resultData) != 0) {
	// 				$result = $this->M_Result->insert_batch('tb_result', $resultData);
	// 				if ($result > 0) {
	// 					// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
	// 					redirect('C_Result');
	// 				}
	// 			} else {
	// 				// $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
	// 				redirect('C_Result');
	// 			}
	// 		}
	// 	}
	// }
}
