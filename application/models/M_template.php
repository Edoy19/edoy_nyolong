<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_template extends CI_Model
{

     /// @see Input_Data()
   /// @note 
   /// @attention
    function Input_Data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    
    /** -----------------------------Insert Data Dari Table Lain Berdasarkan Kondisi-----------------------------------**/
    function Input_Data2($data, $group_id, $table)
    {
        $query = $this->db->query("INSERT INTO tb_approval
        (transaction_date
        ,nik
        ,name
        ,office_email
        ,department_code
        ,department_name
        ,position_code
        ,position_name
        ,problem_id
        )
        SELECT transaction_date
            ,nik
            ,name
            ,office_email
            ,department_code
            ,department_name
            ,position_code
            ,position_name
            ,'$data'
        FROM tb_setting_approval
        WHERE group_id = '$group_id'");

        return $query;
    }
    /** -----------------------------Akhir Insert Data Dari Table Lain Berdasarkan Kondisi-----------------------------------**/


    /** -----------------------------Tampilkan Data Dari Table Lain-----------------------------------**/

     /// @see tampil_internal()
   /// @note 
   /// @attention
    public function tampil_internal()
    {
        $query =  $this->db->get('tb_group_product')->result();
        return $query;
    }

     /// @see tampil_group_product()
   /// @note 
   /// @attention
    public function tampil_group_product()
    {
        $query =  $this->db->get('tb_group_product')->result();
        return $query;
    }

     /// @see tampil_product()
   /// @note 
   /// @attention
    public function tampil_product()
    {
        $query =  $this->db->get('tb_product')->result();
        return $query;
    }

     /// @see tampil_customer()
   /// @note 
   /// @attention
    public function tampil_customer()
    {
        $query =  $this->db->get('tb_customer_name')->result();
        return $query;
    }

     /// @see tampil_source_information()
   /// @note 
   /// @attention
    public function tampil_source_information()
    {
        $query =  $this->db->get('tb_source_information')->result();
        return $query;
    }


     /// @see tampi_nik()
   /// @note 
   /// @attention
    public function tampi_nik()
    {
        $DB2 = $this->load->database('db_central_user', TRUE);
        $DB2->select('user_name,name,department_name');
        $query = $DB2->get('Tb_user_login')->result();
        $DB2->Close();
        return  $query;
    }

     
     /// @see get_product_by_id()
   /// @note 
   /// @attention
     public function get_product_by_id($product_id)
     {
         $this->db->select('report_no');
         $this->db->from('tb_product');
         $this->db->where('hdrid', $product_id);
         return $this->db->get()->row();
     }

    /** -----------------------------Akhir Tampilkan Data Dari Table Lain-----------------------------------**/


}
