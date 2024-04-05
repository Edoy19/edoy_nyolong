<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Customer_Name extends CI_Controller
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
		$this->load->model('M_customer_name');
		$this->load->model('UserModel');  //untuk load user model hak akses menu     
		//$this->load->library('encryption');  //untuk encryp data

		// Cari hak akses by controller
		$Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'), 'C_Customer_Name');
		if ($Hak_akses->found != 'found') {
			redirect('Auth'); // Kembali ke halaman Auth
		}
	}

	public function Index()
	{
		$menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
		$menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  

		$data['customer'] = $this->M_customer_name->get_tb_customer_name(); // Menarik dan menampung ke data nik

		$data['menu_name'] =  $menu_name;
		$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
		$data['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)

		// // $data['cust_name'] = $this->M_customer_name->Tampil_Data();
		$this->load->view('result/layout/header'); //Tampil header
		$this->load->view('templates/sidebar', $data_akses); //Tampil Sidebar
		// // $this->load->view('Customer_Name/V_Customer_Name',$data); // Tampil data
		$this->load->view('Customer_Name/V_Customer_Name', $data); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer

	}

	// Satu table tanpa where
	function view_data()
	{

		$tables = "customer";
		$search = array('custno', 'cust_name', 'cust_keterangan');

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_customer_name->get_tables($tables, $search, $isWhere);
	}

	// Satu table dengan where
	function view_data_where()
	{

		$tables = "customer";
		$search = array('custno', 'cust_name', 'cust_keterangan');


		if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
			$where  = array('transaction_date >' => '2020-01-01');
		} else {
			$where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate']);
		};

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_customer_name->get_tables_where($tables, $search, $where, $isWhere);
	}

	// Multy table / Query
	//    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
	//     }else{
	//     redirect('auth');
	//     }

	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "CUS" . mdate('%Y%m', time());
		$custno2 = $this->M_customer_name->Max_data($mdate, 'customer')->row();
		if ($custno2->custno == NULL) {
			// Jika belum ada
			$custno3 = $mdate . "001";
		} else {
			// Jika sudah ada maka naik 1 level
			$custno3 = $custno2->custno; // Jika sudah ada 
			$custno3 = "CUS" . (intval(substr($custno3, 3, 11)) + 1);
			// $number = intval(substr($custno2->custno,3,11)) + 1; // Ambil bagian numerik dan tambahkan 1
			// $custno3 = $mdate . str_pad($number, 1, STR_PAD_LEFT); // Tambahkan padding nol jika diperlukan
		}


		// ********************* 1. Set custno  *********************
		$post_data2 = array('custno' => $custno3);

		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));

		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();

		$msg = "success save";

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3);

		// ********************* 5. Simpan data     *********************

		$this->M_customer_name->Input_Data($post_datamerge, 'customer');

		// ********************* 6. Upload file jika ada  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $custno, 'customer');
		}


		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}


	public function ajax_update()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$custno = $this->input->post('custno');

		$msg = "success Update";

		// **********************  Upload file (filename,custno,table)  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $custno, 'customer');
		}

		// *********************  Merge data All post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data);

		// **********************  Simpan data ************************        
		$where = array('custno' => $custno);
		$this->M_customer_name->Update_Data($where, $post_datamerge, 'customer');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete()
	{


		$where = array('custno' => $this->input->post('custno'));
		$this->M_customer_name->Delete_Data($where, 'customer');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}


	function ajax_getbycustno()
	{

		$custno = $this->input->get('custno');
		$data = $this->M_customer_name->ajax_getbycustno($custno, 'customer')->row();
		echo json_encode($data);
	}

	function form_approver_link_mail()
	{

		$id_user_reg = $this->input->get('var1');
		$nik = $this->input->get('var2');

		$data['get_approver'] = $this->M_customer_name->get_approver($id_user_reg);
		$data['get_requester'] = $this->M_customer_name->get_requester($id_user_reg);
		$data['data'] = $this->M_customer_name->get_data($id_user_reg);

		$this->load->view('email/V_Customer_Name', $data); // Tampil data

	}

	function upload_file_attach($filename, $custno, $table)
	{

		if (!empty($_FILES[$filename]['name'])) {

			$config['upload_path'] = './assets/upload';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['overwrite'] = True;
			$config['max_size']  = '1000000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['file_name'] = $custno . '_' . $filename;
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

				$where = array('custno' => $custno);
				$this->M_customer_name->Update_Data($where, $data_update, $table);
			}
		}
	}


	public function import()
	{

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
			redirect('C_Customer_Name');
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
						$mdate = "CUS" . mdate('%Y%m', time());
						$custno2 = $this->M_customer_name->Max_data($mdate, 'customer')->row();
						if ($custno2->custno == NULL) {
							// Jika belum ada
							$custno3 = $mdate . "001";
							//    $resultData[$index]['custno'] =   $custno3;
						} else {
							$custno3 = $custno2->custno;
							// Jika sudah ada maka naik 1 level
							$custno3 = "CUS" . (intval(substr($custno3, 2, 10)) + 1);
							// $resultData[$index]['custno'] =   $custno3;    
						}
					} else {
						$custno3 = "CUS" . (intval(substr($custno3, 2, 10)) + 1);
					}

					$resultData[$index]['custno'] =   $custno3;
					$resultData[$index]['transaction_date'] = mdate('%Y-%m-%d', time());

					// ---------------------------------- Import Macro Batas sini 1---------------------------------

					//  Sample

					$resultData[$index]['cust_name'] = ucwords($value['A']);
					$resultData[$index]['cust_keterangan'] = ucwords($value['A']);



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
					$result = $this->M_customer_name->insert_batch('customer', $resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_Customer_Name');
					}
				} else {
					// $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('C_Customer_Name');
				}
			}
		}
	}

	/** ---------------------------------------------- /Close controller----------------------------------------------**/
}
