<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_company extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('company_model');
 }

 function company_list_group()
 {
    $sql = "SELECT * FROM tb_company GROUP BY company_group"; 

        $query = $this->db->query($sql, array());

   //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result() );
 }
 function company_by_group()
 {
 	$company_group = $this->input->post('company_group');

    $sql = "SELECT * FROM  tb_company 
		WHERE company_group = '".$company_group."' "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );
 }
 function company_all()
 {
 	

    $sql = "SELECT * FROM tb_company WHERE id_company"; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );

 }
 function company_layout()
 {
    $sql = "SELECT com.id_company,com.company_logo,com.company_name,com.booth_position  
    FROM  tb_event_time_master etm
    LEFT JOIN tb_event_time et on et.event_no = etm.event_no
    LEFT JOIN tb_company com on com.id_company = et.id_company
    WHERE et.event_no = (SELECT max(event_no) FROM tb_event_time) ORDER by com.booth_position asc";

    $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );

 }
 function layout_detail()
 {
    $id_company = $this->input->post('id_company');

    $sql = "SELECT  com.company_name,com.company_group,j.job_name FROM tb_company com 
    LEFT JOIN tb_job_position jp on jp.id_company = com.id_company
    LEFT JOIN tb_job j on j.id_job = jp.id_job
    WHERE com.id_company = '".$id_company."' "; 

    $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );
 }

}

?>