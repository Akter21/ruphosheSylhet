<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('websiteEdit_model'));
		
	}
	public function index() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$data['aboutus']  = $this->websiteEdit_model->getAboutus();
		$data['about']  = null;
		$data['UpdateAboutus']  = null;
		$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);
		$data['message']= '';
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteaboutUs_view',$data);
		$this->load->view('footer_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}	

public function addaboutus() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
	
		$target_dir = "uploads/aboutUsimages/";

		$target_file = $target_dir . basename($_FILES["aboutUsimages"]["name"]);
		$uploadOk = 1;
		// Check if image file is a actual image or fake image
		if(isset($_POST["aboutUsimages"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
				} else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			$_REQUEST['aboutUsimages']='';
			// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				 // echo "Sorry, your file was not uploaded.";
				 // if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["aboutUsimages"]["tmp_name"], $target_file)) {
				    //echo "The file ". basename( $_FILES["aboutUsimages"]["name"]). " has been uploaded.";
				    $_REQUEST['aboutUsimages']=$target_file;
				  } else {
				    //echo "Sorry, there was an error uploading your file.";
				  }
				}
		
		$msg='';
		$res = $this->websiteEdit_model->insertAboutus($_REQUEST);
					$msg="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Aboutus Added</div>";
		$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);
		$data['aboutus']  = $this->websiteEdit_model->getAboutus();
		$data['about']  = null;
		$data['UpdateAboutus']  = null;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteaboutUs_view',$data);
		$this->load->view('footer_view',$data);}
			else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			<strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}
	}

	public function editAboutus() {
	   $log_sess=$this->session->userdata('logged_in');

		if($log_sess){
		$msg='';
		$res=$this->websiteEdit_model->getAboutById($_REQUEST['hidEx1']);	
		//$res=$this->admin_register_model-> deleteAdmin($_REQUEST['hidEx1']);
		$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);	
		$data['aboutus']  = $this->websiteEdit_model->getAboutus();
		$data['about']  = $res;
		$data['UpdateAboutus']  = $res;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteaboutUs_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
	public function updateAbout() {
	   $log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$upId=$this->websiteEdit_model->updateAbout($_REQUEST);
		$res=$this->websiteEdit_model->getAboutById($upId);
		$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Update</div>";
    	$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);	
		$data['aboutus']  = $this->websiteEdit_model->getAboutus();
		$data['about']  = null;
		$data['UpdateAboutus']  = null;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteaboutUs_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}

	public function deleteAboutus() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$msg='';
		$res=$this->websiteEdit_model-> deleteAboutus($_REQUEST['hidEx1']);	
							$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Aboutus delete</div>";
    	$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);	
		$data['aboutus']  = $this->websiteEdit_model->getAboutus();
		$data['about']  = null;
		$data['UpdateAboutus']  = null;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteaboutUs_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			<strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}
	}	


}



	
/* End of file usermaintainance.php */
/* Location: ./application/controllers/usermaintainance.php */