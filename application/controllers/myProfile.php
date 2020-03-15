<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myProfile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('myProfile_model'));
		}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');

	    if($log_sess){
		    $data['personalinfo']  = $this->myProfile_model->getMyProfileByCustomerId($log_sess['id']);
		    //$data['personalinfoedit']  = null;
		    $data['edit']  = null;
		    $data['editprofile']  = null;
		    $data['profileUpdate']  = null;
		    $data['message']= '';
		    $this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('myProfile_view',$data);
   			$this->load->view('footer_view',$data);	
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			//<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  //      <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('clogin_view',$data);
	    }
	}
	public function editMyprofile() {
	   $log_sess=$this->session->userdata('logged_in');

		if($log_sess){
			$msg='';
			$res=$this->myProfile_model->getProfileById($_REQUEST['hidEx1']);
		    $data['personalinfo']  = null;
		   // $data['personalinfoedit']  = $res;
		    $data['edit']  = $res;
		    $data['profileUpdate']  =  $res;
		    $data['editprofile']  = $res;
		    $data['message']= '';
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('myProfile_view',$data);
   			$this->load->view('footer_view',$data);	
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                       <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('clogin_view',$data);
	    }
	}

	public function updateProfile() {
		 $log_sess=$this->session->userdata('logged_in');
		if($log_sess){
			
			$upId=$this->myProfile_model->updateProfile($_REQUEST);
			$res=$this->myProfile_model->getProfileById($upId);
			$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	    	<strong>Hurray</strong> Successfully Update</div>";
			$data['personalinfo']  = $this->myProfile_model->getMyProfileByCustomerId($log_sess['id']);
			// $data['personalinfoedit']  = $res;
			
			$data['edit']  = null;
			$data['profileUpdate']  =  null;
			$data['editprofile']  = null;
			$data['message']= '';
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('myProfile_view',$data);
			$this->load->view('footer_view',$data);	
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('clogin_view',$data);
	    }
	}


}
	
	


