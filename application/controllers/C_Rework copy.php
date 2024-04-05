<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Rework extends CI_Controller
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
	/** ---------------------------------------------- Customer_Name----------------------------------------------**/

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_name') == "") {
			redirect('Auth');
		}

		$this->load->helper('date');
		$this->load->helper('file');
		$this->load->model('M_Rework');
		$this->load->model('UserModel');  //untuk load user model hak akses menu     
		//$this->load->library('encryption');  //untuk encryp data
		$this->load->database('default');

		// Cari hak akses by controller
		$Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'), 'C_Rework');
		if ($Hak_akses->found != 'found') {
			redirect('Auth'); // Kembali ke halaman Auth
		}
	}

	public function Index()
	{
		$menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
		$menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  

		$data['part_model'] = $this->M_Rework->get_tb_part_model(); // Menarik dan menampung ke data nik
		$data['customer'] = $this->M_Rework->get_tb_customer_name(); // Menarik dan menampung ke data nik
		// $data['spv'] = $this->M_Rework->get_tb_spv(); // Menarik dan menampung ke data nik
		// $data['qc'] = $this->M_Rework->get_tb_qc(); // Menarik dan menampung ke data nik
		$data['user_role'] = $this->M_Rework->get_tb_user_system(); // Menarik dan menampung ke data nik
		// $data['lot'] =$this->M_Rework->get_tb_lot();
		$data['user'] = $this->M_Rework->get_tb_user_system($this->session->userdata('name'));
		$data['qc'] = $this->M_Rework->get_tb_qc();
		$data['spv'] = $this->M_Rework->get_tb_spv();



		$data['menu_name'] =  $menu_name;
		$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
		$data['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
		$data['sortir'] = $this->db->get('sortir')->result();

		// // $data['cust_name'] = $this->M_Rework->Tampil_Data();
		// $this->load->view('templates/header'); //Tampil header
		$this->load->view('result/layout/header'); //Tampil header
		$this->load->view('rework/layout/sidebar copy', $data_akses); //Tampil Sidebar
		// // $this->load->view('Customer_Name/V_Customer_Name',$data); // Tampil data
		$this->load->view('rework/V_Rework', $data); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer
		// $this->load->view('rework/layout/footer'); // Tampil footer

	}

	// Satu table tanpa where
	function view_data()
	{
		$tables = "rework";
		$search = array('hdrid', 'part_number', 'part_name', 'cust_name', 'cust_name2', 'problem', 'occ_place', 'occ_date', 'ng_qty', 'defect_lot', 'area', 'sketch1', 'deskripsi1', 'sketch2', 'deskripsi2', 'skecth3', 'deskripsi3', 'checking_method', 'attach_ik', 'marking_photo', 'marking', 'sortir', 'perubahan_sortir', 'request_to', 'nama_spv', 'request_by', 'checked_by', 'approved_by', 'jabatan_request', 'jabatan_checked', 'jabatan_approved');
		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Rework->get_tables($tables, $search, $isWhere);
	}

	function view_data_sortir()
	{

		$tables = "sortir";
		$search = array('id_sortir', 'part_number', 'lot_produksi', 'customer', 'masalah_stok', 'masalah_kirim_customer', 'tgl_berangkat_customer', 'tgl_datang_customer', 'masalah_stok_yusen', 'tgl_berangkat_yusen', 'tgl_datang_yusen', 'qty', 'perlu_info');

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Rework->get_tables($tables, $search, $isWhere);
	}

	function view_data_perubahan()
	{

		$tables = "change_sortir";
		$search = array('id', 'tgl_perubahan', 'jenis_perubahan', 'check_spv', 'check_mgr');

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Rework->get_tables($tables, $search, $isWhere);
	}


	// Satu table dengan where
	function view_data_where()
	{
		$tables = "rework";
		$search = array('hdrid', 'part_number', 'part_name', 'cust_name', 'cust_name2', 'problem', 'occ_place', 'occ_date', 'ng_qty', 'defect_lot', 'area', 'sketch1', 'deskripsi1', 'sketch2', 'deskripsi2', 'skecth3', 'deskripsi3', 'checking_method', 'attach_ik', 'marking_photo', 'marking', 'sortir', 'perubahan_sortir', 'request_to', 'nama_spv', 'request_by', 'checked_by', 'approved_by', 'jabatan_request', 'jabatan_checked', 'jabatan_approved');


		if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
			$where  = array('transaction_date >' => '2020-01-01');
		} else {
			$where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate']);
		};

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Rework->get_tables_where($tables, $search, $where, $isWhere);
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
		echo $this->M_Rework->get_tables_where($tables, $search, $where, $isWhere);
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
		echo $this->M_Rework->get_tables_where($tables, $search, $where, $isWhere);
	}


	/** ---------------------------------------------- add----------------------------------------------**/

	// Multy table / Query
	//    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
	//     }else{
	//     redirect('auth');
	//     }

	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "REQ" . mdate('%Y%m', time());
		$hdrid2 = $this->M_Rework->Max_data($mdate, 'rework')->row();
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
		$where = array('hdrid' => $hdrid);

		$this->M_Rework->Input_Data($post_datamerge, 'rework');
		$this->M_Rework->update_Data($where, $post_update, 'sortir');
		$this->M_Rework->update_Data($where, $post_update, 'change_sortir');
		$this->M_Rework->update_Data($where, $post_update, 'tb_result');

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

		$post_data_transaction_date = mdate('%Y-%m-%d', time());

		$data['status'] = $msg;
		$this->M_Rework->Add_List_Approver($post_data_transaction_date, $hdrid, $this->input->post('nik'));
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	// form_sortir
	public function ajax_add_sortir()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "SOR" . mdate('%Y%m', time());
		$id_sortir2 = $this->M_Rework->Max_data_sortir($mdate, 'sortir')->row();
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

		$this->M_Rework->Input_Data($post_datamerge, 'sortir');

		// ********************* 6. Upload file jika ada  *********************   
		$post_result = array('part_number' => $this->input->post('part_number'), 'lot_produksi' => $this->input->post('lot_produksi'), 'id_request' => $this->input->post('id_request'), 'id_sortir' => $id_sortir);
		$this->ajax_add_result($post_result);
		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	public function ajax_add_result($post_result)
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "RES" . mdate('%Y%m', time()); // Buat HDRID otomatis dengan format RA Tahun Bulan Jam (TR202210)                  
		$id_result2 = $this->M_Rework->Max_data_result($mdate, 'tb_result')->row();   // Mengambil row dari database            
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
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));

		// ******************** 3. Collect all data post *********************     
		// $post_data = $this->input->post();

		$msg = "success save";

		//ubah tgl_customer


		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_result, $post_data2, $post_data3);

		// ********************* 5. Simpan data     *********************

		$this->M_Rework->Input_Data($post_datamerge, 'tb_result');

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
		$id2 = $this->M_Rework->Max_data_perubahan($mdate, 'change_sortir')->row();
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

		$this->M_Rework->Input_Data($post_datamerge, 'change_sortir');

		// ********************* 6. Upload file jika ada  *********************   

		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}


	/** ---------------------------------------------- update----------------------------------------------**/

	public function ajax_update()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$hdrid = $this->input->post('hdrid');

		$msg = "success Update";

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
		// ********************* 5. Simpan data     *********************
		$post_datamerge = array_merge($post_data, $post_data5);
		$post_update = array('id_request' => $hdrid);
		// **********************  Simpan data ************************        
		$where = array('id_request' => $this->input->post('hdrid'));
		$where = array('hdrid' => $hdrid);
		$this->M_Rework->Update_Data($where, $post_datamerge, 'rework');
		$this->M_Rework->update_Data($where, $post_update, 'sortir');
		$this->M_Rework->update_Data($where, $post_update, 'change_sortir');
		$this->M_Rework->update_Data($where, $post_update, 'tb_result');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_update_sortir()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$id_sortir = $this->input->post('id_sortir');
		$msg = "success Update";
		// **********************  Upload file (filename,hdrid,table)  *********************   
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
		$this->M_Rework->Update_Data_Sortir($where, $data, 'sortir');

		$data['status'] = "berhasil update";

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
		if ($this->input->post('tgl_perubahan') === null || $this->input->post('tgl_perubahan') === '') {
			$data['tgl_perubahan'] = null;
		}

		// **********************  Simpan data ************************        
		$where = array('id' => $id);
		$this->M_Rework->Update_Data_Perubahan($where, $data, 'change_sortir');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
		// print_r($post_data);

	}

	/** ---------------------------------------------- delete----------------------------------------------**/

	public function ajax_delete()
	{

		$where = array('hdrid' => $this->input->post('hdrid'));
		$this->M_Rework->Delete_Data($where, 'rework');
		$this->M_Rework->Delete_Data($where, 'sortir');
		$this->M_Rework->Delete_Data($where, 'change_sortir');
		$this->M_Rework->Delete_Data($where, 'tb_result');

		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete_sortir()
	{

		$where = array('id_sortir' => $this->input->post('id_sortir'));
		$this->M_Rework->Delete_Data_Sortir($where, 'sortir');
		$this->M_Rework->Delete_Data_Sortir($where, 'tb_result');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete_perubahan()
	{

		$where = array('id' => $this->input->post('id'));
		$this->M_Rework->Delete_Data_Perubahan($where, 'change_sortir');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/** ---------------------------------------------- getbyhdrid----------------------------------------------**/

	function ajax_getbyhdrid()
	{

		$hdrid = $this->input->get('hdrid');
		$data = $this->M_Rework->ajax_getbyhdrid($hdrid, 'rework')->row();
		echo json_encode($data);
	}
	function ajax_getbysuperior()
	{

		$hdrid = $this->input->get('hdrid');
		$data = $this->M_Rework->ajax_getbysuperior($hdrid, 'tb_superior')->row();
		echo json_encode($data);
	}

	function ajax_getbyhdrid_sortir()
	{

		$id_sortir = $this->input->get('sortir');
		$data = $this->M_Rework->ajax_getbyhdrid_sortir($id_sortir, 'sortir')->row();
		echo json_encode($data);
	}

	function ajax_getbyhdrid_perubahan()
	{

		$id = $this->input->get('change_sortir');
		$data = $this->M_Rework->ajax_getbyhdrid_perubahan($id, 'change_sortir')->row();
		echo json_encode($data);
	}

	/** ---------------------------------------------- get_tb----------------------------------------------**/
	function get_tb_qc()
	{

		$data = $this->M_Rework->get_tb_qc();
		echo json_encode($data);
	}
	function get_tb_spv()
	{

		$data = $this->M_Rework->get_tb_spv();
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

	function form_approver_link_mail()
	{

		$id_user_reg = $this->input->get('var1');
		$nik = $this->input->get('var2');

		$data['get_approver'] = $this->M_Rework->get_approver($id_user_reg);
		$data['get_requester'] = $this->M_Rework->get_requester($id_user_reg);
		$data['data'] = $this->M_Rework->get_data($id_user_reg);

		$this->load->view('email/V_Rework_copy', $data); // Tampil data

	}

	function upload_file_attach($filename, $hdrid, $table)
	{

		if (!empty($_FILES[$filename]['name'])) {

			$config['upload_path'] = './assets/upload/rework_attach__ik';
			// $config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['allowed_types'] = 'pdf';
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
				// $status = "success";
				// $msg = $dataupload['file_name']." berhasil diupload";                      
				$data_update = array($filename => $dataupload['file_name']);

				$where = array('hdrid' => $hdrid);
				$this->M_Rework->Update_Data($where, $data_update, $table);
			}
		}
	}

	function upload_file_sketch($filename, $hdrid, $table)
	{

		if (!empty($_FILES[$filename]['name'])) {

			$config['upload_path'] = './assets/upload/rework_photo';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = True;
			$config['max_size']  = '1000000';
			// $config['max_width']  = '1024';
			// $config['max_height']  = '768';
			$config['file_name'] = $hdrid . '_' . $filename;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload($filename)) {
				// $status = "error";
				$msg = $this->upload->display_errors();
			} else {
				$msg = "success upload";

				$dataupload = $this->upload->data();
				// $status = "success";
				// $msg = $dataupload['file_name']." berhasil diupload";                      
				$data_update = array($filename => $dataupload['file_name']);

				$where = array('hdrid' => $hdrid);
				$this->M_Rework->Update_Data($where, $data_update, $table);
			}
		}
	}


	public function import()
	{

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
			redirect('C_Rework');
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
						$mdate = "REQ" . mdate('%Y%m', time());
						$hdrid2 = $this->M_Rework->Max_data($mdate, 'rework')->row();
						if ($hdrid2->hdrid == NULL) {
							// Jika belum ada
							$hdrid3 = $mdate . "001";
							//    $resultData[$index]['hdrid'] =   $hdrid3;
						} else {
							$hdrid3 = $hdrid2->hdrid;
							// Jika sudah ada maka naik 1 level
							$hdrid3 = "REQ" . (intval(substr($hdrid3, 3, 11)) + 1);
							// $resultData[$index]['hdrid'] =   $hdrid3;    
						}
					} else {
						$hdrid3 = "REQ" . (intval(substr($hdrid3, 3, 11)) + 1);
					}

					$resultData[$index]['hdrid'] = $hdrid3;
					$resultData[$index]['transaction_date'] = mdate('%Y-%m-%d', time());

					// ---------------------------------- Import Macro Batas sini 1---------------------------------

					//  Sample

					$resultData[$index]['part_number'] = ucwords($value['A']);
					$resultData[$index]['part_name'] = ucwords($value['A']);
					$resultData[$index]['cust_name'] = ucwords($value['A']);
					$resultData[$index]['cust_name2'] = ucwords($value['A']);
					$resultData[$index]['problem'] = ucwords($value['A']);
					$resultData[$index]['occ_place'] = ucwords($value['A']);
					$resultData[$index]['occ_date'] = ucwords($value['A']);
					$resultData[$index]['ng_qty'] = ucwords($value['A']);
					$resultData[$index]['defect_lot'] = ucwords($value['A']);
					$resultData[$index]['area'] = ucwords($value['A']);
					$resultData[$index]['sketch1'] = ucwords($value['A']);
					$resultData[$index]['deskripsi1'] = ucwords($value['A']);
					$resultData[$index]['sketch2'] = ucwords($value['A']);
					$resultData[$index]['deskripsi2'] = ucwords($value['A']);
					$resultData[$index]['skecth3'] = ucwords($value['A']);
					$resultData[$index]['deskripsi3'] = ucwords($value['A']);
					$resultData[$index]['checking_method'] = ucwords($value['A']);
					$resultData[$index]['attach_ik'] = ucwords($value['A']);
					$resultData[$index]['marking_photo'] = ucwords($value['A']);
					$resultData[$index]['marking'] = ucwords($value['A']);
					$resultData[$index]['sortir'] = ucwords($value['A']);
					$resultData[$index]['perubahan_sortir'] = ucwords($value['A']);
					$resultData[$index]['request_to'] = ucwords($value['A']);
					$resultData[$index]['nama_spv'] = ucwords($value['A']);
					$resultData[$index]['request_by'] = ucwords($value['A']);
					$resultData[$index]['checked_by'] = ucwords($value['A']);
					$resultData[$index]['approved_by'] = ucwords($value['A']);


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

				unlink('./assets/excel/' . $data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_Rework->insert_batch('rework', $resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_Rework');
					}
				} else {
					// $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('C_Rework');
				}
			}
		}
	}

	/** ---------------------------------------------- /Close controller----------------------------------------------**/
}
