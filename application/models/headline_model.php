<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Headline_model extends CI_Model{
    public function get_all_headline(){
        return $this->db->get('headline')->result_array();
    }

    public function insert_headline($data){
        return $this->db->insert('headline', $data);
    }

    public function delete($idheadline){
        return $this->db->delete('headline', ['idheadline'=>$idheadline]);
    }

    public function get_headline_by_id($idheadline) {
        return $this->db->get_where('headline', array('idheadline' => $idheadline))->row_array();
    }
    
    public function update_headline($idheadline, $data) {
        $this->db->where('idheadline', $idheadline);
        return $this->db->update('headline', $data);
    }

}