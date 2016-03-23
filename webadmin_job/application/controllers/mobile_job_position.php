<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_job_position extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->database();
   $this->load->model('job_model'); 
}


 function job_position_list_major()
 {
    $sql = "SELECT * FROM tb_event_time_master tetm
            LEFT JOIN tb_event_time tet ON tet.event_no = tetm.event_no
            LEFT JOIN tb_job_position tjp ON tjp.id_company = tet.id_company
            LEFT JOIN tb_job tj ON tj.id_job = tjp.id_job
            LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major      
            LEFT JOIN tb_company tc ON tc.id_company = tet.id_company       
            WHERE tetm.event_no = (SELECT MAX(tetm.event_no) FROM tb_event_time_master tetm)
            GROUP BY tjp.id_major "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );

 }
 function job_position_by_major ()
 {   

    $id_major = $this->input->post('id_major');

    $sql = "SELECT * FROM tb_event_time_master tetm
            LEFT JOIN tb_event_time tet ON tet.event_no = tetm.event_no
            LEFT JOIN tb_job_position tjp ON tjp.id_company = tet.id_company
            LEFT JOIN tb_job tj ON tj.id_job = tjp.id_job
            LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major
            LEFT JOIN tb_company tc ON tc.id_company = tet.id_company            
            WHERE tetm.event_no = (SELECT MAX(tetm.event_no) FROM tb_event_time_master tetm)
            AND tjp.id_major = ".$id_major." "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );

 }
 function job_position_list_company ()
 {
    $sql = "SELECT * FROM tb_event_time_master tetm
            LEFT JOIN tb_event_time tet ON tet.event_no = tetm.event_no
            LEFT JOIN tb_job_position tjp ON tjp.id_company = tet.id_company
            LEFT JOIN tb_job tj ON tj.id_job = tjp.id_job
            LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major
            LEFT JOIN tb_company tc ON tc.id_company = tet.id_company
            WHERE tetm.event_no = (SELECT MAX(tetm.event_no) FROM tb_event_time_master tetm)
            GROUP BY tjp.id_company "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );
 }
  function job_position_by_company ()
 {
    
    $id_company = $this->input->post('id_company');    

    $sql = "SELECT * FROM tb_event_time_master tetm
            LEFT JOIN tb_event_time tet ON tet.event_no = tetm.event_no
            LEFT JOIN tb_job_position tjp ON tjp.id_company = tet.id_company
            LEFT JOIN tb_job tj ON tj.id_job = tjp.id_job
            LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major
            LEFT JOIN tb_company tc ON tc.id_company = tet.id_company            
            WHERE tetm.event_no = (SELECT MAX(tetm.event_no) FROM tb_event_time_master tetm)
            AND tjp.id_company = ".$id_company." "; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );

 }
 function job_position_list_all ()
 {
    
    $id_job_position_main = $this->input->post('id_job_position_main');    

    $sql = "SELECT * FROM tb_event_time_master tetm
            LEFT JOIN tb_event_time tet ON tet.event_no = tetm.event_no
            LEFT JOIN tb_job_position tjp ON tjp.id_company = tet.id_company
            LEFT JOIN tb_job tj ON tj.id_job = tjp.id_job
            LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major
            LEFT JOIN tb_company tc ON tc.id_company = tet.id_company            
            WHERE tetm.event_no = (SELECT MAX(tetm.event_no) FROM tb_event_time_master tetm)"; 

        $query = $this->db->query($sql, array());

    //add the header here
    header('Content-Type: application/json');
    echo json_encode( $query->result_array() );

 }

}

?>