<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    // Fungsi untuk menyimpan user baru ke dalam database
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

}
