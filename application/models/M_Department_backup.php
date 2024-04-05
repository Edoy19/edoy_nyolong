<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Department extends CI_Model {
      
   function get_tables($tables,$cari,$iswhere)
        {

            $DB2 = $this->load->database('db_central_user', TRUE);
            // Ambil data yang di ketik user pada textbox pencarian
            $search = htmlspecialchars($_POST['search']['value']);
            // Ambil data limit per page
            $limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
            // Ambil data start
            $start =preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}"); 
            
            $query = $tables;
            
            if(!empty($iswhere)){
                $sql = $DB2->query("SELECT * FROM ".$query." WHERE ".$iswhere);
            }else{
                $sql = $DB2->query("SELECT * FROM ".$query);
            }

            $sql_count = $sql->num_rows();

            $cari = implode(" LIKE '%".$search."%' OR ", $cari)." LIKE '%".$search."%'";
            
            // Untuk mengambil nama field yg menjadi acuan untuk sorting
            $order_field = $_POST['order'][0]['column']; 

            // Untuk menentukan order by "ASC" atau "DESC"
            $order_ascdesc = $_POST['order'][0]['dir']; 
            $order = " ORDER BY ".$_POST['columns'][$order_field]['data']." ".$order_ascdesc;

            if(!empty($iswhere)){
                $sql_data = $DB2->query("SELECT * FROM ".$query." WHERE $iswhere AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
            }else{
                $sql_data = $DB2->query("SELECT * FROM ".$query." WHERE (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
            }

            if(isset($search))
            {
                if(!empty($iswhere)){
                    $sql_cari =  $DB2->query("SELECT * FROM ".$query." WHERE $iswhere (".$cari.")");
                }else{
                    $sql_cari =  $DB2->query("SELECT * FROM ".$query." WHERE (".$cari.")");
                }
                $sql_filter_count = $sql_cari->num_rows();
            }else{
                if(!empty($iswhere)){
                    $sql_filter = $DB2->query("SELECT * FROM ".$query."WHERE ".$iswhere);
                }else{
                    $sql_filter = $DB2->query("SELECT * FROM ".$query);
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
            $DB2->Close();
            return json_encode($callback); // Convert array $callback ke json
        }


      function get_tables_where($tables,$cari,$where,$iswhere)
      {
         $DB2 = $this->load->database('db_central_user', TRUE);
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
               $sql = $DB2->query("SELECT * FROM ".$tables." WHERE $iswhere AND ".$fwhere);
         }else{
               $sql = $DB2->query("SELECT * FROM ".$tables." WHERE ".$fwhere);
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
               $sql_data = $DB2->query("SELECT * FROM ".$query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")".$order." OFFSET ".$start." ROWS FETCH NEXT ". $limit . " ROWS only ");
         }else{
               $sql_data = $DB2->query("SELECT * FROM ".$query." WHERE ".$fwhere." AND (".$cari.")".$order." OFFSET ".$start." ROWS FETCH NEXT ". $limit . " ROWS only ");
         }

         if(isset($search))
         {
               if(!empty($iswhere)){
                  $sql_cari =  $DB2->query("SELECT * FROM ".$query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")");
               }else{
                  $sql_cari =  $DB2->query("SELECT * FROM ".$query." WHERE ".$fwhere." AND (".$cari.")");
               }
               $sql_filter_count = $sql_cari->num_rows();
         }else{
               if(!empty($iswhere)){
                  $sql_filter = $DB2->query("SELECT * FROM ".$tables." WHERE $iswhere AND ".$fwhere);
               }else{
                  $sql_filter = $DB2->query("SELECT * FROM ".$tables." WHERE ".$fwhere);
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
         $DB2->Close();
         return json_encode($callback); // Convert array $callback ke json
      }
      
      function get_tables_query($query,$cari,$where,$iswhere)
      {
          $DB2 = $this->load->database('db_central_user', TRUE);
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
                  $sql = $DB2->query($query." WHERE  $iswhere AND ".$fwhere);
                  
              }else{
                  $sql = $DB2->query($query." WHERE ".$fwhere);
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
                  $sql_data = $DB2->query($query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }else{
                  $sql_data = $DB2->query($query." WHERE ".$fwhere." AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }
              
              if(isset($search))
              {
                  if(!empty($iswhere))
                  {
                      $sql_cari =  $DB2->query($query." WHERE $iswhere AND ".$fwhere." AND (".$cari.")");
                  }else{
                      $sql_cari =  $DB2->query($query." WHERE ".$fwhere." AND (".$cari.")");
                  }
                  $sql_filter_count = $sql_cari->num_rows();
              }else{
                  if(!empty($iswhere))
                  {
                      $sql_filter = $DB2->query($query." WHERE $iswhere AND ".$fwhere);
                  }else{
                      $sql_filter = $DB2->query($query." WHERE ".$fwhere);
                  }
                  $sql_filter_count = $sql_filter->num_rows();
              }
              $data = $sql_data->result_array();

          }else{

              if(!empty($iswhere))
              {
                  $sql = $DB2->query($query." WHERE  $iswhere ");
              }else{
                  $sql = $DB2->query($query);
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
                  $sql_data = $DB2->query($query." WHERE $iswhere AND (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }else{
                  $sql_data = $DB2->query($query." WHERE (".$cari.")".$order." LIMIT ".$limit." OFFSET ".$start);
              }

              if(isset($search))
              {
                  if(!empty($iswhere))
                  {     
                      $sql_cari =  $DB2->query($query." WHERE $iswhere AND (".$cari.")");
                  }else{
                      $sql_cari =  $DB2->query($query." WHERE (".$cari.")");
                  }
                  $sql_filter_count = $sql_cari->num_rows();
              }else{
                  if(!empty($iswhere))
                  {
                      $sql_filter = $DB2->query($query." WHERE $iswhere");
                  }else{
                      $sql_filter = $DB2->query($query);
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
          $DB2->Close();
          return json_encode($callback); // Convert array $callback ke json
      }     


   public function Max_data($mdate,$table)
   {
      $DB2 = $this->load->database('db_central_user', TRUE);
      $DB2->select_max('hdrid');     
      $DB2->like('hdrid', $mdate);
      $query = $DB2->get($table)->row();    
      $DB2->Close();  
      return  $query;

   }
    
   function Input_Data($data,$table){
      $DB2 = $this->load->database('db_central_user', TRUE);
      $DB2->insert($table,$data);
      $DB2->Close();
      
   }

   function Update_Data($where,$data,$table){
      $DB2 = $this->load->database('db_central_user', TRUE);
      $DB2->where($where);
      $DB2->update($table,$data);
      $DB2->Close();
   }
      
   function Delete_Data($where,$table){
      $DB2 = $this->load->database('db_central_user', TRUE);
      $DB2->where($where);
      $DB2->delete($table);
      $DB2->Close();
   }

   function ajax_getbyhdrid($hdrid,$table){    
      $DB2 = $this->load->database('db_central_user', TRUE);  
      $query=$DB2->get_where($table, array('hdrid' => $hdrid))->row();
      $DB2->Close();
      return $query;
   }
  
   
}



