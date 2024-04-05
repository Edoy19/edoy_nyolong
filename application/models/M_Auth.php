<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Auth extends CI_Model {
    
    /// @see get()
    /// @note
    /// @attention
    public function get($username){
        $this->db->where('user_name', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('sd_sec_user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    
}