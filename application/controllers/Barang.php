<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Dashboard.php");
/**
 * 
 */
class Barang extends Dashboard
{
	private $default = 'barang';
	public function index()
	{
		$data['views'] = $this->default;
		$data['name'] = 'index';
		$this->template($data);

	}
	public function blabla()
	{
		$data['judul']='Daftar Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('barang/index');
		$this->load->view('templates/footer');
	}
}