<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('company_model');
 }

 function index()
 {
 	$this->load->view('template/_template');
 	$this->load->view('company/_form'); 
 }
 function addCompany()
{
	$url = $this->do_upload();
	$company_name = $_POST["company_name"];
	$company_group = $_POST["company_group"];	
	$name_contact = $_POST["name_contact"];
	$address = $_POST["address"];
	$tel = $_POST["tel"];
	$fax = $_POST["fax"];
	$email = $_POST["email"];
	$website = $_POST["website"];
	$company_detail = $_POST["company_detail"];
	$booth_position = $_POST["booth_position"];
	$this->company_model->addCompany(
		$company_name,$company_group,
		$name_contact,$address,$tel,
		$fax,$email,$website,$company_detail,$booth_position,$url);

	$this->load->view('template/_template');
	redirect('company_controller/list_company');
	//$this->load->view('company/_list');	
}
private function do_upload()
{
				//set image
				if(isset($_FILES['company_logo'])){
					$file_name = $_FILES['company_logo']['name'];
					if($file_name!=""){
						$errors= array();
			      		$file_size =$_FILES['company_logo']['size'];
			    	  	$file_tmp =$_FILES['company_logo']['tmp_name'];
			   		   	$file_type=$_FILES['company_logo']['type'];
			   		   	$file_ext=strtolower(end(explode('.',$_FILES['company_logo']['name'])));
			   		   	$expensions= array("jpeg","jpg","png");

				      	if(in_array($file_ext,$expensions)=== false){
				         	$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				      	}  	
				        if($file_size > 2097152){
				            $errors[]='File size must be excately 2 MB';
				        }
				      
				        if(empty($errors)==true){
				            move_uploaded_file($file_tmp,"./assets/uploads/".$file_name);
				            
				        }
				        else{
				         	print_r($errors);
				        }
					}	
			    }
			    return $file_name;

}	
function list_company()
{
	$this->load->view('template/_template');
	$this->load->view('company/_list');
}
function getComID()
 {
	$id_company = $this->uri->segment(3, 0);
	$result['list']=$this->company_model->getComIDModel($id_company);
	$this->load->view('template/_template');
	$this->load->view('company/_edit',$result);
}
function readComID()
{
	$id_company = $this->uri->segment(3, 0);
	$result['list']=$this->company_model->getComIDModel($id_company);
	$this->load->view('template/_template');
	$this->load->view('company/_view',$result);
} 
function updateCompany()
{
	$url = $this->do_upload();
	$id_company = $this->uri->segment(3, 0);
	$company_name = $_POST["company_name"];
	$company_group = $_POST['company_group'];
	$name_contact = $_POST["name_contact"];
	$address = $_POST["address"];
	$tel = $_POST["tel"];
	$fax = $_POST["fax"];
	$email = $_POST["email"];
	$website = $_POST["website"];
	$company_detail = $_POST["company_detail"];
	$booth_position = $_POST["booth_position"];
	$this->company_model->updateComModel($id_company,$company_name,$company_group,$name_contact,$address,$tel,$fax,$email,$website,$company_detail,$booth_position,$url);

}
function deleteCompany($id_company)
    {
        $this->db->where('id_company', $id_company);
        if($this->db->delete('tb_company'))
        {
            redirect('company_controller/list_company');
        }
    }
}

?>