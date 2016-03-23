<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   	$this->load->library('session');						
	$this->load->helper(array('form', 'url'));
 }

 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('admin/_login');
 }
 function displayView($login)
 {		
   $this->load->view('admin/_login'.$login);
 }
 function createSession()
 {
	$username = $this->input->post('username');
	$password = $this->input->post('password');	
	$newdata = array('username'  => $username,
				'password'	=> $password,				
				'login'	=> true
				);
	$this->session->set_userdata($newdata);
	$this->load->view('template/_template');
	//$this->load->view('home');
 }
  function destroySession()
  {
	$array_items = array('username','password','login');
	$this->session->unset_userdata($array_items);
	$this->load->view('admin/_login');
 }
}

?>