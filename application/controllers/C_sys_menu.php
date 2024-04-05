<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_sys_menu extends CI_Controller
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
	/** ---------------------------------------------- sys_menu----------------------------------------------**/

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_name') == "") {
			redirect('Auth');
		}

		$this->load->helper('date');
		$this->load->helper('file');
		$this->load->model('M_sys_menu');
		// $this->load->library('encrypt');    

	}

	public function Index()
	{

		$data['groups'] = $this->M_sys_menu->get_tb_sys_menu();
		// var_dump($data);
		// die;

		$this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar'); //Tampil Sidebar
		// // $this->load->view('sys_menu/V_sys_menu',$data); // Tampil data
		$this->load->view('sys_menu/V_sys_menu', $data); // Tampil data
		$this->load->view('templates/footer'); // Tampil footer

	}

	// Satu table tanpa where
	function view_data()
	{

		$tables = "tb_sys_menu";
		$search = array('hdrid', 'menu_id', 'menu_name', 'link_url', 'parent_id', 'level', 'icon');






		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_sys_menu->get_tables($tables, $search, $isWhere);
	}

	// Satu table dengan where
	function view_data_where()
	{

		$tables = "tb_sys_menu";
		$search = array('hdrid', 'menu_id', 'menu_name', 'link_url', 'parent_id', 'level', 'icon');







		if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
			$where  = array('transaction_date >' => '2020-01-01');
		} else {
			$where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate']);
		};

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_sys_menu->get_tables_where($tables, $search, $where, $isWhere);
	}

	// Multy table / Query
	function view_data_query()
	{

		$query  = "SELECT kategori.name_kategori AS name_kategori, subkat.* FROM subkat 
                    JOIN kategori ON subkat.id_kategori = kategori.id_kategori";
		$search = array('name_kategori', 'subkat', 'tgl_add');
		$where  = null;
		// $where  = array('name_kategori' => 'Tutorial');

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
	}


	//    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
	//     }else{
	//     redirect('auth');
	//     }

	public function ajax_add()
	{

		// ********************* 0. Generate nomor transaksi  *********************          
		$mdate = "TR" . mdate('%Y%m', time());
		$hdrid2 = $this->M_sys_menu->Max_data($mdate, 'tb_sys_menu')->row();
		if ($hdrid2->hdrid == NULL) {
			// Jika belum ada
			$hdrid3 = $mdate . "001";
		} else {
			$hdrid3 = $hdrid2->hdrid;
			// Jika sudah ada maka naik 1 level
			$hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);
		}
		$hdrid = $hdrid3;

		// ********************* 1. Set hdrid  *********************
		$post_data2 = array('hdrid' => $hdrid3);

		// ********************* 2. Transaction date  *********************
		$post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));

		// ******************** 3. Collect all data post *********************     
		$post_data = $this->input->post();

		$msg = "success save";

		// ********************* 4. Merge data post *********************        
		$post_datamerge = array_merge($post_data, $post_data2, $post_data3);

		// ********************* 5. Simpan data     *********************

		$this->M_sys_menu->Input_Data($post_datamerge, 'tb_sys_menu');

		// ********************* 6. Upload file jika ada  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $hdrid, 'tb_sys_menu');
		}


		$data['status'] = $msg;

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}


	public function ajax_update()
	{

		// ********************* 1. Collect data post *********************
		$post_data = $this->input->post();
		$hdrid = $this->input->post('hdrid');

		$msg = "success Update";

		// **********************  Upload file (filename,hdrid,table)  *********************   
		if (!empty($_FILES['file']['name'])) {
			$this->upload_file_attach('file', $hdrid, 'tb_sys_menu');
		}

		// *********************  Merge data All post *********************
		// $post_datamerge=array_merge($post_data,$post_data2);
		$post_datamerge = array_merge($post_data, $post_data);

		// **********************  Simpan data ************************        
		$where = array('hdrid' => $hdrid);
		$this->M_sys_menu->Update_Data($where, $post_datamerge, 'tb_sys_menu');

		$data['status'] = "berhasil update";

		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function ajax_delete()
	{


		$where = array('hdrid' => $this->input->post('hdrid'));
		$this->M_sys_menu->Delete_Data($where, 'tb_sys_menu');
		$data['status'] = "berhasil dihapus";
		// return value array
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}


	function ajax_getbyhdrid()
	{

		$hdrid = $this->input->get('hdrid');
		$data = $this->M_sys_menu->ajax_getbyhdrid($hdrid, 'tb_sys_menu')->row();
		echo json_encode($data);
	}

	function form_approver_link_mail()
	{

		$id_user_reg = $this->input->get('var1');
		$nik = $this->input->get('var2');

		$data['get_approver'] = $this->M_sys_menu->get_approver($id_user_reg);
		$data['get_requester'] = $this->M_sys_menu->get_requester($id_user_reg);
		$data['data'] = $this->M_sys_menu->get_data($id_user_reg);

		$this->load->view('email/V_sys_menu', $data); // Tampil data

	}

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
				// $status = "success";
				// $msg = $dataupload['file_name']." berhasil diupload";                      
				$data_update = array($filename => $dataupload['file_name']);

				$where = array('hdrid' => $hdrid);
				$this->M_sys_menu->Update_Data($where, $data_update, $table);
			}
		}
	}


	public function import()
	{

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
			redirect('C_sys_menu');
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

					if ($index > 1 && ucwords($value['D']) != '') {


						// ********************* 0. Generate nomor transaksi  *********************          

						// Cari database sekali saja
						if ($index == 2) {
							$mdate = "TR" . mdate('%Y%m', time());
							$hdrid2 = $this->M_sys_menu->Max_data($mdate, 'tb_sys_menu')->row();
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

						$resultData[$index]['menu_id'] = ucwords($value['A']);
						$resultData[$index]['menu_name'] = ucwords($value['A']);
						$resultData[$index]['link_url'] = ucwords($value['A']);
						$resultData[$index]['parent_id'] = ucwords($value['A']);
						$resultData[$index]['level'] = ucwords($value['A']);
						$resultData[$index]['icon'] = ucwords($value['A']);
					}

					$index++;
				}

				unlink('./assets/excel/' . $data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_sys_menu->insert_batch('tb_sys_menu', $resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_sys_menu');
					}
				} else {
					// $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('C_sys_menu');
				}
			}
		}
	}

	/** ---------------------------------------------- /Close controller----------------------------------------------**/
}
