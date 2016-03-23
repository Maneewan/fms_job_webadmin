<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_News extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('news_model'); 
   $this->load->model('event_model');
}
function event_name()
{
	 $sql = "SELECT MAX(event_name) FROM tb_event_time_master"; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );
}

function list_news_topic()
{
	 $sql = "SELECT * FROM tb_news ORDER BY id_news DESC "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );
}
function get_news()
{
  $id_news = $this->input->post('id_news');

  $sql = "SELECT * FROM tb_news WHERE id_news = ".$id_news."  "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );
}
}