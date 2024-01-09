<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
        $this->load->helper('my_helper');
      
	}

    public function dasboard()
    {
        $this->load->view('admin/dasboard');
    }  
    public function index()
    {
        $this->load->view('admin/index');
    }  


}
