<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Dashboard extends CI_Controller
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

	/** ---------------------------------------------- Employee----------------------------------------------**/

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('user_name') == "") {
			redirect('Auth');
		}

		$this->load->helper('date');
		$this->load->helper('file');
		$this->load->model('M_Dashboard');

		$this->load->model('UserModel');  //untuk load user model hak akses menu     
		$this->load->library('encryption');  //untuk encryp data
		// $this->load->library('encrypt');    

	}


	public function Index()
	{

		if ($this->session->userdata('authenticated')) { // Jika user sudah login (Session authenticated ditemukan)

			$menu_code = $this->encryption->decrypt($this->input->get('var'));  // Decrypt menu ID   untuk dekrip menu   
			$data_akses['menu_akses'] = $this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
			$data_akses['hak_akses'] = $this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)

			$this->load->view('templates/header'); //Tampil header
			$this->load->view('templates/sidebar', $data_akses); //Tampil Sidebar
			$this->load->view('V_dashboard'); // Tampil data
			$this->load->view('templates/footer'); // Tampil footer

		} else {

			redirect('auth');
		}
	}

	public function Details_User($NoPegawai)
	{

		if ($this->session->userdata('authenticated')) { // Jika user sudah login (Session authenticated ditemukan)

			//$this->load->Model('M_Employee');
			$details = $this->M_Dashboard->GetNameEmployee($NoPegawai);
			$data['Nameemp'] = $details;
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('employee/V_EmployeeDetails', $data);
			$this->load->view('templates/footer');
		} else {

			redirect('auth');
		}
	}


	/** ---------------------------------------------- /Employee----------------------------------------------**/
}
