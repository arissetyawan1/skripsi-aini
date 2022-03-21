<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Dashboard.php");
/**
 * 
 */
class Penjualan extends Dashboard
{
	private $default = 'penjualan';
	public function index()
	{
		$data['views'] = $this->default;
		$data['name'] = 'index';
		$this->template($data);

	}
	public function blabla()
	{
		$data['judul']='Data Penjualan';
		$this->load->view('templates/header', $data);
		$this->load->view('barang/index');
		$this->load->view('templates/footer');
	}
}