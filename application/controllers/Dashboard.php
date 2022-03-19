<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct()
    {
        # code...
		parent::__construct();
        $this->load->model('BarangModels');
    }

    public function template($menu)
    
    {
		$menu["title"] = "Dashboard";
        $this->load->view('templates/header', $menu);
        $this->load->view('templates/nav_menu');
        $this->load->view('templates/side_bar', $menu);
        $this->load->view('templates/footer');
    }

    public function index()
    {
        
        $this->template(['Dashboard']);
    }
}

?>