<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userrequest extends CI_Model {
   
    /// @see Tampil_Data()
   /// @note 
   /// @attention
   public function Tampil_Data()
   {
      return $this->db->get('tb_device_bring_out');
   }

    /// @see Tampil_Data_Details()
   /// @note 
   /// @attention
   public function Tampil_Data_Details($classID=NUll)
   {
      $Query=$this->db->get_where('tb_class',array('kodeclass'=>$classID))->row();
      return  $Query;
   }
     
    /// @see Input_Data()
   /// @note 
   /// @attention
   function Input_Data($data,$table){
      $this->db->insert($table,$data);
   }

    /// @see Delete_class()
   /// @note 
   /// @attention
   function Delete_class($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
   }

    /// @see Edit_class()
   /// @note 
   /// @attention
   function Edit_class($where,$table){
      return $this->db->get_where($table,$where);      
   }

    /// @see Update_class()
   /// @note 
   /// @attention
   function Update_class($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
   }

    /// @see Search_class()
   /// @note 
   /// @attention
   public function Search_class($search,$table)
   {
      $this->db->select('*');
      $this->db->from($table);
      $this->db->like('kodeclass',$search);
      $this->db->or_like('namaclass',$search);     
      return $this->db->get()->result(); 
      
   }
   
}



