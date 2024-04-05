<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Email extends CI_Controller {

    public function __construct() {

        parent:: __construct();
        $this->load->model('M_Employee');
        $this->load->model('M_email');
        $this->load->model('M_add_settlement4');
        $this->load->model('M_add_advance3');
        $this->load->model('m_print');

        
       
    }

    public function index() {
        $this->load->view('email/contact');
    }

    function send() {

            $this->email->from('dmia.system.a2d@ap.denso.com');            
            $this->email->to('widodo.a5v@ap.denso.com');
            $this->email->subject('Your request has been approved');           
            $this->email->message('Testing the email class.<br>
            Testing the email class.<br>
            Testing the email class.<br>');

        if ($this->email->send()) {
            // echo 'Your Email has successfully been sent.';
            $this->load->view('templates/header'); //Tampil header
            $this->load->view('templates/sidebar'); //Tampil Sidebar
            $this->load->view('employee/V_employee'); // Tampil data
            $this->load->view('templates/footer'); // Tampil footer
        } else {
            show_error($this->email->print_debugger());
        }

    }
    
    function Send_mail() {

        $hdrid=$this->input->post('hdrid');
        $this->M_email->Send_mail($hdrid); // Ambil dari database central

    }

    function Send_mail_reject() {

        $hdrid=$this->input->post('hdrid');
        $this->M_email->Send_mail_reject($hdrid); // Ambil dari database central

    }


    public function ajax_send_mail_v1()
    {
        $body_content=$this->input->post('body_content');
        $comment=$this->input->post('comment');
        $status_subject=$this->input->post('status_subject');
       
        $hdrid=$this->input->post('hdrid');

        $name2=$this->input->post('name');
        $email2=$this->input->post('office_email');

        $problem_name=$this->input->post('problem_name');
        $group_product_name=$this->input->post('group_product_name');
        $product_name=$this->input->post('product_name');
        $problem_category_name=$this->input->post('problem_category_name');
        $customer_name=$this->input->post('customer_name');
        $problem=$this->input->post('problem');
        $position_code=$this->input->post('position_code');

        $inisisator_approver= $this->m_print->cari_tb_approver($hdrid);

        // if (!is_empty($inisisator_approver)){
        $subject=$status_subject." [".$problem_name."] ". $group_product_name.",".$product_name.",".$problem_category_name.",". $customer_name.",".$problem ;
        $sendmail=$this->M_email->Send_mail_reminder_v1($hdrid,$inisisator_approver->name,$inisisator_approver->office_email, $subject,$comment,$body_content);
        // }
       
        $data['status']="Email Terkirim";

        // $data['status']=$email2;
        // $data['status']=$subject;
        // echo json_encode($data);
        
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    public function ajax_send_mail_v2() //Untuk process Approve
    {

    
        $body_content=$this->input->post('body_content'); // menampung data post dari body_content
        $body_content="-"; 
        $comment=$this->input->post('comment'); // menampung data post dari comment
        $comment="-"; 
        $hdrid=$this->input->post('hdrid'); // menampung data post dari hdrid
        $name2=$this->input->post('name2'); // menampung data post dari name2
        $email2=$this->input->post('office_email'); // menampung data post dari office_email 
        $status_transaction=$this->input->post('status_transaction');     // menampung data post dari status_transaction   
        $detail_request=$this->input->post('detail_request'); // menampung data post dari deta$detail_request
        $budgets=$this->input->post('budgets'); // menampung data post dari budgets
        $currency=$this->input->post('currency'); // menampung data post dari currency
        $nominal=$this->input->post('nominal'); // menampung data post dari nominal 
        $transfer_name=$this->input->post('transfer_name'); // menampung data post dari transfer_name
    
        $inisisator_approver= $this->m_print->cari_tb_approver($hdrid);

        // if (!is_empty($inisisator_approver)){." [".$detail_request."] ". $budgets.",".$currency.",".$nominal.",". $transfer_name ;
        $subject=$status_transaction;
        $sendmail=$this->M_email->Send_mail_reminder_v2($hdrid,$inisisator_approver->position_code,$inisisator_approver->name,$inisisator_approver->office_email,$subject,$comment,$body_content);
        // }
        $data['status']="Email Terkirim";

        // $data['status']=$email2;
        // $data['status']=$subject;
        // echo json_encode($data);
        
        
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }



    public function ajax_send_mail_v1_reject() //Untuk process reject
    {
        $body_content=$this->input->post('body_content');
        $body_content="";
        $comment=$this->input->post('comment');
        $comment="";
        $status_subject=$this->input->post('status_subject');       
        $hdrid=$this->input->post('hdrid');
        $name2=$this->input->post('name');
        $email2=$this->input->post('office_email');
        $detail_request=$this->input->post('detail_request');
        $group_product_name=$this->input->post('group_product_name');
        $product_name=$this->input->post('product_name');
        $problem_category_name=$this->input->post('problem_category_name');
        $customer_name=$this->input->post('customer_name');
        $problem=$this->input->post('problem');

        $inisisator_approver= $this->M_input_problem->cari_inisiator_responsible($hdrid);        
        $subject=$status_subject." [".$detail_request."] ". $group_product_name.",".$product_name.",".$problem_category_name.",". $customer_name.",".$problem ;
        $sendmail=$this->M_email->Send_mail_reminder_v1($hdrid,$inisisator_approver->name,$inisisator_approver->office_email, $subject,$comment,$body_content); 

        $data['status']="Email Terkirim";

        // $data['status']=$email2;
        // $data['status']=$subject;
        // echo json_encode($data);
        
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

   

    
}