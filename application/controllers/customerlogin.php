<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customerlogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('admin_model','addpkg_model','cmodel_model','booking_model','admin_register_model','customer_register_model'));
	}

	public function index()
	{
		$data['message'] = "";
		$this->load->view('clogin_view',$data);
		//$this->load->view('footer_view',$data);
	}
	
	function cverify(){
		$msg  = "";
		$cuser = trim($_REQUEST['cuser']);
		$cpass = trim($_REQUEST['cpass']);
		$res = $this->cmodel_model->clogin($cuser, $cpass);
		//var_dump($res);
		if($res == false){
		//Field validation failed.  User redirected to login page
		$msg="<div class='alert alert-danger alert-dismissable'>
            		<strong>Oops!</strong> Sorry, Your user or password mismatch.</div>";
        $data['message']=$msg;
		$this->load->view('clogin_view',$data);
		}
		else{
		$sess_array = array(
					'id' 	=> $res->customer_id,
					'name' 	=> $res->customer_name,
		);				
		$this->session->set_userdata('logged_in', $sess_array);
		$log_sess=$this->session->userdata('logged_in');
		$data['message']=$msg; 
        $data['name']  = $this->cmodel_model->getCustomernamebyid($log_sess['id']);		
		$this->load->view('headerc_view',$data);
		$this->load->view('cmenu_view',$data);
		$this->load->view('customer_welcome_view ',$data);
		$this->load->view('footer_view',$data);

		}
	}

	function logout(){
		$sn = $this->config->item('short_name');
		$this->session->unset_userdata($sn.'logged_in');
		$this->session->unset_userdata('logger_role');		
		$msg="<div class='alert alert-info alert-dismissable'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <strong>Yes!</strong> You have successfully logged-out.</div>";
		$data['message']=$msg;
		$this->load->view('clogin_view',$data);
	}
}
	

