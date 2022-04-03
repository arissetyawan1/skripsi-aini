<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Dashboard.php");
/**
 * 
 */
class Barang extends Dashboard
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BarangModels');
		$this->load->library('form_validation');
	}
	
	private $default = 'barang';
	public function index()
	{
		$data['views'] = $this->default;
		$data['name'] = 'index';
		$data['barang'] = $this->BarangModels->getAllBarang();
		$this->template($data);

	}

	public function tambahData()
	{
		$periode = $this->input->post('periode', true);
		$total_permintaan = $this->input->post('total_permintaan', true);

		$data = array(
			'periode' => $periode,
			'total_permintaan' => $total_permintaan
		);
		$this->BarangModels->tambahData($data);
		$this->session->set_flashdata('flashMessage', 'Data berhail ditambahkan!');
		redirect('home');

		$data['views'] = $this->default;
		$data['name'] = 'tambah';
		// $this->form_validation->set_rules('permintaan', 'Permintaan', 'required|numeric');
		// if($this->form_validation->run() == FALSE)
		// {
		// 	$this->template($data);
		// } else {

		// }
	}

}