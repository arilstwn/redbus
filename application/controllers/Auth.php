<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Auth extends CI_Controller {
 //function constructor unutk memanggil model library dan helper
 public function __construct()
 {
     parent::__construct();
     $this->load->model('m_model');
     $this->load->helper('my_helper');
     $this->load->library('email');
     $this->load->library('session');
     $this->load->library('form_validation');
 }

 public function login()
 {
    $this->load->view('auth/login');
 }

 public function register()
 {
    $this->load->view('auth/register');
 }

}