<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_print extends CI_Model
{
   // Print Settlement

   /// @see ajax_getbyhdrid()
   /// @note untuk mencari hdrid
   /// @attention
   function ajax_getbyhdrid($hdrid, $table)
   {
      return $this->db->get_where($table, array('hdrid' => $hdrid));
   }


   /// @see ajax_getbyproblemid()
   /// @note fungsi untuk problem id
   /// @attention
   function ajax_getbyproblemid($app, $table)
   {

      return $this->db->get_where($table, array('hdrid' => $app));
   }



   /// @see getApproval()
   /// @note untuk approval pada dncn
   /// @attention
   public function getApproval($hdrid_pc)
   {
      $this->db->where('hdrid', $hdrid_pc);
      $query = $this->db->get('tb_approval');
      $result = $query->result();
      return $result;

   }

   /// @see getApproval1()
   /// @note untuk approval pada dncn
   /// @attention
   public function getApproval1($hdrid)
   {
      $this->db->where('hdrid', $hdrid);
      $query = $this->db->get('tb_approval');
      $result = $query->result();
      return $result;

   }

   /// @see getVar1()
   /// @note untuk mendapatkan varible problem name
   /// @attention
   public function getVar1($table, $app)
   {
      return $this->db->get_where($table, array('problem_name' => $app));
   }

   /// @see getname_approver()
   /// @note fungsi untuk siapa saja approver
   /// @attention
   public function getname_aprover($hdrid)
   {
       
      // $query = $this->db->query("select top 1 problem_name from tb_input_problem where hdrid='$hdrid' and problem_name='internal' ");

      // if ($query->num_rows() > 0) {    

      //     $query = $this->db->query("Select top 1 name from tb_approval where hdrid='$hdrid' and position_name='Responsible Approver 2' ");
      //     return $query->row();

      // }else{

      //     $query = $this->db->query("Select top 1 name from tb_approval where hdrid='$hdrid' and position_name='Inisiator Approver' ");
      //     return $query->row();

      // }

       $query = $this->db->query("select top 1 name from tb_approval where hdrid='$hdrid' and position_code='2' ");
       return $query->row();
      
   }

   /// @see cari_tb_approver()
   /// @note untuk mencari tb_approver
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

   // /// @see count_row()
   // /// @note untuk menghitung row pada approval
   // /// @attention
   // function count_row($hdrid)
   // {  
   //    $this->db->where('hdrid ', $hdrid);
   //    $query = $this->db->get('tb_approval');
   //    return $query->num_rows();
   //       }


   /// @see count_row()
   /// @note untuk menghitung row pada approval
   /// @attention
   function count_row($hdrid)
   {  
      $this->db->where('hdrid ', $hdrid);
      $query = $this->db->get('tb_cicilan_dn');
      return $query->num_rows();
         }


   /// @see total_approval()
   /// @note untuk menghitung row pada approval
   /// @attention
   function total_approval($hdrid)
   {  

      $this->db->where('hdrid ', $hdrid);
      $query = $this->db->get('tb_approval');
      return $query->num_rows();
         
   }

   /// @see ajax_get_cicilan()
   /// @note Ambil list cicilan
   /// @attention
   function ajax_get_cicilan($hdrid,$table){     

      $query=$this->db->get_where($table, array('hdrid' => $hdrid));   
      return $query->result();               // Untuk mengeksekusi dan mengambil data hasil query
      
  
     }

   
}
