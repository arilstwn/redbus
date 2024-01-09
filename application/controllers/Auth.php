<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
		$this->load->model('m_model');
	}

 public function login()
 {
    $this->load->view('auth/login');
    
 }
 public function aksi_login()
 {
     $email = $this->input->post('email', true);
     $password = $this->input->post('password', true);
     $data = ['email' => $email,];
     $query = $this->m_model->getwhere('admin', $data);
     $result = $query->row_array();
 
     if (!empty($result) && md5($password) === $result['password']) {
         $data = [
             'logged_in' => true,
             'email'     => $result['email'],
             'username'  => $result['username'],
             'role'      => $result['role'],
             'id'        => $result['id'],
         ];
         $this->session->set_userdata($data);
         if ($this->session->userdata('role') == 'admin') {
             redirect(base_url('admin'));
         }elseif ($this->session->userdata('role') == 'pelanggan') {
         redirect(base_url('pelanggan'))  ;
         } else {
             redirect(base_url('auth/login'));
         }
     } else {
         redirect(base_url('admin/index'));
     }
 }

 public function register()
 {
    $this->load->view('auth/register');
 }
 public function aksi_register()
  {
    $data = [
       
        'username'      => $this->input->post('username'),
        'email'         => $this->input->post('email'),
        'password'      => $this->input->post('password'),
        'role'      => 'pelanggan',
        
    ];

    $this->m_model->register( $data);
    redirect(base_url('auth/login'));
  }







 public function forgot_password()
 {
    $this->load->view('auth/forgot_password');
 }

}