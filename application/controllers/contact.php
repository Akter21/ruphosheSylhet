<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('customer_register_model'));

	}

	public function index() {
		$data['message']= '';
		$this->load->view('contact_view',$data);
		//$this->load->view('footer_view',$data);
		
	}	
	public function sendmessage() {
//var_dump($_REQUEST);
			$res = $this->customer_register_model->insertMessage($_REQUEST);	
			 $msg="<div class='alert alert-danger alert-dismissable'>
			 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
     		<strong>Hurray</strong> Successfully Send</div>";	
		

			$data['message']=$msg;
			$this->load->view('contact_view',$data);
}



}