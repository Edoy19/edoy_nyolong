<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Print_dn extends CI_Controller
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
        $this->load->model('M_print_design');
        $this->load->model('M_dn');
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
        $this->load->view('Print/V_Print_dn', $data);
    }

    /// @see ajax_getbyhdrid()
    /// @note untuk mencari hdrid
    /// @attention
    function ajax_getbyhdrid()
    {

        $hdrid = $this->input->get('hdrid');
        $data = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_dn')->row();
        echo json_encode($data);
    }

  
        
     /// @see print_dn()
    /// @note untuk memprint dn data
    /// @attention
    function print_dn()
    {
        
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        // $hdrid_pc = 'PC202209003'; //test sementar
    
        $data['username'] = $this->session->userdata('username');
        $data['hdrid'] = $hdrid;
    
        $data['jumlah'] = 1;
        $data['tb_cicilan'] = $this->m_print->ajax_get_cicilan($hdrid, 'tb_cicilan_dn');
        $data['tb_dn'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_dn')->row();
        $data['list_approval'] = $this->m_print->getApproval1($hdrid);
        $data['list_approver'] = $this->m_print->cari_tb_approver($hdrid);// ini tuk apa
        $data['total_approval'] = $this->m_print->total_approval($hdrid);// ini tuk apa
        
        $this->load->view('Print/V_Print_dn', $data);

    }


     /// @see print_dn_details()
    /// @note untuk memprint dn data
    /// @attention
    function print_dn_details()
    {
        
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        // $hdrid_pc = 'PC202209003'; //test sementar
    
        $data['username'] = $this->session->userdata('username');
        $data['hdrid'] = $hdrid;
    
        $data['jumlah'] = 1;
        $data['tb_cicilan'] = $this->m_print->ajax_get_cicilan($hdrid, 'tb_cicilan_dn');
        $data['tb_dn'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_dn')->row();
        $data['list_approval'] = $this->m_print->getApproval1($hdrid);
        $data['list_approver'] = $this->m_print->cari_tb_approver($hdrid);// ini tuk apa
        $data['total_approval'] = $this->m_print->total_approval($hdrid);// ini tuk apa
        
        $this->load->view('Print/V_Print_dn_details', $data);
        
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
