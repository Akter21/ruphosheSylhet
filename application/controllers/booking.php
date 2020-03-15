<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class booking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('addpkg_model','booking_model'));

		
	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
	

			$data['message']= '';
			$data['bookings']  = $this->booking_model->getAllPackages();
			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('booking_view',$data);
			$this->load->view('footer_view',$data);
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	
	}


	public function addClient() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){
	
			$msg='';
			$res = $this->booking_model->insertUser($_REQUEST,$log_sess['id']);
			$data['bookings']  = $this->booking_model->getAllPackages();

		
// var_dump($res);
			$data['message']="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>YES</strong> Your Booking is Successful</div>";

			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('booking_view',$data);
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