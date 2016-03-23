<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('admin','',TRUE);
   $this->load->library('session');           
   $this->load->helper(array('form', 'url'));
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     //$this->load->view('template/_template');
     $this->load->view('admin/_login');       
   }
   else
   {
    $username = $this->input->post('username');
    $password = $this->input->post('password'); 
    $newdata = array('username'  => $username,
        'password'  => $password,       
        'login' => true);
    $this->session->set_userdata($newdata);
    $this->load->view('template/_template');
    $this->load->view('template/_home');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->admin->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'admin_no' => $row->admin_no,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>