<?php
class Job_model extends CI_Model 
{
	function __construct()
{
    parent :: __construct();    
    $this->load->database();    
}
    function addJob($job_name)
    {
        $this->db->set('job_name', $job_name);
        $this->db->insert('tb_job');

        redirect('job_controller/list_job','refresh');
    }
     function getJob()
    {
        $query = $this->db->get('tb_job');
        return $query->result_array();
    }
    function getJobIDModel($id_job)
    {
                $query = $this->db->select('*')
                ->where('id_job', $id_job)
                ->get('tb_job');
                return $query->result();
    }
    function getJobPositionID($id_job_position)
    {
                $sql = "SELECT * 
                    FROM tb_job_position tjp
                    LEFT JOIN tb_job tj ON tj.id_job = tjp.id_job
                    LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major
                    LEFT JOIN tb_company tc ON tc.id_company = tjp.id_major 
                    WHERE tjp.id_job_position = ?"; 
            $query = $this->db->query($sql, array($id_job_position));
            return $query->result();

    }
     function getJob_position()
    {
        $sql = "SELECT * FROM tb_job tj
            LEFT JOIN tb_job_position tjp ON tjp.id_job = tj.id_job
            LEFT JOIN tb_company tc ON tc.id_company = tjp.id_company
            LEFT JOIN tb_major tm ON tm.id_major = tjp.id_major "; 

        $query = $this->db->query($sql, array());

        //$query = $this->db->get('tb_job_position');        
        return $query->result_array();
    }

     function getCheckIdJobPositionLast()
    {
        $sql = "SELECT `id_job_position` FROM `tb_job_position` 
                ORDER BY `id_job_position` DESC LIMIT 1"; 
        $query = $this->db->query($sql, array());      
        
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            return 'nodata';
        }
    }

    function addJobposition($job_name,$major_name,$company_name,$amount,$work_place,$salary,$sex,
        $age,$education,$skill,$detail)
    {
        $id_job_position_last=$this->job_model->getCheckIdJobPositionLast();
        if($id_job_position_last != 'nodata'){
            $data = $id_job_position_last[0]->id_job_position;
            $text = str_replace('jp', '', $data);
            $text += 1;
            $text ='jp'.$text;
        }else{
            $text = 'jp1';
        }
            foreach ($major_name as $key => $value) {
        $this->db->set('id_job_position', $text);
        $this->db->set('id_job', $job_name);
        $this->db->set('id_major', $value);
        $this->db->set('id_company', $company_name);
        $this->db->set('amount', $amount);
        $this->db->set('work_place', $work_place);
        $this->db->set('salary', $salary);
        $this->db->set('sex', $sex);
        $this->db->set('age', $age);
        $this->db->set('education', $education);
        $this->db->set('skill', $skill);
        $this->db->set('detail', $detail);
        $this->db->insert('tb_job_position');
            }
        redirect('job_controller/list_position','refresh');
    }
    function updatePositionModel($id_job_position,$job_name,$major_name,$company_name,$amount,$work_place,$salary,$sex,
        $age,$education,$skill,$detail)
    {
        foreach ($major_name as $key => $value) {
        $this->db->set('id_job', $job_name);
        $this->db->set('id_major', $value);
        $this->db->set('id_company', $company_name);
        $this->db->set('amount', $amount);
        $this->db->set('work_place', $work_place);
        $this->db->set('salary', $salary);
        $this->db->set('sex', $sex);
        $this->db->set('age', $age);
        $this->db->set('education', $education);
        $this->db->set('skill', $skill);
        $this->db->set('detail', $detail);
        
        $this->db->where('id_job_position', $id_job_position);
        if($this->db->update('tb_job_position', $data)){ 
            redirect('job_controller/list_position');
        }else{
            redirect('job_controller/updatejobposition','refresh');
        }
    }
}
    function delJobModel($id_job)
    {
        $this->db->where('id_job', $id_job);
        if($this->db->delete('tb_job'))
        {
            redirect('job_controller');
            echo 'success';
        }
    }
    function delJobPosition($id_job_position)
    {
        $this->db->where('id_job_position', $id_job_position);
        if($this->db->delete('tb_job_position'))
        {
            redirect('job_controller');            
        }
    }
}