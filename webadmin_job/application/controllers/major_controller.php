<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Major_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('major_model');    
 }

 function index()
 {
 	$this->load->view('template/_template');
 	$this->load->view('major/_form');  		
 }
 function addmajor()
 {
	$major_name = $_POST["major_name"];
	$this->major_model->addmajor($major_name);	
 }
 function getMajorID()
 {
	$id_major = $this->uri->segment(3, 0);
	$result['list']=$this->major_model->getMajorIDModel($id_major);
	$this->load->view('template/_template');
	$this->load->view('major/_edit',$result);
	
}
function list_major()
{
	$this->load->view('template/_template');
	$this->load->view('major/_list');
}
function updateMajor()
{
	$id_major = $this->uri->segment(3, 0);
	$this->major_model->updateMajorModel($id_major);
}
function deleteMajor($id_major)
{		
	$this->db->where('id_major', $id_major);
        if($this->db->delete('tb_major'))
        {
            redirect('Major_controller/list_major');
        }
}
}

?>