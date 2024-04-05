<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_email_v2 extends CI_Controller {

    public function __construct() {

        parent:: __construct();
    
        $this->load->model('M_email_v2');
        $this->load->helper('date'); // Load helper date fungsi tanggal

    }
    // NOTE Kalau Butuh Reminder Tambah status transaction date change buat di update ke master table
    // [*****************************************************************]
    //                           Doxygen 
    // [*****************************************************************]

    /// @see ajax_new_release()
    /// @note
    /// @attention

    // [*****************************************************************]
    //                Flow ajax_update_approve() 
    // [*****************************************************************]
    //               
    //         1.Cari next approval
    //            |               
    //            v                     
    //     IF << Ketemu >> ----- No  -------------------------------------------------- 
    //            | Yes                                                                |
    //            v                                                                    v
    //         2.update status transaksi(waiting approve ...)              2.update status transaksi(Done) 
    //            |                                                                    |
    //            |                                                                    v
    //            |                                                               3.Cari Creator                                     
    //            |                                                                    |
    //            v                                                                    V
    //         4.update tb_mail_trigger  <---------------------------------------------
    //            |               
    //            v     
    //         run trigger after update  tb_mail_trigger => exec storage procedure send_mail


    /// @see ajax_new_release()
    /// @note Mengirim email tiap kali update,update status transaksi
    /// @attention Mengirim Email Pertama Kali ke approver dan mengganti status transaksi menjadi waiting approve Atau apapila approve sudah selesai mengirim Email ke requester dan mengganti status transaksi
    public function ajax_new_release()
	{

        date_default_timezone_set('Asia/Jakarta'); // Set timezone
        $currentDate = mdate('%Y-%m-%d',time()); 

        // ********************* 1. Collect data post **************************************
        $hdrid=$this->input->post('hdrid');
        $nik=$this->input->post('nik');

        // **********************  2.Cari next approval **************************************    
        $next_approver= $this->M_email_v2->cari_next_approval($hdrid);
    
        if ($next_approver->name=='not found'){ // IF << Ketemu >> NO


            if (substr($hdrid,0,2)=='CN'){
                $status ='Done Settlement CN';
                $table = 'tb_cn';   
                $status_transaction = "Credit Note Complete";

            }else{
                $status ='Done Settlement DN';
                $table = 'tb_dn';
                $status_transaction = "Debit Note Complete";

            }

            // *********************  4.update status transaksi(Done) *********************
            $post_data = array('status'=>$status,'status_transaction' => $status_transaction,'status_transaction_date_change' => mdate('%Y-%m-%d',time()));    
            $post_datamerge=array_merge($post_data,$post_data);
            $where = array('hdrid' => $hdrid);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,$table);



             // *********************   5.Cari Creator  *********************                                                                                          

            $requester= $this->M_email_v2->cari_requester($nik);

            // *********************  6.update tb_mail_trigger *********************
            $post_data =array('status_transaction' => $status_transaction,'hdrid'=>$hdrid,'transaction_date'=>$currentDate,'nik'=>$requester->nik,'name'=>$requester->name,'department_code'=>$requester->kode_setion,'department_name'=>$requester->name_section,'office_email'=>$requester->office_email,'position_code'=>'','position_name'=>'requester','subject_email'=>'Finish Settlement','body_content'=>'Finish Settlement','comment'=>'','cc_email'=>'');
            $post_datamerge=array_merge($post_data,$post_data);   
            $where = array('trxid' => 0);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_mail_trigger');
            

        } else{ // Update Status Transaksi


            if (substr($hdrid,0,2)=='CN'){
                $status = 'Need Approve CN';
                $table = 'tb_cn';   
            }else{
                $status = 'Need Approve DN';
                $table = 'tb_dn';   
            }


           // *********************  3.update status transaksi(waiting approve ...)  *********************
            $status_transaction = "Waiting Approve " . $next_approver->name . " (" . $next_approver->position_code .')' ;
            $post_data = array('status_transaction' => $status_transaction,'status' => $status,'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
            $post_datamerge=array_merge($post_data,$post_data);
            $where = array('hdrid' => $hdrid);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,$table);

            // *********************   6.update tb_mail_trigger *********************
            $post_data =array('status_transaction' => $status_transaction,'hdrid'=>$hdrid,'transaction_date'=>mdate('%Y-%m-%d',time()),'nik'=>$next_approver->nik,'name'=>$next_approver->name,'department_code'=>$next_approver->department_code,'department_name'=>$next_approver->department_name,'office_email'=>$next_approver->office_email,'position_code'=>$next_approver->position_code,
            'position_name'=>$next_approver->position_name,'subject_email'=>'Need Approve '.$hdrid,'body_content'=>'Waiting Approve by '.$next_approver->name .'-' .$next_approver->position_name .'(' .$next_approver->position_code .')' ,'comment'=>'','cc_email'=>''); 
            $post_datamerge=array_merge($post_data,$post_data);
            $where = array('trxid' => 0);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_mail_trigger');

        }

        $data['status']="berhasil";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }


    /// @see ajax_update_approve()
    /// @note
    /// @attention

    // [*****************************************************************]
    //                Flow ajax_update_approve() 
    // [*****************************************************************]
    //
    //          [Approve]                
    //            |                     
    //            v                     
    //         1.Update date (where hdrid,nik,level)
    //            |                     
    //            v                     
    //         2.Cari next approval
    //            |               
    //            v                     
    //     IF << Ketemu >> ----- No  -------------------------------------------------- 
    //            | Yes                                                                |
    //            v                                                                    v
    //         3.update status transaksi(waiting approve ...)              4.update status transaksi(Done) 
    //            |                                                                    |
    //            |                                                                    v
    //            |                                                               5.Cari Creator                                     
    //            |                                                                    |
    //            v                                                                    V
    //         6.update tb_mail_trigger  <---------------------------------------------
    //            |               
    //            v     
    //         run trigger after update  tb_mail_trigger => exec storage procedure send_mail
    
    /// @see ajax_update_approve()
    /// @note Mengirim email ke next approver kalau tidak ketemu send email ke requester,mengisi date approve(aktif saat approve data)
    /// @attention Update tb_approval mengisi date approve dan update status transaksi dan mengirim email ke next approver kalau next approver not found maka mengirim email ke requester notif form sudah di approve
    public function ajax_update_approve()
	{


        date_default_timezone_set('Asia/Jakarta'); // Set timezone
        $tanggal_sekarang = mdate('%Y-%m-%d',time()); 
        
        // ********************* 1. Collect data post **************************************
        // $hdrid=$this->input->post('hdrid');
        // $nik=$this->input->post('nik');
        // $name=$this->input->post('name');
        // $position_code=$this->input->post('position_code');

        $hdrid = str_replace(' ', '', $this->input->post('hdrid')); // Mengambil data input post hdrid
        $nik = str_replace(' ', '', $this->input->post('nik')); // Mengambil data input post nik
        $nikreq = str_replace(' ', '', $this->input->post('nikreq')); // Mengambil data input post nik
        $name = str_replace(' ', '', $this->input->post('name')); // Mengambil data input post name
        $position_code = str_replace(' ', '', $this->input->post('position_code')); // Mengambil data input post position_code


        // *********************  1.Update date (where hdrid,nik,level)  ********************* 
        $post_data = array('date_approve' => mdate('%Y-%m-%d %H:%i:%s',time())); 
        $currentDate = mdate('%Y-%m-%d %H:%i:%s',time());  
        $post_datamerge=array_merge($post_data,$post_data); 
        $where = array('hdrid' => $hdrid,'nik' => $nik,'position_code' => $position_code);        
        $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_approval');

        // **********************  2.Cari next approval **************************************    
        $next_approver= $this->M_email_v2->cari_next_approval($hdrid);
    
        if ($next_approver->name=='not found'){ // IF << Ketemu >> NO

            // *********************  4.update status transaksi(Done) *********************
        
            if (substr($hdrid,0,2)=='DN'){
                $status_transaction = "Waiting Settlement DN";
                $post_data = array('status'=>'Need Settlement DN','status_transaction' => $status_transaction,'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
            }else{
                $status_transaction = "Waiting Settlement CN";
                $post_data = array('status'=>'Need Settlement CN','status_transaction' => $status_transaction,'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
            }

            // $post_data = array('status_transaction' => $status_transaction,'status' => 'Need approve adv');  

            $post_datamerge=array_merge($post_data,$post_data);

            // $where = array('hdrid' => $hdrid);  

            $where = array('hdrid' => $hdrid);   

            if (substr($hdrid,0,2)=='DN'){
                $table = 'tb_dn';   
            }else{
                $table = 'tb_cn';   
            }


            $this->M_email_v2->Update_Data($where,$post_datamerge,$table);

        //      // *********************   5.Cari Creator  *********************                                                                                          

            $requester= $this->M_email_v2->cari_requester($nikreq);

            // *********************  6.update tb_mail_trigger *********************
            $post_data =array('status_transaction' => $status_transaction,'hdrid'=>$hdrid,'transaction_date'=>$currentDate,'nik'=>$requester->nik,'name'=>$requester->name,'department_code'=>$requester->kode_setion,'department_name'=>$requester->name_section,'office_email'=>$requester->office_email,'position_code'=>'','position_name'=>'requester','subject_email'=>'Finish Approve','body_content'=>'Finish Approve','comment'=>'','cc_email'=>'');
            $post_datamerge=array_merge($post_data,$post_data);   
            $where = array('trxid' => 0);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_mail_trigger');
            

        } else{ // Update Status Transaksi

           // *********************  3.update status transaksi(waiting approve ...)  *********************
            $status_transaction = "Waiting Approve " . $next_approver->name . " (" . $next_approver->position_code .')' ;
            

            if (substr($hdrid,0,2)=='DN'){
                $post_data = array('status'=>'Need approve DN','status_transaction' => $status_transaction,'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
            }else{
                $post_data = array('status'=>'Need approve CN','status_transaction' => $status_transaction,'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
            }

            $post_datamerge=array_merge($post_data,$post_data);

            $where = array('hdrid' => $hdrid);   

            if (substr($hdrid,0,2)=='DN'){
                $table = 'tb_dn';   
            }else{
                $table = 'tb_cn';   
            }

            // $where = array('hdrid' => $hdrid);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,$table);

            // *********************   6.update tb_mail_trigger *********************
            $post_data =array('status_transaction' => $status_transaction,'hdrid'=>$hdrid,'transaction_date'=>mdate('%Y-%m-%d',time()),'nik'=>$next_approver->nik,'name'=>$next_approver->name,'department_code'=>$next_approver->department_code,'department_name'=>$next_approver->department_name,'office_email'=>$next_approver->office_email,'position_code'=>$next_approver->position_code,
            'position_name'=>$next_approver->position_name,'subject_email'=>'Need Approve '.$hdrid,'body_content'=>'Waiting Approve by '.$next_approver->name .'-' .$next_approver->position_name .'(' .$next_approver->position_code .')' ,'comment'=>'','cc_email'=>''); 
            $post_datamerge=array_merge($post_data,$post_data);
            $where = array('trxid' => 0);        
            $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_mail_trigger');
        }

        $data['status']="berhasil";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    // [*****************************************************************]
    //                           Doxygen 
    // [*****************************************************************]

    /// @see ajax_update_reject()
    /// @note
    /// @attention

    // [*****************************************************************]
    //                Flow ajax_update_reject() 
    // [*****************************************************************]
    //
    //          [Reject]                
    //            |                     
    //            v                     
    //         1.Update tb_approval  date= null (where hdrid)
    //            |                     
    //            v                     
    //         2.Update status transaksi(Rejected by .. with reason ...)         
    //            |
    //            v         
    //         3.Cari Creator 
    //            |                                                                
    //            v                                                                
    //         4.Update tb_mail_trigger 
    //            |               
    //            v     
    //         run trigger after update  tb_mail_trigger => exec storage procedure send_mail

    /// @see ajax_update_reject()
    /// @note Menghapus semua date approve yang terisi,mengubah status transaksi,mengirim email ke requester saat reject data
    /// @attention Mengganti status transaksi menjadi rejected,menghapus semua date approve menjadi null (mulai cycle approve dari ulang) dan mengganti status form agar kembali ke halaman add untuk di update,mengirim email ke requester notif agar di requester segera me revisi form
    public function ajax_update_reject()
	{

        date_default_timezone_set('Asia/Jakarta'); // Set timezone
        $tanggal_sekarang = mdate('%Y-%m-%d',time()); 

        // ********************* 0. Collect data post *********************
        $hdrid=$this->input->post('hdrid');
        $nik=$this->input->post('nik');
        $nikreq=$this->input->post('nikreq');
        // var_dump($nikreq);
        $name=$this->input->post('name');
        $position_code=$this->input->post('position_code');
        $rejected_by=$this->input->post('rejected_by');
        $reason=$this->input->post('reason');
        $currentDate = mdate('%Y-%m-%d',time()); 

        // $requester= $this->M_email_v2->cari_requester($nik);//kondisi untuk mencari requester 
        
        $requester= $this->M_email_v2->cari_requester($nikreq);//kondisi untuk mencari requester 
        // ********************* 1.Update tb_approval date= null (where hdrid) *********************
        $post_data = array('date_approve' => NULL);   
        $post_datamerge=array_merge($post_data,$post_data);  
        $where = array('hdrid' => $hdrid);        
        $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_approval');
    
        // *********************  2.Update status transaksi(Rejected by .. with reason ...)   *********************
        $status_transaction = "Rejected By:".$rejected_by." With Reason: ".$reason ;

        if (substr($hdrid,0,2)=='DN'){
            $post_data = array('status'=>'Add DN','status_transaction' => $status_transaction,'date_rejected' => mdate('%Y-%m-%d %h:%i:%s',time()),'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
        }else{
            $post_data = array('status'=>'Add CN','status_transaction' => $status_transaction,'date_rejected' => mdate('%Y-%m-%d %h:%i:%s',time()),'status_transaction_date_change' => mdate('%Y-%m-%d',time()));   
        }

        $post_datamerge=array_merge($post_data,$post_data);

       
        $where = array('hdrid' => $hdrid);   

        if (substr($hdrid,0,2)=='DN'){
            $table = 'tb_dn';   
        }else{
            $table = 'tb_cn';   
        }

        $this->M_email_v2->Update_Data($where,$post_datamerge,$table);

        // *********************   3.Cari Creator  *********************

        // *********************   4.Update tb_mail_trigger  *********************

        $post_data =array('status_transaction' => $status_transaction,'hdrid'=>$hdrid,'transaction_date'=>$currentDate,'nik'=>$requester->nik,'name'=>$requester->name,'department_code'=>$requester->kode_setion,'department_name'=>$requester->name_section,'office_email'=>$requester->office_email,'position_code'=>'','position_name'=>'requester','subject_email'=>'Rejected','body_content'=>'Rejected','comment'=>$status_transaction,'cc_email'=>''); 
        $post_datamerge=array_merge($post_data,$post_data);
        $where = array('trxid' => 0);        
        $this->M_email_v2->Update_Data($where,$post_datamerge,'tb_mail_trigger');
        $data['status']="berhasil update";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }

    
}