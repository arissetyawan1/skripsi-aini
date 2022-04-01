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

	public function tambah()
	{
		$data['views'] = $this->default;
		$data['name'] = 'tambah';
		$this->form_validation->set_rules('nama', 'Nama Barang', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->template($data);
		} else {
			echo 'betul!';
		}
	}

}