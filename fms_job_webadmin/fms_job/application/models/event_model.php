<?php
class Event_Model extends CI_Model 
{
	function __construct()
{
    parent :: __construct();    
    $this->load->database();
}
    function addevent($event_name,$event_location,$date_from,$date_to)
    {
        $this->db->set('event_name', $event_name);
        $this->db->set('event_location', $event_location);
        $this->db->set('date_from', $date_from);
        $this->db->set('date_to', $date_to);
        $this->db->insert('tb_event_time_master');

        redirect('event_controller/list_event','refresh');
    }
    function addEventTime($event_name,$company_name,$location_name)
    {
        foreach ($company_name as $key => $value) 
        {
            $this->db->set('event_no', $event_name);
            $this->db->set('id_company', $value);
            $this->db->set('location_name', $location_name);
            $this->db->insert('tb_event_time');
        }        
    }
    function getEvent()
    {
        $query = $this->db->get('tb_event_time_master');
        return $query->result_array();
    } 
    function getEventIDModel($event_no)
    {
                $query = $this->db->select('*')
                ->where('event_no', $event_no)
                ->get('tb_event_time_master');
                return $query->result();
    }
    function getEvent_time()
    {
        $sql = "SELECT * FROM tb_event_time_master tj
            LEFT JOIN tb_event_time tjp ON tjp.event_no = tj.event_no
            LEFT JOIN tb_company tc ON tc.id_company = tjp.id_company"; 

        $query = $this->db->query($sql, array());

        //$query = $this->db->get('tb_job_position');        
        return $query->result_array();
    }
    function updateEventModel($event_no,$event_name,$event_location,$date_from,$date_to)
    {
        $this->db->set('event_name', $event_name);
        $this->db->set('event_location', $event_location);
        $this->db->set('date_from', $date_from);
        $this->db->set('date_to', $date_to);
        
        $this->db->where('event_no', $event_no);
        if($this->db->update('tb_event_time_master', $data)){ 
            redirect('event_controller/list_event_master');
        }else{
            redirect('event_controller/updateevent','refresh');
        }
    }
    function delEventModel($event_no)
    {
        $this->db->where('$event_no;', $event_no);
        if($this->db->delete('tb_event_time_master'))
        {
            redirect('event_controller/list_event_master');
        }
    }
    function deleteEventTime($id_event_time)
    {
        $this->db->where('id_event_time', $id_event_time);
        if($this->db->delete('tb_event_time'))
        {
            redirect('event_controller/list_event');            
        }
    }
    
}