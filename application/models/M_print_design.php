<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_print_design extends CI_Model {
      
    /// @see get_tables()
   /// @note untuk mendapat data table pada credit note
   /// @attention data di tarik ke credit note
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
   /// @attention cari data di credit note
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

   /// @see cari_tb_approver()
   /// @note Cek approver
   /// @attention Cek approver sedang berada di siapa (Validasi Button Approve)
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



   // Get Data Group dn

   /// @see get_tb_dn()
   /// @note untuk mencari tb_dn
   /// @attention  untuk kirim data tb_dn
   public function get_tb_dn()
   {
    $query =  $this->db->get('tb_dn')->result();
    return $query;
   }

   // Get Data report no By dn ID
   
   /// @see get_hdrid()
   /// @note select data hdrid berdasarkan kondisi
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
    /// @attention Select semua data dari table 
    public function Tampil_NIK() 
    {
        $DB2 = $this->load->database('db_central_user', TRUE);       
        $query=$DB2->get('Tb_user_login')->result();
        $DB2->Close();
        return  $query;
    }

    /// @see Tampil_company_to
    /// @note untuk menampilkan company to pada debit note
   /// @attention Select semua data dari table
    public function Tampil_company_to()
    {
    $query =  $this->db->get('tb_company_to')->result();
    return $query;
    }

    
    /// @see Tampil_account()
   /// @note  untuk menampilkan account pada debit note
/// @attention Select semua data field dari table
   public function Tampil_account()
   {
    return $this->db->get_where('tb_akun_dn');

   }

    
    /// @see Tampil_vat
    /// @note untuk menampilkan vat pada debit note
    /// @attention Select semua data dari table
    public function Tampil_vat()
    {
    $query =  $this->db->get('tb_vat')->result();
    return $query;
    }

 

    

    /// @see Tampil_currency()
   /// @note untuk menampilkan Currency pada debit note
   /// @attention Select semua data dari table
    public function Tampil_Currency()
    {
        $this->db->select('currency');
        $this->db->from('tb_currency');
        return $this->db->get()->result();
    }

    
    /// @see Tampil_director()
   /// @note untuk menampilkan director pada debit note
     /// @attention Select semua data field dari table
   public function Tampil_director()
   {
    // $query =  $this->db->get('tb_director')->result();
    // return $query;
    return $this->db->get_where('tb_director');
   }
     /// @see Tampil_department()
    /// @note untuk menampilkan department pada debit note
    /// @attention Select semua data dari table
    public function Tampil_department()
    {
    $query =  $this->db->get('tb_department')->result();
    return $query;
    }

    /// @see Tampil_Bank()
   /// @note untuk menampilkan Bank pada debit note
   /// @attention Select semua data field dari table
    public function Tampil_Bank()
    {
        $this->db->select('bank_name');
        $this->db->from('tb_bank_name');
        return $this->db->get()->result();
    }

   /// @see tb_account_adv()
   /// @note untuk menampilkan account_adv pada debit note
  /// @attention Select semua data field dari table
    public function tb_account_adv()
    {
       
        return $this->db->get('tb_account_adv')->row();
    }


    /// @see Tampil_Tipe_Transfer()
   /// @note untuk menampilkan Transfer to otomatis di detail pembayaran pada debit note
   /// @attention
    public function Tampil_transfer_to()
    {
        return $this->db->get_where('tb_transfer_to');
    }

    /// @see cek_duplicate()
    /// @note Select data reference berdasarkan input user
    /// @attention apabila ketemu return Duplicate else available
    public function cek_duplicate($where,$table)
    {
        $this->db->select('reference');
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

    
    /// @see Tampil_payee_Code()
   /// @note untuk menampilkan Payee_Code pada debit note
   /// @attention
   public function Tampil_Payee_Code()
   {
       $this->db->select('payee_code');
       $this->db->from('tb_payee_code');
       return $this->db->get()->result();
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



            /// @see Add_List_Approver
            /// @note fungsi untuk data sudah diapprove siapa aja
              /// @attention Mengirim parameter ke function lain
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


            /// @see Add_cicilan()
            /// @note Insert data cicilan ke tb_cicilan
            /// @attention hapus format data...amount_total dibagi cicilan 
            function Add_cicilan($cicilan,$month,$amount,$payment_terms,$hdrid)
            {
                $amount = str_replace(',', '', $amount);
                $amount = (float) $amount;
                $hasil= number_format($amount/$cicilan, 2, ".", ",");
                

                $add=1;
                for ($x = 1; $x <= $cicilan; $x+=1) {

                    $query = $this->db->query("
                    INSERT INTO tb_cicilan_dn
                        (hdrid
                        ,transaction_date
                        ,payment_terms
                        ,month
                        ,amount
                       
                    ) values (
                             '$hdrid'
                            ,getdate()
                            ,'$payment_terms'
                            ,DATEADD(MONTH,$add,'$month')
                            ,'$hasil'
                           
                        )
                    ");
                    $add++;
            }
        }

          /// @see Add_cicilan_update()
            /// @note Update data tb_cicilan
            /// @attention Delete data yang sudah ada dan input data baru hapus format...amount_total dibagi cicilan 
            function Add_cicilan_update($cicilan,$month,$amount,$payment_terms,$hdrid)
            {   
                $this->db->query(" DELETE FROM tb_cicilan_dn where hdrid='$hdrid'");
                $amount = str_replace(',', '', $amount);
                $amount = (float) $amount;
                $hasil= number_format($amount/$cicilan, 2, ".", ",");
                

                $add=1;
                for ($x = 1; $x <= $cicilan; $x+=1) {

                    $query = $this->db->query("
                    INSERT INTO tb_cicilan_dn
                        (hdrid
                        ,transaction_date
                        ,payment_terms
                        ,month
                        ,amount
                       
                    ) values (
                             '$hdrid'
                            ,getdate()
                            ,'$payment_terms'
                            ,DATEADD(MONTH,$add,'$month')
                            ,'$hasil'
                           
                        )
                    ");
                    $add++;
                 }
             }


    

       

    

}



