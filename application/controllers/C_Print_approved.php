<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Print_approved extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if ($this->session->userdata('user_name') == "") {
        //     redirect('Auth');
        // }

        $this->load->model('m_print');
        $this->load->model('M_progress');
        $this->load->model('UserModel');
        $this->load->model('M_approver');

        
    }

    //untuk menampilkan data
    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        // $this->load->view('templates/header'); //Tampil header
        // $this->load->view('templates/sidebar'); //Tampil Sidebar
        // $this->load->view('templates/footer'); // Tampil footer
        $this->load->view('Print/v_print', $data);
    }

    function ajax_getbyhdrid()
    {

        $hdrid = $this->input->get('hdrid');
        $data = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
        echo json_encode($data);
    }

    function print_show()
    {
        $hdrid = $this->input->get('var1');
        $test = $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
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
    function print_show2()
    {
        $hdrid = $this->input->get('var1');
        $test = $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
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

    function print_report1()
    {
        $hdrid = $this->input->get('var1');
        $app = $this->input->get('var1');
        $data['username'] = $this->session->userdata('username');
        $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
        $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
        $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();
        $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();
        $data['array_approval'] = $this->m_print->getApproval($hdrid);       
        $this->load->view('Print/v_print_approved', $data);

    }

    function print_report2()
    {
        $hdrid = $this->input->get('var1'); 
        $app = $this->input->get('var1'); 
        $data['username'] = $this->session->userdata('username');
        $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
        $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
        $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();
        $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();

        // $dt['tb_dimas'] = $this->m_print->get_all_userid();
        $data['array_approval'] = $this->m_print->getApproval($hdrid);
        // var_dump($dt);

        // $data['tb_pc'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_response')->row();
        // // $data['tb_pe'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_approval')->row();
        // $data['tb_qa'] = $this->m_print->ajax_getbyhdrid($hdrid,'tb_input_effectiveness')->row();

        $this->load->view('Print/v_print2', $data);

    }

    function print_report2_approved()
    {
        
        $hdrid = $this->input->get('var1');     //hdrid
        $app = $this->input->get('var1');       //hdrid
        $userid = $this->input->get('var2');    //nik
        $name = $this->input->get('var3');      //name
         
        // $data['username'] = $this->session->userdata('username');

        $data['tb_input_problem'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
        $data['tb_response'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_response')->row();
        $data['tb_approval'] = $this->m_print->ajax_getbyproblemid($app, 'tb_approval')->row();

        $data['tb_approval_name'] = $this->m_print->getname_aprover($hdrid);
       
        $data['tb_effectiveness'] = $this->m_print->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();
        $data['array_approval'] = $this->m_print->getApproval($hdrid);
        $data['nik'] = $this->m_print->cari_tb_approver($hdrid);

        // Approver
        $data['userid'] = $userid ;
        $data['hdrid'] = $hdrid ;
        $data['name'] = $name ;

        $this->load->view('Print/v_print_approved', $data);

    }

    function ajax_login()
    {

        $data['status'] = "NG";
        $username = str_replace(' ', '', $this->input->post('username'));
        $password = str_replace(' ', '', $this->input->post('password'));
        $password = md5($password);
       
        $user = $this->UserModel->get($username); // Ambil dari database central
        $email= $this->UserModel->getemployeedetail($username); // Ambil dari database HRSS

        if(empty($user)){ // Jika hasilnya kosong atau user ID tidak ditemukan
            $data['status'] = "NG User ID tidak ditemukan"; //User ID tidak ditemukan
        }else{
             if($password == $user->password){
                 $data['status'] = "OK";
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
      
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }


    function ajax_approve()
    {

        $nik = str_replace(' ', '', $this->input->post('nik'));
        $name = str_replace(' ', '', $this->input->post('name'));
        $problem_id = str_replace(' ', '', $this->input->post('problem_id'));
        $position = str_replace(' ', '', $this->input->post('position'));

        // current  date
        $data3 = array('date_approve' => mdate('%Y-%m-%d %H:%i:%s', time()));
        $data2 = array('nik' => $nik, 'name' => $name, 'date_approve' => mdate('%Y-%m-%d %h:%i:%s', time()));

        // Where condition
        $where = array(
            'nik' => $nik,
            'problem_id' => $problem_id
        );

        // Update data
        // $this->M_approver->Update_Data_Approve($where, $data2, 'tb_approval',$problem_id);
         $status_transaction=$this->M_approver->Update_Data_Approve($where, $data2, 'tb_approval',$problem_id);
     
         $data['status'] =  $status_transaction;
         $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    

    function ajax_reject()
    {

        $rejected_by = str_replace(' ', '', $this->input->post('rejected_by'));
        $hdrid = $this->input->post('hdrid');
        $reason = $this->input->post('reason');
       
        // current  date
        $status_reject = "Rejected By:".$rejected_by." With Reason: ".$reason;
        $data = array('rejected_by' => $rejected_by, 'reason' => $reason, 'date_rejected' => mdate('%Y-%m-%d %h:%i:%s', time()),'status_transaction' => $status_reject);
      
        // Where condition
        $where = array('hdrid' => $hdrid);

        // Update data tb_input_problem
        $this->M_approver->Update_Data($where, $data, 'tb_input_problem');
       
        $data['status'] = 'Berhasil direject';

        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


}
