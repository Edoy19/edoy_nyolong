<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Role_Access extends CI_Model {

    /// @see get_tables()
   /// @note 
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


    /// @see get_tables_where()
   /// @note 
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
   /// @note 
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
   /// @note 
   /// @attention 
    public function Max_data($mdate,$table)
    {
        $this->db->select_max('hdrid');     
        $this->db->like('hdrid', $mdate);
        $query = $this->db->get($table);      
        return  $query;

    }
        
    /// @see Input_Data()
   /// @note 
   /// @attention 
    function Input_Data($data,$table){
        $this->db->insert($table,$data);
        
    }

    /// @see Update_Data()
   /// @note 
   /// @attention 
    function Update_Data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
        
    /// @see Delete_Data()
   /// @note 
   /// @attention 
    function Delete_Data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    /// @see ajax_getbyhdrid()
   /// @note 
   /// @attention 
    function ajax_getbyhdrid($hdrid,$table){      
        return $this->db->get_where($table, array('hdrid' => $hdrid));
    }

    /// @see get_tb_menu()
   /// @note 
   /// @attention 
    Public Function get_tb_menu()
    {
        $Query = $this->db->query("SELECT * FROM a_menu ORDER BY menu_id ASC");
        return  $Query->result();
                
    }

    /// @see get_tb_role()
   /// @note 
   /// @attention 
    Public Function get_tb_role()
    {
        $Query = $this->db->query("SELECT * FROM a_user_role ORDER BY role_id ASC");
        return  $Query->result();
                
    }



    }



