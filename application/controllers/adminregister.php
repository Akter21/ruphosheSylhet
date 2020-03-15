<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminregister extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('admin_register_model'));

		// $timezone = $this->config->item('time_zone');
		// if(function_exists('date_default_timezone_set')); date_default_timezone_set($timezone);

	}

	public function index() {
	$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$data['message']= '';
		$data['alladmins']  = $this->admin_register_model->getAllAdmins();
		$data['name']  = $this->admin_register_model->getnamebyid($log_sess['id']);
		$data['register']  = null;
		$data['adminUpdate']  = null;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		// $this->load->view('admin_view',$data);
		$this->load->view('admin_register_view',$data);
		$this->load->view('footer_view',$data);
	}
	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	}

}
	
	public function addAdmin() {
	$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$msg='';
		
		$target_dir = "uploads/profilepic/";
		$target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
		$uploadOk = 1;
		// Check if image file is a actual image or fake image
		if(isset($_POST["profilepic"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
				} else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			$_REQUEST['profilepic']='';
			// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  //echo "Sorry, your file was not uploaded.";
				 // if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_file)) {
				    //echo "The file ". basename( $_FILES["teamMembersimages"]["name"]). " has been uploaded.";
				    $_REQUEST['profilepic']=$target_file;
				  } else {
				   // echo "Sorry, there was an error uploading your file.";
				  }
				}
		$chk = $this->admin_register_model->checkAdmin($_REQUEST);			
		if(!$chk){
			$res = $this->admin_register_model->insertAdmin($_REQUEST);
			$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Registered</div>";	
		}else{
			// $msg="Already exist";
			$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Already Exist</strong> Try a new one</div>";
            $data['message']=$msg;		
		}
	
		$data['message']=$msg;
		$data['alladmins']  = $this->admin_register_model->getAllAdmins();
		$data['name']  = $this->admin_register_model->getnamebyid($log_sess['id']);
		$data['register']  = null;
		$data['adminUpdate']  = null;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('admin_register_view',$data);
		$this->load->view('footer_view',$data);
		}

		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	}

	
	public function deleteAdmin() {
		$log_sess=$this->session->userdata('logged_in');
 
	    if($log_sess){
		$res=$this->admin_register_model-> deleteAdmin($_REQUEST['hidEx1']);	
		$data['alladmins']  = $this->admin_register_model->getAllAdmins();
		$data['name']  = $this->admin_register_model->getnamebyid($log_sess['id']);
		$data['register']  = null;
		$data['adminUpdate']  = null;
		$msg="<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Hurray</strong> Successfully Delete</div>";

		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('admin_register_view',$data);
		$this->load->view('footer_view',$data);
		}

		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	}

	public function editAdmin() {
	   $log_sess=$this->session->userdata('logged_in');

		if($log_sess){
		
		$msg='';

		$res=$this->admin_register_model->getAdminById($_REQUEST['hidEx1']);	
		//$res=$this->admin_register_model-> deleteAdmin($_REQUEST['hidEx1']);	
		$data['alladmins']  = $this->admin_register_model->getAllAdmins();
		$data['name']  = $this->admin_register_model->getnamebyid($log_sess['id']);
		$data['register']  = $res;
		$data['adminUpdate']  = $res;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('admin_register_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}
	}

	public function updateAdmin() {
		$sn = $this->config->item('short_name');
		$log_sess=$this->session->userdata($sn.'logged_in');

		if($log_sess){
		
		$upId=$this->admin_register_model->updateAdmin($_REQUEST);
		$res=$this->admin_register_model->getAdminById($upId);
		$msg="<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Hurray</strong> Successfully Update</div>";
		$data['alladmins']  = $this->admin_register_model->getAllAdmins();
		$data['name']  = $this->admin_register_model->getnamebyid($log_sess['id']);
		$data['register']  = null;
		$data['adminUpdate']  = $res;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('admin_register_view',$data);
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