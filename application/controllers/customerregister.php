<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customerregister extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('customer_register_model'));

	}

	public function index() {
		$data['message']= '';
		$this->load->view('customer_register_view',$data);
		//$this->load->view('footer_view',$data);
		
	}
	public function addCustomer() {
		$sn = $this->config->item('short_name');
		$chk = $this->customer_register_model->checkCustomer($_REQUEST);			
		if(!$chk){
			$res = $this->customer_register_model->insertCustomer($_REQUEST);	
			$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Registered</div>";	
		}
		else{
			// $msg="Already exist";
			$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Already Exist</strong> Try a new one</div>";
            $data['message']=$msg;		
		}
			$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		 Successfully Registered</div>";
			//$data['user']  = null;
			$data['message']=$msg;
			$this->load->view('customer_register_view',$data);
	}
}








	
/* End of file usermaintainance.php */
/* Location: ./application/controllers/usermaintainance.php */