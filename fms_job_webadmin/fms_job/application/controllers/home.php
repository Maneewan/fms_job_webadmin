<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
 	$this->load->view('template/_template');
 	$this->load->view('template/_home');

 }
 /*function welcome()
 {
 	$this->load->view('template/_template');
 }*/
}