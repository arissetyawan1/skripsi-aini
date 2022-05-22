<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrediksiModels extends CI_Model{
    public function getAll()
    {
       $query = $this->db->select("*")->from('prediksi')->where('prediksi.tahun', 2022)->get();
       return $query->result_array();
    }

    public function tambahData($data)
    {
        $this->db->insert_batch('prediksi', $data);
    }
}