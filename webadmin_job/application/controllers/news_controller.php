<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_controller extends CI_Controller 
{

 function __construct()
 {
   parent::__construct();
   $this->load->model('news_model');
 }

 function index()
 {
 	$this->load->view('template/_template'); 
 	$this->load->view('news/_form'); 			
 }

function addNews()
{
	$url = $this->do_upload();
	$news_topic = $_POST["news_topic"];
	$news_date_update = $_POST["news_date_update"];	
	$news_detail = $_POST["news_detail"];
	
	$this->news_model->addNews($news_topic,$news_date_update,$news_detail,$url);

	redirect('news_controller/list_news');

}
private function do_upload()
{
	//set image
				if(isset($_FILES['news_image'])){
					$file_name = $_FILES['news_image']['name'];
					if($file_name!=""){
						$errors= array();
			      		$file_size =$_FILES['news_image']['size'];
			    	  	$file_tmp =$_FILES['news_image']['tmp_name'];
			   		   	$file_type=$_FILES['news_image']['type'];
			   		   	$file_ext=strtolower(end(explode('.',$_FILES['news_image']['name'])));
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

 function form()
 {
 	$result['list'] = $this->news_model->getnews();
 	$this->load->view('template/_template');
 	$this->load->view('news/_form',$result);
 }
 function list_news()
 {
 	$this->load->view('template/_template');
 	$this->load->view('news/_list');
 }


 function getNewsID()
 {
	$id_news = $this->uri->segment(3, 0);
	$result['list']=$this->news_model->getNewsIDModel($id_news);
	$this->load->view('template/_template');
	$this->load->view('news/_edit',$result);
}
function readNewsID()
{
	$id_news = $this->uri->segment(3, 0);
	$result['list']=$this->news_model->getNewsIDModel($id_news);
	$this->load->view('template/_template');
	$this->load->view('news/_view_detail',$result);
}
function updateNews()
{
	$url = $this->do_upload();
	$id_news = $this->uri->segment(3, 0);
	$news_topic = $_POST["news_topic"];
	$news_date_update = $_POST['news_date_update'];
	$news_detail = $_POST['news_detail'];
	
	$this->news_model->updateNewsModel($id_news,$news_topic,$news_detail,$news_date_update,$url);
}
function deleteNews()
{		
	$id_news = $this->uri->segment(3, 0);	
	$this->news_model->delNewsModel($id_news);
}
}
?>