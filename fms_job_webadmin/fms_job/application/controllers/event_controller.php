<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('event_model');   
   $this->load->model('company_model');

 }

 function index()
 {
 	$this->load->view('template/_template');
 	$this->load->view('event/_form'); 	
 }
 function addevent()
 {
	$event_name = $_POST["event_name"];
	$event_location = $_POST["event_location"];
	$date_from = $_POST["date_from"];
	$date_to = $_POST["date_to"];
	$this->event_model->addevent($event_name,$event_location,$date_from,$date_to);
	
 }
 function addevent_time()
{

	$event_name = $_POST["event_name"];
	$company_name = $_POST["company_name"];
	$location_name = $_POST["location_name"];
		
	$this->event_model->addEventTime($event_name,$company_name,$location_name,$booth_position);

	redirect('event_controller/list_event');
	
}
function event_time_form()
 {
 	$this->load->view('template/_template');
 	$this->load->view('event/_form_time');
 	//$this->load->view('event/_list');
 }
 function getEventID()
 {
	$event_no = $this->uri->segment(3, 0);
	$result['list']=$this->event_model->getEventIDModel($event_no);
	$this->load->view('template/_template');
	$this->load->view('event/_edit',$result);
	
}
function getIDEventTime()
 {
	$id_event_time = $this->uri->segment(3, 0);
	$result['list']=$this->event_model->getEvent_time($id_event_time);
	$this->load->view('template/_template');
	$this->load->view('event/_edit_time',$result);
	
}
function list_event()
{
	$this->load->view('template/_template');
	$this->load->view('event/_list');
}
function list_event_master()
{
	$this->load->view('template/_template');
	$this->load->view('event/_list_master');
}
function updateEvent()
{
	$event_no = $this->uri->segment(3, 0);
	$event_name = $_POST["event_name"];
	$event_location = $_POST['event_location'];
	$date_from = $_POST["date_from"];
	$date_to = $_POST["date_to"];
	
	$this->event_model->updateEventModel($event_no,$event_name,$event_location,$date_from,$date_to);
}
function deleteEvent($event_no)
{		
	$event_no = $this->input->post('event_no');
	$sql = "DELETE FROM tb_event_time_master
			WHERE $event_no = '".$event_no."' ";

	$query = $this->db->query($sql);
	
	redirect('event_controller/list_event_master'); 
}
function deleteEventTime($id_event_time)
{		
	$this->db->where('id_event_time', $id_event_time);
	$this->db->delete('tb_event_time'); 
	redirect('event_controller/list_event'); 
}
}

?>