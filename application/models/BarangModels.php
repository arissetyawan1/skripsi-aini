<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangModels extends CI_Model{
    public function getAllBarang()
    {
       $query = $this->db->get('permintaan');
       return $query->result_array();
    }

    public function tambahData($data)
    {
        $this->db->insert('permintaan', $data);
    }
}