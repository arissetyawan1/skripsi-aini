<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrediksiModels extends CI_Model{
    public function getAllBarang()
    {
       $query = $this->db->get('prediksi');
       return $query->result_array();
    }

    public function tambahData($data)
    {
        $this->db->insert_batch('prediksi', $data);
    }
}