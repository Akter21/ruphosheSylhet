<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mypackages extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('mypackages_model'));
		}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');

	    if($log_sess){

			//$data['message']= '';

		    $data['cuspkg']  = $this->mypackages_model->getMyBookingsByCustomerId($log_sess['id']);
		    $this->load->view('header_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('mypackages_view',$data);
   			$this->load->view('footer_view',$data);	
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			//<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  //      <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	}
}
	
	


