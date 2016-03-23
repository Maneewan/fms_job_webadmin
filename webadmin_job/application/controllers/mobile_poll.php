<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_poll extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('poll_model'); 
   $this->load->database();
}

function insert_poll()
{
  $score1 = $this->input->post('score1');
  $score2 = $this->input->post('score2');
  $score3 = $this->input->post('score3');
  $score4 = $this->input->post('score4');
  $score5 = $this->input->post('score5');

$sql = "SELECT MAX(tetm.event_no) AS max FROM tb_event_time_master tetm ";

        $query = $this->db->query($sql, array());

		$this->db->set('event_no', $query->result_array()[0]['max']);
        $this->db->set('event', $score1);
        $this->db->set('facility',$score2);        
        $this->db->set('location', $score3);
        $this->db->set('communication', $score4);
        $this->db->set('company', $score5);

        $this->db->insert('tb_poll');

        echo json_encode("Insert_Success");
}

}