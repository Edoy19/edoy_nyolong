<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_User extends CI_Controller
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
	/** ---------------------------------------------- User----------------------------------------------**/


	public function __construct()
	{
		parent::__construct();

		$this->load->helper('date'); // Load helper date fungsi tanggal
		$this->load->helper('file'); // Load helper file fungsi upload        
		$this->load->model('M_User'); // Load model
		$this->load->library('form_validation'); // Load library
		$this->load->model('UserModel');  //untuk load user model hak akses menu     
		$this->load->library('encryption');  //untuk encryp data
		// $this->load->library('encrypt');   

		// Cari hak akses by controller
		$Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'), 'C_user');
		if ($Hak_akses->found != 'found') {
			redirect('Auth'); // Kembali ke halaman Auth
		}
	}


	public function Index()
	{
		$data['hasil'] = $this->M_User->get_tb_department(); // Menarik dan menampung ke data hasil
		$data['hasil2'] = $this->M_User->get_tb_role(); // Menarik dan menampung ke data hasil2
		$data['nik'] = $this->M_User->get_tb_user(); // Menarik dan menampung ke data nik


		$menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
		$menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
		$role_name = $this->input->get('var3');  // Decrypt menu ID   untuk dekrip menu name  
		$data['menu_name'] =  $menu_name; // Deklarasi menu_name dan mengirim nya ke view
		$role['role_name'] = $role_name;
		$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
		$data['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)
		// // $data['User'] = $this->M_User->Tampil_Data();
		$this->load->view('result/layout/header'); //Tampil header
		$this->load->view('templates/sidebar', $data_akses); //Tampil Sidebar
		$this->load->view('User/V_User', $data); // Tampil data
		// $this->load->view('User/V_User'); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer

	}


	// Satu table tanpa where
	function view_data()
	{

		$tables = "a_user_system"; // Table yang digunakan         
		$search = array('hdrid', 'nik', 'role_id', 'role_name', 'username'); // Column column yang akan muncul di feature search datatable

		$isWhere = null; // jika memakai IS NULL pada where sql
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
		echo $this->M_User->get_tables($tables, $search, $isWhere); // Mengambil data dari database

	}

	// Satu table dengan where
	function view_data_where()
	{

		$tables = "a_user_system"; // Table yang digunakan         
		$search = array('hdrid', 'nik', 'role_id', 'role_name', 'username'); // Column column yang akan muncul di feature search datatable

		$where  = array('transaction_date >' => '2020-01-01');

		// if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
		//     $where  = array('transaction_date >'=>'2020-01-01');              
		// }else{
		//     $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
		// };

		// jika memakai IS NULL pada where sql
		$isWhere = null; // jika memakai IS NULL pada where sql
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
		echo $this->M_User->get_tables_where($tables, $search, $where, $isWhere); // Mengambil data dari database

	}

	// Multy table / Query
	function view_data_query()
	{

		$query  = "SELECT kategori.nama_kategori AS nama_kategori, subkat.* FROM subkat 
                    JOIN kategori ON subkat.id_kategori = kategori.id_kategori";
		$search = array('nama_kategori', 'subkat', 'tgl_add');
		$where  = null;
		// $where  = array('nama_kategori' => 'Tutorial');

		// jika memakai IS NULL pada where sql
		$isWhere = null; // jika memakai IS NULL pada where sql
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json 
		echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere); // Mengambil data dari database

	}


	//    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
	//     }else{
	//     redirect('auth');
	//     }

	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "USR" . mdate('%Y%m', time());  // Buat HDRID otomatis dengan format USR Tahun Bulan Jam (USR202210)         
		$hdrid2 = $this->M_User->Max_data($mdate, 'a_user_system')->row();    // Mengambil row dari database          
		if ($hdrid2->hdrid == NULL) { // Jika HDRID belum ada
			$hdrid3 = $mdate . "001"; // Maka mulai dari 001
		} else {
			$hdrid3 = $hdrid2->hdrid; // Jika sudah ada 
			// Jika sudah ada maka naik 1 level
			$hdrid3 = "USR" . (intval(substr($hdrid3, 3, 10)) + 1); // Jika sudah ada maka naik 1 level
		}

		// ********************* 1. Set hdrid  *********************
		$post_data2 = array('hdrid' => $hdrid3); // Buat array untuk post ke field HDRID
		$post_data3 = array('transaction_date' => mdate('%Y%m%d', time())); // Buat array untuk post ke field Transaction_date

		// ********************* 2. Collect all data post *********************     
		$post_data = $this->input->post(); // Ambil semua data post     

		$msg = "success save"; // Menampung message untuk notif

		// ********************** 4. Upload file jika ada  *********************   
		if (!empty($_FILES['file']['name'])) {

			$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['overwrite'] = True;
			$config['max_size']  = '1000000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['file_name'] = $hdrid3;
			$this->load->library('upload', $config);

			$post_data3 = array('keterangan' => $hdrid3);

			if (!$this->upload->do_upload('file')) {
				// $status = "error";
				$msg = $this->upload->display_errors();
			} else {
				$msg = "success upload";

				// $dataupload = $this->upload->data();
				// $status = "success";
				// $msg = $dataupload['file_name']." berhasil diupload";              
				// $this->M_wiretransfer_approver->update_file_attach($hdrid,$field,$dataupload['file_name']);

			}
		} else {
		}


		// ********************* 3. Merge data post *********************        
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3); // Menggabungkan semua data 

		// ********************** 4. Simpan data     *********************

		$this->M_User->Input_Data($post_datamerge, 'a_user_system'); // Mengirim parameter ke model untuk query 


		$data['status'] = $msg; // Menarik dan menampung $msg menjadi status

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // Memberi tahu browser bahwa data dalam bentuk format json

	}


	public function ajax_update()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post(); // Mengambil semua data input post
		$hdrid = $this->input->post('hdrid'); // Mengambil data input post field

		$msg = "success Update"; // Menampung menjadi

		// ********************** 4. Upload file jika ada  *********************   
		// if(!empty($_FILES['file']['name']))
		// {

		//     $config['upload_path'] = './assets/upload';   
		//     $config['allowed_types'] = 'gif|jpg|png|pdf';         
		//     $config['overwrite'] = True;          
		//     $config['max_size']  = '1000000';
		//     $config['max_width']  = '1024';
		//     $config['max_height']  = '768';
		//     $config['file_name']=$hdrid;
		//     $this->load->library('upload', $config);

		//     $post_data3=array('keterangan'=>$hdrid);

		//     if ( ! $this->upload->do_upload('file')){
		//         // $status = "error";
		//          $msg = $this->upload->display_errors();
		//     }
		//     else{
		//          $msg = "success upload";

		//         // $dataupload = $this->upload->data();
		//         // $status = "success";
		//         // $msg = $dataupload['file_name']." berhasil diupload";              
		//         // $this->M_wiretransfer_approver->update_file_attach($hdrid,$field,$dataupload['file_name']);

		//     }

		// }


		// ********************* 3. Merge data post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data); // Menggabungkan semua data 

		// ********************** 4. Simpan data ************************

		$where = array('hdrid' => $hdrid); // Buat kondisi where untuk query model         
		$this->M_User->Update_Data($where, $post_datamerge, 'a_user_system'); // Mengirim parameter ke model untuk query 


		$data['status'] = "berhasil update"; // Menampung message menjadi status

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // Memberi tahu browser bahwa data dalam bentuk format json

	}

	public function ajax_delete()
	{

		$where = array('hdrid' => $this->input->post('hdrid')); // Buat kondisi where untuk query model
		$this->M_User->Delete_Data($where, 'a_user_system'); // Mengirim parameter ke model untuk query 
		$data['status'] = "berhasil dihapus"; // Menampung message menjadi status
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data)); // Memberi tahu browser bahwa data dalam bentuk format json

	}


	function ajax_getbyhdrid()
	{

		$hdrid = $this->input->get('hdrid'); // Mengambil input get field
		$data = $this->M_User->ajax_getbyhdrid($hdrid, 'a_user_system')->row(); // Mengirim parameter ke model untuk query 
		echo json_encode($data); // Mengembalikan nilai data format json

	}




	/** ---------------------------------------------- /Close controller----------------------------------------------**/
}
