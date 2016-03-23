<?php
class Major_Model extends CI_Model 
{
	function __construct()
{
    parent :: __construct();    
    $this->load->database();
}
    function addMajor($major_name)
    {
        $this->db->set('major_name', $major_name);
        $this->db->insert('tb_major');

        redirect('major_controller/list_major','refresh');
    }
    function getMajor()
    {
        $query = $this->db->get('tb_major');
        return $query->result_array();
    } 
    function getMajorIDModel($id_major)
    {
                $query = $this->db->select('*')
                ->where('id_major', $id_major)
                ->get('tb_major');
                return $query->result();
    }
    function updateMajorModel($id_major)
    {
        $major_name=$this->input->post('major_name');
        $data = array( 'major_name' => $major_name );

        $this->db->where('id_major', $id_major);
        if($this->db->update('tb_major', $data)){ 
            redirect('major_controller/list_major');
        }else{
            redirect('major_controller/updatemajor','refresh');
        }
    }
    function delMajorModel($id_major)
    {
        $this->db->where('id_major', $id_major);
        if($this->db->delete('tb_major'))
        {
            redirect('major_controller/list_major');
                   }
    }
}