<?php
class Company_Model extends CI_Model 
{
	function __construct()
{
    parent :: __construct(); 

    $this->load->database();
}
    function addCompany($company_name,$company_group,$name_contact,$address,$tel,$fax,$email,$website,$company_detail,$booth_position,$url)
    {

        $this->db->set('company_name', $company_name);
        $this->db->set('company_group',$company_group);        
        $this->db->set('name_contact', $name_contact);
        $this->db->set('address', $address);
        $this->db->set('tel', $tel);
        $this->db->set('fax', $fax);
        $this->db->set('email', $email);
        $this->db->set('website', $website);
        $this->db->set('company_detail', $company_detail);
        $this->db->set('booth_position', $booth_position);
        $this->db->set('company_logo', $url);
        $this->db->insert('tb_company');
    }
    function getCompany()
    {
        $query = $this->db->get('tb_company');
        return $query->result_array();
    }
    function getComIDModel($id_company)
    {
                $query = $this->db->select('*')
                ->where('id_company', $id_company)
                ->get('tb_company');
                return $query->result();
    }
    function updateComModel($id_company,$company_name,$company_group,$name_contact,$address,$tel,$fax,$email,$website,$company_detail,$booth_position,$url)
    {
        $this->db->set('company_name', $company_name);
        $this->db->set('company_group', $company_group);
        $this->db->set('name_contact', $name_contact);
        $this->db->set('address', $address);
        $this->db->set('tel', $tel);
        $this->db->set('fax', $fax);
        $this->db->set('email', $email);
        $this->db->set('website', $website);
        $this->db->set('company_detail', $company_detail);
        $this->db->set('booth_position', $booth_position);
        if($url!='')$this->db->set('company_logo', $url);
        
        $this->db->where('id_company', $id_company);
        if($this->db->update('tb_company', $data)){ 
            redirect('company_controller/list_company');
        }else{
            redirect('company_controller/updatecompany','refresh');
        }
    }
    function delComModel($id_company)
    {
        $this->db->where('id_company', $id_company);
        if($this->db->delete('tb_company'))
        {
            redirect('company/_list');
            echo 'success';
        }
    }
}