<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('job_model');
   $this->load->model('major_model');
   $this->load->model('company_model');
 }

 function index()
 {
 	$this->load->view('template/_template');
 	$this->load->view('job/_form'); 
 	//$this->load->view('job/_list_job');	

 }
 function job_position()
 {
 	$this->load->view('template/_template');
 	$this->load->view('job/_form_position');
 }
 function list_job()
 {
 	$this->load->view('template/_template');
 	$this->load->view('job/_list_job');
 }
  function list_position()
 {
 	$this->load->view('template/_template');
 	$this->load->view('job/_list_position');
 }
  function addJob()
 {
	$job_name = $_POST["job_name"];
	$this->job_model->addJob($job_name);
 }
 function addJob_Position()
{
	$job_name = $_POST["job_name"];
	$major_name = $_POST["major_name"];
	$company_name = $_POST["company_name"];
	$amount = $_POST["amount"];
	$work_place = $_POST["work_place"];
	$salary = $_POST["salary"];
	$sex = $_POST["sex"];
	$age = $_POST["age"];
	$education = $_POST["education"];
	$skill = $_POST["skill"];
	$detail = $_POST["detail"];

	$this->job_model->addJobposition($job_name,$major_name,$company_name,$amount,$work_place,$salary,$sex,
		$age,$education,$skill,$detail);



}
function getJobID()
 {
	$id_job = $this->uri->segment(3, 0);
	$result['list']=$this->job_model->getJobIDModel($id_job);
	$this->load->view('template/_template');
	$this->load->view('job/_edit',$result);
}
function getJobPositionID()
 {
	$id_job_position = $this->uri->segment(3, 0);
	$result['list']=$this->job_model->getJobPositionID($id_job_position);
/*	echo "job_name : ".$result['list'][0]->job_name."<br>";
	foreach ($result['list'] as $key => $value) {
		echo "major_name : ".$value->major_name."<br>";
	}*/
	$this->load->view('template/_template');
	$this->load->view('job/_edit_position',$result);
}
function updateJobPosition()
{
	$id_job_position = $this->uri->segment(3, 0);	
	$job_name = $_POST["job_name"];
	$major_name = $_POST["major_name"];
	$company_name = $_POST["company_name"];
	$amount = $_POST["amount"];
	$work_place = $_POST["work_place"];
	$salary = $_POST["salary"];
	$sex = $_POST["sex"];
	$age = $_POST["age"];
	$education = $_POST["education"];
	$skill = $_POST["skill"];
	$detail = $_POST["detail"];
	$this->job_model->updatePositionModel($id_job_position,$job_name,$major_name,$company_name,$amount,$work_place,$salary,$sex,
		$age,$education,$skill,$detail);
}
function deleteJob($id_job)
{		
	$this->db->where('id_job', $id_job);
	$this->db->delete('tb_job'); 
	redirect('job_controller/list_job'); 
}
function deleteJobPosition($id_job_position)
{		
	$this->db->where('id_job_position', $id_job_position);
	$this->db->delete('tb_job_position'); 
	redirect('job_controller/list_position'); 
}
}
?>