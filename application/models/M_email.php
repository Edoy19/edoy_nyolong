<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_email extends CI_Model {
   
   
    /// @see Send_mail()
   /// @note
   /// @attention
   public function Send_mail($hdrid)
   {
    
    // Cari approver yang belum approve dan order by level
    $query =$this->db->query("
         SELECT  hdrid
         ,level_approve
         ,nik_approver
         ,isnull(nik_approver_encode,nik_approver)nik_approver_encode
         ,name_approver
         ,email_approver
         ,date_approve
         ,description
     FROM tb_wiretransfer_approver   
     where hdrid='$hdrid' and level_approve=(select max(level_approve) from tb_wiretransfer_approver where hdrid='$hdrid' and date_approve is null)");
    
     // jika ketemu
   if ($query->num_rows()>0) {

       $query=$query->row();

        // Update progress approve
        // Kirim email request to approve   
          
        $result = $this->db->query("sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik_approver_encode',@name='$query->name_approver',@email='widodo.a5v@ap.denso.com',@EmailSubject='Waiting Approver Wire transfer No (revision) ',@Email_body_content='Need your approval',@comment=''")->result_array();
     
        // if ($subject=='Add') {
        //     $result = $this->db->query("sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik_approver_encode',@name='$query->name_approver',@email='widodo.a5v@ap.denso.com',@EmailSubject='Waiting Approver Wire transfer No ',@Email_body_content='Need your approval',@comment=''")->result_array();
        // }else {
        //     //  Jika revisi
        //  }
      
    }else{

     // Update progress finish approve
     // Kirim email notifikasi finish approve
     $query =$this->db->query("select hdrid,nik,name_requester from tb_wiretransfer where hdrid='$hdrid' ");
     $query=$query->row();
     $query2 =$this->db->query("select top 1  email from tb_userwire where nik='$query->nik' ");
     if ($query2->num_rows()>0) {
         $query2=$query2->row();
         $result =$this->db->query("exec sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik',@name='$query->name_requester',@email='widodo.a5v@ap.denso.com',@EmailSubject='Finish Approver Wire transfer No ',@Email_body_content='Finish approve your request',@comment=''")->result_array();
     }
   
    }
    
   }

   /// @see Send_mail_reject()
   /// @note
   /// @attention
   public function Send_mail_reject($hdrid)
   {
    
      // Cari data wire
      $query =$this->db->query("select hdrid,nik,name_requester,isnull(reject_by,'')reject_by,isnull(reason_reject,'')reason_reject from tb_wiretransfer where hdrid='$hdrid' ");
      $query=$query->row();

      // Cari email
      $query2 =$this->db->query("select top 1 email from tb_userwire where nik='$query->nik' ");
      if ($query2->num_rows()>0) {
          $query2=$query2->row();
         //  Kirim email
          $result =$this->db->query("exec sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik',@name='$query->name_requester',@email='widodo.a5v@ap.denso.com',@EmailSubject='Rejected Wire transfer No ',@Email_body_content='Rejected by <b> $query->reject_by </b>',@comment='With reason = <b> $query->reason_reject </b>'")->result_array();
      }
      
   }


   /// @see Send_mail2()
   /// @note
   /// @attention
   public function Send_mail2($hdrid,$subject)
   {
    
    $hdrid=$hdrid;
    $subject=$subject;

    //Send mail
    $result = $this->db->query("sp_send_mail @hdrid='$hdrid',@nik='XXX',@name='XXX',@email='XXX@ap.denso.com',@EmailSubject='$subject',@Email_body_content='This new engineering change',@comment=''")->result_array();
      
   }


   /// @see Send_mail_reminder()
   /// @note
   /// @attention
   public function Send_mail_reminder($hdrid,$product_id,$subject,$position)
   {
    
    $hdrid=$hdrid;
    $product_id=$product_id;
    $subject=$subject;
    $position=$position;

    //Send mail
    $result = $this->db->query("sp_send_mail @hdrid='$hdrid',@nik='XXX',@name='XXX',@email='XXX@ap.denso.com',@EmailSubject='$subject ',@Email_body_content='This new engineering change',@comment='$position'")->result_array();
         
   }


   /// @see Send_mail_reminder_v1()
   /// @note
   /// @attention
    public function Send_mail_reminder_v1( $hdrid,$name2,$email2, $subject,$comment,$body_content) //Untuk process reject
    {
    
        $result = $this->db->query("sp_send_mail_reminder @hdrid='$hdrid',@nik='REJ',@name='$name2',@email='$email2',@EmailSubject='$subject ',@Email_body_content='$body_content',@comment='$comment'")->result_array();

    }

    /// @see Send_mail_reminder_v2()
   /// @note
   /// @attention
    public function Send_mail_reminder_v2( $hdrid,$position_code,$name2,$email2,$subject,$comment,$body_content)
    {
    
        $result = $this->db->query("sp_send_mail_approver @hdrid='$hdrid',@nik='$position_code',@name='$name2',@email='$email2',@EmailSubject='$subject ',@Email_body_content='$body_content',@comment='$comment'")->result_array();

    }

}






