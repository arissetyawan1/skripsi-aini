<?php

/**
 * 
 */
class Barang extends CI_Controller
{
	
	public function index()
	{
		$data['judul']='Daftar Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('barang/index');
		$this->load->view('templates/footer');
	}
}