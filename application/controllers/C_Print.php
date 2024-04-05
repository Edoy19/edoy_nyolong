<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Print extends CI_Controller
{
    /// @see __construct() 
    /// @note untuk mengontrol semua function
    /// @attention jika mengubah beberapa function akan berpengaruh terhadap database
    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('user_name') == "") {
        //     redirect('Auth');
        // }
        $this->load->model('m_print');
        // $this->load->model('M_add_settlement4');
        // $this->load->model('M_add_advance3');
        $this->load->model('UserModel');
    }

      /// @see __index()
    /// @note fungsi index untuk membuat akses ke model
    /// @attention 
    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        // $this->load->view('templates/header'); //Tampil header
        // $this->load->view('templates/sidebar'); //Tampil Sidebar
        // $this->load->view('templates/footer'); // Tampil footer
        $this->load->view('Print/V_Print_settlement_fix', $data);
        $this->load->view('Print/V_Print_advance', $data);
    }

    /// @see ajax_getbyhdrid()
    /// @note untuk mencari hdrid
    /// @attention
    function ajax_getbyhdrid()
    {

        $hdrid = $this->input->get('hdrid');
        $data = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        echo json_encode($data);
    }

    /// @see  print_show()
    /// @note  menampilkan print
    /// @attention
    function print_show()
    {
        $hdrid = $this->input->get('var1');
        $test = $data['tb_add_advance3'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        // error_reporting(0);
        $var1 = $test->problem_name;
        // var_dump($var1);
        // die;

        if ($var1 == 'internal') {
            $this->print_report1();
        } else if ($var1 == 'external') {
            $this->print_report1();
        } else {
            echo $msg = "Data Tidak Valid";
        }
        
    }
    /// @see  print_show2()
    /// @note  menampilkan print
    /// @attention
    function print_show2()
    {
        $hdrid = $this->input->get('var1');
        $test = $data['tb_add_advance3'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        // error_reporting(0);
        $var1 = $test->problem_name;
        // var_dump($var1);
        // die;

        if ($var1 == 'internal') {
            $this->print_report2();
        } else if ($var1 == 'external') {
            $this->print_report2();
        } else {
            echo $msg = "Data Tidak Valid";
        }
    }

    
     /// @see  print_report1()
    /// @note  menampilkan print untuk report
    /// @attention
    function print_report1()
    {
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        $data['username'] = $this->session->userdata('username');
        $data['tb_add_advance3'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
        $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();
        $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();

        // $dt['tb_dimas'] = $this->m_print->get_all_userid();
        $data['array_approval'] = $this->m_print->getApproval($hdrid);
        // var_dump($data);
        // $data['tb_pc'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_response')->row();
        // // $data['tb_pe'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_approval')->row();
        // $data['tb_qa'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_input_effectiveness')->row();


        $this->load->view('Print/v_print1', $data);
    }

    /// @see  print_report2()
    /// @note  menampilkan print untuk report
    /// @attention
    function print_report2()
    {
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        $data['username'] = $this->session->userdata('username');
        $data['tb_add_advance3'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
        $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();
        $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();
        // $dt['tb_dimas'] = $this->m_print->get_all_userid();
        $data['list_approval'] = $this->m_print->getApproval($hdrid);
      
        $this->load->view('Print/v_print2', $data);
    }

    /// @see  print_settlement_fix()
    /// @note untuk form settlement
    /// @attention
    function print_settlement_fix()
    {
        
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        $hdrid_pc = $this->input->get('var2');
    
        $data['username'] = $this->session->userdata('username');
        $data['hdrid_pc'] = $hdrid_pc;
        $data['hdrid'] = $hdrid;
        
        $data['tb_add_advance3'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        $data['list_approval'] = $this->m_print->getApproval($hdrid_pc);
        $data['list_approver'] = $this->m_print->cari_tb_approver($hdrid_pc);// ini tuk apa
        $data['usera']=$this->m_print->count_row($hdrid_pc);
        $this->load->view('Print/V_Print_settlement_fix', $data);
    }

    /// @see print_advance()
    /// @note untuk memprint advance data
    /// @attention
    function print_advance()
    {
        
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        // $hdrid_pc = 'PC202209003'; //test sementar
    
        
        $data['username'] = $this->session->userdata('username');
        $data['hdrid'] = $hdrid;
    
        $data['tb_add_advance3'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_add_advance3')->row();
        $data['list_approval'] = $this->m_print->getApproval1($hdrid);
        $data['list_approver'] = $this->m_print->cari_tb_approver($hdrid);// ini tuk apa
      
        $this->load->view('Print/V_Print_advance', $data);
    }

     /// @see ajax_login()
    /// @note untuk login yang sesuai akses
    /// @attention
    function ajax_login()
    {

        $data['status'] = "NG";
        $username = str_replace(' ', '', $this->input->post('username'));// ini tuk apa
        $password = str_replace(' ', '', $this->input->post('password'));// ini tuk apa
        $password = md5($password);// ini tuk apa
       
        $user = $this->UserModel->get($username); // Ambil dari database central
        $email= $this->UserModel->getemployeedetail($username); // Ambil dari database HRSS

        if(empty($user)){ // Jika hasilnya kosong atau user ID tidak ditemukan
            $data['status'] = "NG User ID tidak ditemukan"; //User ID tidak ditemukan
        }else{
             if($password == $user->password){
                 $data['status'] = "OK";// ini tuk apa
                 $session = array(
                    'authenticated'=>true, // Buat session authenticated dengan value true      
                    // Ambil dari database central
                    'user_name'=>$user->user_name, // Buat session nama          
                    'nama'=>$user->name, // Buat session nama
                    'dept_id'=>$user->kode_department, // Buat session nama                   
                    'email'=>$email->email, // Buat session role
                    'officeemail'=>$email->office_email
                    );
                 $this->session->set_userdata($session); // Buat session sesuai $session
             }else{
                 $data['status'] = "NG password salah"; //Password salah
             }
        }
      
        $this->output->set_content_type('application/json')->set_output(json_encode($data));// ini tuk apa

    }

}
