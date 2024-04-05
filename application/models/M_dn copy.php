<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dn extends CI_Model {
      
    /// @see get_tables()
   /// @note untuk mendapat data table pada debit note
   /// @attention
   function get_tables($tables,$cari,$iswhere)
        {
            // Ambil data yang di ketik user pada textbox pencarian
            $search = htmlspecialchars($_POST['search']['value']);
            // Ambil data limit per page
            $limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
            // Ambil data start
            $start =preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}"); 
            
            $query = $tables;
            
            if(!empty($iswhere)){
                $sql = $this->db->query("SELECT * FROM ".$query." WHERE ".$iswhere);
            }else{
                $sql = $this->db->query("SELECT * FROM ".$query);
            }

            $sql_count = $sql->num_rows();

            $cari = implode(" LIKE '%".$search."%' OR ", $cari)." LIKE '%".$search."%'";
            
            // Untuk mengambil nama field yg menjadi acuan untuk sorting
            $order_field = $_POST['order'][0]['column']; 

            // Untuk menentukan order by "ASC" atau "DESC"
            $order_ascdesc = $_POST['order'][0]['dir']; 
            $order = " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc;

            if(!empty($iswhere)){
                $sql_data = $this->db->query("SELECT * FROM ".$query." WHERE $iswhere AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
            }else{
                $sql_data = $this->db->query("SELECT * FROM ".$query." WHERE (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
            }

            if(isset($search))
            {
                if(!empty($iswhere)){
                    $sql_cari =  $this->db->query("SELECT * FROM ".$query." WHERE $iswhere (".$cari.")");
                }else{
                    $sql_cari =  $this->db->query("SELECT * FROM ".$query." WHERE (".$cari.")");
                }
                $sql_filter_count = $sql_cari->num_rows();
            }else{
                if(!empty($iswhere)){
                    $sql_filter = $this->db->query("SELECT * FROM ".$query."WHERE ".$iswhere);
                }else{
                    $sql_filter = $this->db->query("SELECT * FROM ".$query);
                }
                $sql_filter_count = $sql_filter->num_rows();
            }
            $data = $sql_data->result_array();

            $callback = array(    
                'draw' => $_POST['draw'], // Ini dari datatablenya    
                'recordsTotal' => $sql_count,    
                'recordsFiltered'=>$sql_filter_count,    
                'data'=>$data
            );
            return json_encode($callback); // Convert array $callback ke json
        }


    /// @see get_tables_where
   /// @note untuk mencari data table pada debit note
   /// @attention
      function get_tables_where($tables,$cari,$where,$iswhere)
      {
         // Ambil data yang di ketik user pada textbox pencarian
         $search = htmlspecialchars($_POST['search']['value']);
         // Ambil data limit per page
         $limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
         // Ambil data start
         $start =preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}"); 

         $setWhere = array();
         foreach ($where as $key => $value)
         {
               $setWhere[] = $key."='".$value."'";
         }

         $fwhere = implode(' AND ', $setWhere);

         if(!empty($iswhere)){
               $sql = $this->db->query("SELECT * FROM ".$tables." WHERE $iswhere AND ".$fwhere);
         }else{
               $sql = $this->db->query("SELECT * FROM ".$tables." WHERE ".$fwhere);
         }
         $sql_count = $sql->num_rows();

         $query = $tables;
         $cari = implode(" LIKE '%".$search."%' OR ", $cari)." LIKE '%".$search."%'";
         
         // Untuk mengambil nama field yg menjadi acuan untuk sorting
         $order_field = $_POST['order'][0]['column']; 

         // Untuk menentukan order by "ASC" atau "DESC"
         $order_ascdesc = $_POST['order'][0]['dir']; 
         $order = " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc;

         if(!empty($iswhere)){
               $sql_data = $this->db->query("SELECT * FROM ".$query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")".$order." OFFSET ".$start." ROWS FETCH NEXT ". $limit . " ROWS only ");
         }else{
               $sql_data = $this->db->query("SELECT * FROM ".$query." WHERE ".$fwhere." AND (".$cari.")".$order." OFFSET ".$start." ROWS FETCH NEXT ". $limit . " ROWS only ");
         }

         if(isset($search))
         {
               if(!empty($iswhere)){
                  $sql_cari =  $this->db->query("SELECT * FROM ".$query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")");
               }else{
                  $sql_cari =  $this->db->query("SELECT * FROM ".$query." WHERE ".$fwhere." AND (".$cari.")");
               }
               $sql_filter_count = $sql_cari->num_rows();
         }else{
               if(!empty($iswhere)){
                  $sql_filter = $this->db->query("SELECT * FROM ".$tables." WHERE $iswhere AND ".$fwhere);
               }else{
                  $sql_filter = $this->db->query("SELECT * FROM ".$tables." WHERE ".$fwhere);
               }
               $sql_filter_count = $sql_filter->num_rows();
         }

         $data = $sql_data->result_array();
         
         $callback = array(    
               'draw' => $_POST['draw'], // Ini dari datatablenya    
               'recordsTotal' => $sql_count,    
               'recordsFiltered'=>$sql_filter_count,    
               'data'=>$data
         );
         return json_encode($callback); // Convert array $callback ke json
      }
      
       /// @see get_tables_query()
      /// @note untuk membuat fungsi query table debit note
      /// @attention
      function get_tables_query($query,$cari,$where,$iswhere)
      {
          // Ambil data yang di ketik user pada textbox pencarian
          $search = htmlspecialchars($_POST['search']['value']);
          // Ambil data limit per page
          $limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
          // Ambil data start
          $start =preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}"); 

          if($where != null)
          {
              $setWhere = array();
              foreach ($where as $key => $value)
              {
                  $setWhere[] = $key."='".$value."'";
              }
              $fwhere = implode(' AND ', $setWhere);

              if(!empty($iswhere))
              {
                  $sql = $this->db->query($query." WHERE  $iswhere AND ".$fwhere);
                  
              }else{
                  $sql = $this->db->query($query." WHERE ".$fwhere);
              }
              $sql_count = $sql->num_rows();
  
              $cari = implode(" LIKE '%".$search."%' OR ", $cari)." LIKE '%".$search."%'";
              
              // Untuk mengambil nama field yg menjadi acuan untuk sorting
              $order_field = $_POST['order'][0]['column']; 
  
              // Untuk menentukan order by "ASC" atau "DESC"
              $order_ascdesc = $_POST['order'][0]['dir']; 
              $order = " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc;
  
              if(!empty($iswhere))
              {
                  $sql_data = $this->db->query($query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }else{
                  $sql_data = $this->db->query($query." WHERE ".$fwhere." AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }
              
              if(isset($search))
              {
                  if(!empty($iswhere))
                  {
                      $sql_cari =  $this->db->query($query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")");
                  }else{
                      $sql_cari =  $this->db->query($query." WHERE ".$fwhere." AND (".$cari.")");
                  }
                  $sql_filter_count = $sql_cari->num_rows();
              }else{
                  if(!empty($iswhere))
                  {
                      $sql_filter = $this->db->query($query." WHERE $iswhere AND ".$fwhere);
                  }else{
                      $sql_filter = $this->db->query($query." WHERE ".$fwhere);
                  }
                  $sql_filter_count = $sql_filter->num_rows();
              }
              $data = $sql_data->result_array();

          }else{

              if(!empty($iswhere))
              {
                  $sql = $this->db->query($query." WHERE  $iswhere ");
              }else{
                  $sql = $this->db->query($query);
              }
              
              $sql_count = $sql->num_rows();
  
              $cari = implode(" LIKE '%".$search."%' OR ", $cari)." LIKE '%".$search."%'";
              
              // Untuk mengambil nama field yg menjadi acuan untuk sorting
              $order_field = $_POST['order'][0]['column']; 
  
              // Untuk menentukan order by "ASC" atau "DESC"
              $order_ascdesc = $_POST['order'][0]['dir']; 
              $order = " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc;
  
              if(!empty($iswhere))
              {                
                  $sql_data = $this->db->query($query." WHERE $iswhere AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }else{
                  $sql_data = $this->db->query($query." WHERE (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }

              if(isset($search))
              {
                  if(!empty($iswhere))
                  {     
                      $sql_cari =  $this->db->query($query." WHERE $iswhere AND (".$cari.")");
                  }else{
                      $sql_cari =  $this->db->query($query." WHERE (".$cari.")");
                  }
                  $sql_filter_count = $sql_cari->num_rows();
              }else{
                  if(!empty($iswhere))
                  {
                      $sql_filter = $this->db->query($query." WHERE $iswhere");
                  }else{
                      $sql_filter = $this->db->query($query);
                  }
                  $sql_filter_count = $sql_filter->num_rows();
              }
              $data = $sql_data->result_array();
          }
          
          $callback = array(    
              'draw' => $_POST['draw'], // Ini dari datatablenya    
              'recordsTotal' => $sql_count,    
              'recordsFiltered'=>$sql_filter_count,    
              'data'=>$data
          );
          return json_encode($callback); // Convert array $callback ke json
      }     


    /// @see Max_data()
   /// @note untuk membuat maximal data diinput
   /// @attention jika data diinput melebihi kapasitas maka data tidak bisa masuk
   public function Max_data($mdate,$table)
   {
      $this->db->select_max('hdrid');     
      $this->db->like('hdrid', $mdate);
      $query = $this->db->get($table);      
      return  $query;
   }
     
   /// @see Input_Data()
   /// @note untuk menginput data debit note
   /// @attention
   function Input_Data($data,$table){
      $this->db->insert($table,$data);      
   }

   /// @see cari_tb_approver()
   /// @note untuk mencari tb approver
   /// @attention
   function cari_tb_approver($hdrid)
   {

      $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc");
      if ($query->num_rows() > 0) {
          return $query->row();
      }else{
          $query = (object) array('name'=>'not found','position_code'=>'not found','nik'=>'not found');
          return $query;
      }

   }

   /// @see insert_batch()
   /// @note untuk membuat insert berupa excel data
   /// @attention
   public function insert_batch($table,$data) 
   {
    $this->db->insert_batch($table, $data);    
    return $this->db->affected_rows();
   }

   /// @see Update_Data()
   /// @note untuk update data pada debit note
   /// @attention
   function Update_Data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
   }
      
   /// @see Delete_Data()
   /// @note untuk delete data pada debit note
   /// @attention
   function Delete_Data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
   }

   /// @see Get_Where()
   /// @note untuk mencari data di debit note
   /// @attention
   function Get_Where($where,$table){      
    return $this->db->get_where($table, $where);
   }

   /// @see ajax_getbyhdrid()
   /// @note  fungsi hdrid untuk menjadi primary key
   /// @attention
   function ajax_getbyhdrid($hdrid,$table){      
      return $this->db->get_where($table, array('hdrid' => $hdrid));
   }

   /// @see Get_central_user()
   /// @note fungsi untuk user login menggunakan akun sudah dibuat
   /// @attention
   function Get_central_user(){     

    $DB2 = $this->load->database('db_central_user', TRUE);   // Database central user   
    $result = $DB2->get('Tb_user_login')->result();               // Untuk mengeksekusi dan mengambil data hasil query
    $DB2->Close();
    return $result;

   }

   /// @see Get_departement()
   /// @note untuk membuat departement pada user
   /// @attention
   function Get_departement(){     

    $DB2 = $this->load->database('db_central_user', TRUE);   // Database central user   
    $result = $DB2->get('Tb_department')->result();               // Untuk mengeksekusi dan mengambil data hasil query
    $DB2->Close();
    return $result;

   }

   /// @see Send_mail()
   /// @note untuk mengirim email
   /// @attention
   public function Send_mail($hdrid)
   {
    
    // cari approver yang belum approve dan order by level
    $query =$this->db->query("
         SELECT  hdrid
         ,level_approve
         ,nik_approver
         ,nik_approver_encode
         ,name_approver
         ,email_approver
         ,date_approve
         ,description
     FROM dn_approver
     where hdrid='WTR2010009' and level_approve=(select min(level_approve) from dn_approver where hdrid='WTR2010009' and date_approve is null)");

      // jika ketemu
   if ($query->num_rows()>0) {
      $query=$query->rows();

      // Update progress waiting approve
       $where = array('hdrid' => $query->hdrid); 
       $data = array('progress_approver' =>'Waiting approved '.$query->name_approver);       
       $this->db->where($where);
       $this->db->update('dn_approver',$data);

      // Kirim email request to approve
      $this->db->query("CALL sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik_approver',@name='$query->name_approver',@email='widodo.a5v@ap.denso.com',@EmailSubject='Waiting Approver Wire transfer No ',@Email_body_content='You need approver'");
    
    }else{

     // Update progress finish approve
     $where = array('hdrid' => $query->hdrid); 
     $data = array('progress_approver' =>'Finish Approved'); 
     $this->db->where($where);
     $this->db->update('dn_approver',$data);
    
     // Kirim email notifikasi finish aprove
     $this->db->query("exec sp_send_mail @hdrid='123',@nik='DM1902060',@name='Widodo',@email='widodo.a5v@ap.denso.com',@EmailSubject='Finish Approver Wire transfer No ',@Email_body_content='You need approver'");
   
    }
    
   }

   /// @see Send_mail_reject()
   /// @note untuk mengirim email jika datanya direject
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



   // Get Data Group dn

   /// @see get_tb_dn()
   /// @note untuk mencari tb_dn
   /// @attention
   public function get_tb_dn()
   {
    $query =  $this->db->get('tb_dn')->result();
    return $query;
   }

   // Get Data report no By dn ID

   /// @see get_hdrid()
   /// @note untuk mencari hdrid
   /// @attention
    public function get_hdrid($table,$column,$value)
    {

        // return $this->db->get_where('tb_dn', ['hdrid' => $dn_id])->row_array();

        $this->db->select('hdrid');
        $this->db->from($table);
        $this->db->where($column, $value);

        return $this->db->get()->row();
        
        
    }

///@see Tampil_NIK()
/// @note untuk menampilkan nik ada user
// /@attention
    public function Tampil_NIK() 
    {
        $DB2 = $this->load->database('db_central_user', TRUE);       
        $query=$DB2->get('Tb_user_login')->result();
        $DB2->Close();
        return  $query;
    }

    /// @see Tampil_company_to
    /// @note untuk menampilkan company to pada debit note
    /// @attention
    public function Tampil_company_to()
    {
    $query =  $this->db->get('tb_company_to')->result();
    return $query;
    }

    
    /// @see Tampil_account()
   /// @note  untuk menampilkan account pada debit note
   /// @attention
   public function Tampil_account()
   {
       $this->db->select('account');
       $this->db->from('tb_akun_dn');
       return $this->db->get()->result();
   }

    
    /// @see Tampil_vat
    /// @note untuk menampilkan vat pada debit note
    /// @attention
    public function Tampil_vat()
    {
    $query =  $this->db->get('tb_vat')->result();
    return $query;
    }

    /// @see Tampil_transfer_to
    /// @note untuk menampilkan transfer_to pada debit note
    /// @attention
    public function Tampil_transfer_to()
    {
    $query =  $this->db->get('tb_transfer_to')->result();
    return $query;
    }

    

    /// @see Tampil_currency()
   /// @note untuk menampilkan Currency pada debit note
   /// @attention
    public function Tampil_Currency()
    {
        $this->db->select('currency');
        $this->db->from('tb_currency');
        return $this->db->get()->result();
    }

    
    /// @see Tampil_director()
   /// @note untuk menampilkan director pada debit note
   /// @attention
   public function Tampil_director()
   {
    $query =  $this->db->get('tb_director')->result();
    return $query;
   }
     /// @see Tampil_department()
    /// @note untuk menampilkan department pada debit note
    /// @attention
    public function Tampil_department()
    {
    $query =  $this->db->get('tb_department')->result();
    return $query;
    }

    /// @see Tampil_Bank()
   /// @note untuk menampilkan Bank pada debit note
   /// @attention
    public function Tampil_Bank()
    {
        $this->db->select('bank_name');
        $this->db->from('tb_bank_name');
        return $this->db->get()->result();
    }

   /// @see tb_account_adv()
   /// @note untuk menampilkan account_adv pada debit note
   /// @attention
    public function tb_account_adv()
    {
       
        return $this->db->get('tb_account_adv')->row();
    }


    /// @see Tampil_Tipe_Transfer()
   /// @note untuk menampilkan Tipe_Transfer pada debit note
   /// @attention
    public function Tampil_Tipe_Transfer()
    {
        $this->db->select('tipe_transfer');
        $this->db->from('tb_tipe_transfer');
        return $this->db->get()->result();
    }

    /// @see Tampil_payee_Code()
   /// @note untuk menampilkan Payee_Code pada debit note
   /// @attention
    public function Tampil_Payee_Code()
    {
        $this->db->select('payee_code');
        $this->db->from('tb_payee_code');
        return $this->db->get()->result();
    }

    /// @see count_all_results()
    /// @note 
    /// @attention
    public function count_all_results($where,$table)
    {
        $this->db->select('invoice_no');
        $this->db->from($table);
        $this->db->where($where);
        $query=$this->db->get()->result();
        $count = count($query);
        if(!empty($count)){
            return $query='DUPLICATE';
        }else{
            return $query='AVAILABLE';
        }
    }

//     /// @see Input_Data_Approver()
//    /// @note fungsi untuk data sudah diapprove siapa aja
//    /// @attention
//    function Input_Data_Approver($nominal,$date_transaction,$hdrid,$nik)
//     {
//         // *** Inisiator ***
      
//         $nominal = str_replace(',', '', $nominal);
//         $nominal = (float) $nominal;
      
//         if ($nominal >= 5000000.00 ) {
//             $this->tb_approval_save_superior($date_transaction,$hdrid,$nik,'0');
//         }else{
//             $this->tb_approval_save_superior($date_transaction,$hdrid,$nik,'5');
//         }
        
            
//     }

    // /// @see tb_approval_save_superior
    // /// @note fungsi table approval save superior
    // /// @attention
    // function tb_approval_save_superior($date_transaction,$hdrid,$nik,$nominal)
    // {
    //     // Delete tb_approval dimana hdrid='$hdrid'
    //     // $this->db->query("Delete FROM tb_approval WHERE hdrid='$hdrid'");

    //     $sequence=1;
    //     //Cari Approver User
    //     $query=$this->db->query("select * from fn_view_approver('$nik') order by position_code asc");
    //     $query=$query->result();

    //     foreach ($query as $key=>$value){

    //         if($nominal!=$value->position_code){ // pengecualian approval 
    //             $query = $this->db->query("
    //                 INSERT INTO tb_approval
    //                     (transaction_date
    //                     ,hdrid
    //                     ,nik
    //                     ,name
    //                     ,office_email
    //                     ,department_code
    //                     ,department_name
    //                     ,position_code
    //                     ,position_name
    //                 ) values (
    //                         '$date_transaction'
    //                         ,'$hdrid'
    //                         ,'$value->nik_superior2'
    //                         ,'$value->name_superior2'
    //                         ,'$value->email_superior2'
    //                         ,'$value->kode_setion_superior2'
    //                         ,'$value->name_section_superior2'
    //                         ,'$sequence'
    //                         ,'$value->position_name2'
    //                     )
    //                 ");
    //             $sequence++;

    //         }

    //     }

    //     //Cari Approver Finance
    //     $query=$this->db->query("select * from fn_view_approver_fa() order by position_code asc");
    //     $query=$query->result();

    //     foreach ($query as $key=>$value){

    //         if($nominal!=$value->position_code){ // pengecualian approval
    //             $query = $this->db->query("
    //                 INSERT INTO tb_approval
    //                     (transaction_date
    //                     ,hdrid
    //                     ,nik
    //                     ,name
    //                     ,office_email
    //                     ,department_code
    //                     ,department_name
    //                     ,position_code
    //                     ,position_name
    //                 ) values (
    //                         '$date_transaction'
    //                         ,'$hdrid'
    //                         ,'$value->nik_finance2'
    //                         ,'$value->name_finance2'
    //                         ,'$value->email_finance2'
    //                         ,'$value->kode_setion_finance2'
    //                         ,'$value->name_section_finance2'
    //                         ,'$sequence'
    //                         ,'$value->position_name2'
    //                     )
    //                 ");
    //             $sequence++;

    //         }

    //     }

    // }



            /// @see Input_Data_Approver()
            /// @note fungsi untuk data sudah diapprove siapa aja
            /// @attention
            function Add_List_Approver($date_transaction,$hdrid,$nik)
            {
                
                    $this->tb_approval_save_superior($date_transaction,$hdrid,$nik,'0');
                    // $this->tb_approval_save_superior($date_transaction,$hdrid,$nik,'5');
                
                    
            }


                /// @see tb_approval_save_superior
                /// @note fungsi table approval save superior
                /// @attention
                function tb_approval_save_superior($date_transaction,$hdrid,$nik,$nominal)
                {
                    // Delete tb_approval dimana hdrid='$hdrid'
                    // $this->db->query("Delete FROM tb_approval WHERE hdrid='$hdrid'");

                    $sequence=1;
                    //Cari Approver User
                    $query=$this->db->query("select * from fn_view_approver('$nik') order by position_code asc");
                    $query=$query->result();

                    foreach ($query as $key=>$value){

                        if($value->position_code){ // pengecualian approval 
                            $query = $this->db->query("
                                INSERT INTO tb_approval
                                    (transaction_date
                                    ,hdrid
                                    ,nik
                                    ,name
                                    ,office_email
                                    ,department_code
                                    ,department_name
                                    ,position_code
                                    ,position_name
                                ) values (
                                        '$date_transaction'
                                        ,'$hdrid'
                                        ,'$value->nik_superior2'
                                        ,'$value->name_superior2'
                                        ,'$value->email_superior2'
                                        ,'$value->kode_setion_superior2'
                                        ,'$value->name_section_superior2'
                                        ,'$sequence'
                                        ,'$value->position_name2'
                                    )
                                ");
                            $sequence++;

                        }

                    }

                    //Cari Approver Finance
                    $query=$this->db->query("select * from fn_view_approver_fa() order by position_code asc");
                    $query=$query->result();

                    foreach ($query as $key=>$value){

                        if($value->position_code){ // pengecualian approval
                            $query = $this->db->query("
                                INSERT INTO tb_approval
                                    (transaction_date
                                    ,hdrid
                                    ,nik
                                    ,name
                                    ,office_email
                                    ,department_code
                                    ,department_name
                                    ,position_code
                                    ,position_name
                                ) values (
                                        '$date_transaction'
                                        ,'$hdrid'
                                        ,'$value->nik_finance2'
                                        ,'$value->name_finance2'
                                        ,'$value->email_finance2'
                                        ,'$value->kode_setion_finance2'
                                        ,'$value->name_section_finance2'
                                        ,'$sequence'
                                        ,'$value->position_name2'
                                    )
                                ");
                            $sequence++;

                        }

                    }

                }

    

}



