<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Dashboard.php");
/**
 * 
 */
class Laporan extends Dashboard
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PrediksiModels');
		$this->load->library('form_validation');
	}
	private $default = 'laporan';
	public function index()
	{
		$data['views'] = $this->default;
		$data['name'] = 'index';
		$data['total'] = $this->PrediksiModels->getAll();
		$this->template($data);

	}
	public function blabla()
	{
		$data['judul']='Laporan barang';
		$this->load->view('templates/header', $data);
		$this->load->view('laporan/index');
		$this->load->view('templates/footer');
	}
}