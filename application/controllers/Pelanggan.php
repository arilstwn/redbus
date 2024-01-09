<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
      
	}
    public function dasboard()
    {
        $this->load->view('pelanggan/dasboard');
    }

    public function index()
    {
        $this->load->view('pelanggan/index');
    }
}