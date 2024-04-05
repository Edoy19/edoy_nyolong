 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_email_v2 extends CI_Model {


   /// @see cari_tb_approver()
   /// @note Cari next approver
   /// @attention pilih data yg paling atas dengan kondisi hdrid sama,date approve null order by postion
    function cari_next_approval($hdrid)
    {

        $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc");
        if ($query->num_rows() > 0) {
            return $query->row();
        }else{

            $query = (object) array('name'=>'not found','position_code'=>'not found','nik'=>'not found');
            return $query;
        }

    }

    /// @see cari_requester()
    /// @note Cari user/requester form
    /// @attention Mencari requester dengan menyamakan column nik
    function cari_requester($nik)
    {

        $query = $this->db->query("select top 1 * from tb_superior where nik='$nik'");
        if ($query->num_rows() > 0) {
            return $query->row();
        }else{
            $query = (object) array('name'=>'not found','position_code'=>'not found','nik'=>'not found');
            return $query;
        }

    }

   /// @see Update_Data()
   /// @note Update data
   /// @attention Update table dengan data,table,kondisi sesuai isi parameter
    function Update_Data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }



}






