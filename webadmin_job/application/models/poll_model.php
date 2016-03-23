<?php
class Poll_Model extends CI_Model 
{
    function __construct()
{
    parent :: __construct(); 

    $this->load->database();
}

function addEvent($event_name)
{
    $this->db->set('event_no', $event_name);
    $this->db->insert('tb_poll');
}
 
function getPollModel()
{
    $ypoll_no = array();
    $xevent = array();
    $xlocation = array();
    $xfacility = array();
    $xcommunication = array();
    $xcompany = array();

    $sql ="SELECT AVG(event),AVG(facility),AVG(location),AVG(communication),AVG(company)
    FROM tb_poll";
    $query = $this->db->query($sql, array());           
    return $query->result_array();

    $result =   mysql_query($sql);while ($row=mysql_fetch_array($result)) {
        array_push($ypoll_no, $row['poll_no']);
        array_push($xevent, $row['event']);
        array_push($xfacility, $row['facility']);
        array_push($xlocation, $row['location']);
        array_push($xcommunication, $row['communication']);
        array_push($xcompany, $row['company']);
    }   
}
function getPollName()
{
    $query = $this->db->get('tb_poll');
        return $query->result_array();
}
}