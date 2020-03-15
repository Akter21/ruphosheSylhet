<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('admin_model','addpkg_model','cmodel_model','booking_model','admin_register_model','customer_register_model'));

	}

	public function index(){
		$data['message'] = "";
	 	$this->load->view('login_view',$data);
	    //$this->load->view('footer_view',$data);
	    $data['name']  = null;
	}
	function verify(){
		$msg  = "";
		$user = trim($_REQUEST['user']);
		$pass = trim($_REQUEST['pass']);

		$res = $this->admin_model->login($user, $pass);

		if($res == false){
			//Field validation failed.  User redirected to login page
			
			$msg="<div class='alert alert-danger alert-dismissable'>
            		<strong>Oops!</strong> Sorry, Your user or password mismatch.</div>";
            $data['message']=$msg;
            $this->load->view('login_view',$data);
		}
		else{
			$sess_array = array(
			'id' 	=> $res->usr_id,
			);				
			$this->session->set_userdata('logged_in', $sess_array);
			$log_sess=$this->session->userdata('logged_in');
			$data['message']=$msg; 
			$data['name']  = $this->admin_model->getnamebyid($log_sess['id']);
			$data['booking']  = $this->admin_model->get_booking();
			$data['amount']  = $this->admin_model->get_amount();
			$data['customer']  = $this->admin_model->get_customer();
			$data['admin']  = $this->admin_model->get_admin();
			$data['mssg']  = $this->admin_model->get_message();					
			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('cpanel_view',$data);
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
		//$this->load->view('mainmenu_view',$data);
		$this->load->view('login_view',$data);

	}
}
	

