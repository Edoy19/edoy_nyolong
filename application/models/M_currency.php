<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_currency extends CI_Model {
      
       /// @see get_tables()
   /// @note untuk mendapat data table pada currency
   /// @attention data di tarik ke currency
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
        /// @note untuk mencari data table currency
        /// @attention cari data di currency
      function get_tables_where($tables,$cari,$where,$iswhere)
      {
         // Ambil data yang di ketik user pada textbox pencarian
         $search = htmlspecialchars($_POST['search']['value']);
         // Ambil data limit per page
         $limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
         // Ambil data start
         $start = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}"); 
         // Data all data hight

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
         
         // Untuk mengambil nama field yg menjadi acuan untuk sorting //
         $order_field = $_POST['order'][0]['column']; 

         // Untuk menentukan order by "ASC" atau "DESC" //
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
    /// @note Select data hdrid terbesar
    /// @attention Untuk membuat hdrid di ajax_add
   public function Max_data($mdate,$table)
   {
      $this->db->select_max('hdrid');     
      $this->db->like('hdrid', $mdate);
      $query = $this->db->get($table);      
      return  $query;
   }

    /// @see Input_Data()
   /// @note Input Data
   /// @attention Input Data berdasarkan parameter
   function Input_Data($data,$table){
      $this->db->insert($table,$data);      
   }

      /// @see insert_batch()
   /// @note Insert Data Array Batch
   /// @attention Memasukkan banyak data sekaligus
   public function insert_batch($table,$data) 
   {
    $this->db->insert_batch($table, $data);    
    return $this->db->affected_rows();
   }

   /// @see Update_Data()
   /// @note Update Data
   /// @attention Update Data sesuai isi parameter
   function Update_Data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
   }
      
   /// @see Delete_Data()
   /// @note Delete Data
   /// @attention Delete Data sesuai isi parameter
   function Delete_Data($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
   }

   /// @see Get_Where()
   /// @note Select data
   /// @attention Select data berdasarkan kondisi(isi parameter)
   function Get_Where($where,$table){      
    return $this->db->get_where($table, $where);
   }

   /// @see ajax_getbyhdrid()
   /// @note Select data
   /// @attention select data berdasarkan hdrid 
   function ajax_getbyhdrid($hdrid,$table){      
      return $this->db->get_where($table, array('hdrid' => $hdrid));
   }

   /// @see Get_central_user()
   /// @note fungsi untuk user login menggunakan akun sudah dibuat
   /// @attention login username atau password tidak sesuai akan tidak bisa masuk
   function Get_central_user(){     

    $DB2 = $this->load->database('db_central_user', TRUE);   
    $result = $DB2->get('Tb_user_login')->result();               
    $DB2->Close();
    return $result;

   }

   /// @see Get_departement()
   /// @note untuk membuat departement pada user
   // @attention Select semua data dari table
   function Get_departement(){     

    $DB2 = $this->load->database('db_central_user', TRUE);  
    $result = $DB2->get('Tb_department')->result();             
    $DB2->Close();
    return $result;

   }

   /// @see Send_mail()
   /// @note untuk mengirim email
   /// @attention email akan dikirim sesuai dengan user setting
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
     FROM currency_approver
     where hdrid='WTR2010009' and level_approve=(select min(level_approve) from currency_approver where hdrid='WTR2010009' and date_approve is null)");

      // jika ketemu
   if ($query->num_rows()>0) {
      $query=$query->rows();

      // Update progress waiting approve
       $where = array('hdrid' => $query->hdrid); 
       $data = array('progress_approver' =>'Waiting approved '.$query->name_approver);       
       $this->db->where($where);
       $this->db->update('currency_approver',$data);

      // Kirim email request to approve
      $this->db->query("CALL sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik_approver',@name='$query->name_approver',@email='widodo.a5v@ap.denso.com',@EmailSubject='Waiting Approver Wire transfer No ',@Email_body_content='You need approver'");
    
    }else{

     // Update progress finish approve
     $where = array('hdrid' => $query->hdrid); 
     $data = array('progress_approver' =>'Finish Approved'); 
     $this->db->where($where);
     $this->db->update('currency_approver',$data);
    
     // Kirim email notifikasi finish aprove
     $this->db->query("exec sp_send_mail @hdrid='123',@nik='DM1902060',@name='Widodo',@email='widodo.a5v@ap.denso.com',@EmailSubject='Finish Approver Wire transfer No ',@Email_body_content='You need approver'");
   
    }
    
   }

   /// @see Send_mail_reject()
   /// @note untuk mengirim email jika datanya direject
   /// @attention emailakan kembali ke user jika direject
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




   /// @see get_tb_dn()
   /// @note untuk mencari tb_dn
   /// @attention data akan ditarik currency
   public function get_tb_currency()
   {
    $query =  $this->db->get('tb_currency')->result();
    return $query;
   }



   /// @see get_hdrid()
   /// @note untuk mencari hdrid
   /// @attention data bisa dicari search
    public function get_hdrid($table,$column,$value)
    {

        // return $this->db->get_where('tb_currency', ['hdrid' => $currency_id])->row_array();

        $this->db->select('hdrid');
        $this->db->from($table);
        $this->db->where($column, $value);

        return $this->db->get()->row();
        
        
    }

  
   
}



