<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Poll_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('poll_model');
   $this->load->model('event_model');
   $this->load->database();
 }

 function index()
 {
 	$this->load->view('template/_template'); 
 	$this->load->view('poll_score/_graph');		
 }
 function add_form()
 {
  $this->load->view('template/_template'); 
  $this->load->view('poll_score/_create_poll');
 }
 function addPoll_event()
 {
  $event_name = $_POST["event_name"];
  $this->poll_model->addEvent($event_name);

  $this->load->view('template/_template');
  redirect('Poll_controller');
 }
 function getPollName()
 {
     $query = $this->db->get('tb_poll');
        return $query->result_array();
 }
  
function getPoll()
{
    $ypoll_no = array();
    $xevent = array();
    $xlocation = array();
    $xfacility = array();
    $xcommunication = array();
    $xcompany = array();

    $event_no = $this->input->post('event_name');

    $sql ="SELECT AVG(event) AS event, AVG(facility) AS facility, AVG(location) AS location, AVG(communication) AS communication, AVG(company) AS company 
    FROM tb_poll tp LEFT JOIN tb_event_time_master tetm ON tp.event_no = tetm.event_no 
    WHERE tp.event_no = ".$event_no." ";

    $query = $this->db->query($sql, array());           

	  echo json_encode($query->result_array());  
}
/*function getPoll_ID()
{
    $ypoll_no = array();
    $xevent = array();
    $xlocation = array();
    $xfacility = array();
    $xcommunication = array();
    $xcompany = array();    

    $sql ="SELECT AVG(event) AS event, AVG(facility) AS facility, AVG(location) AS location, AVG(communication) AS communication, AVG(company) AS company 
    FROM tb_poll tp LEFT JOIN tb_event_time_master tetm ON tp.event_no = tetm.event_no 
    WHERE tetm.event_no = (SELECT MAX(tetm.event_no) FROM tb_event_time_master tetm)";

    $query = $this->db->query($sql, array());           

  echo json_encode($query->result_array());
}*/
}