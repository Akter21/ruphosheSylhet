<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bkashpayment extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('bkashpayment_model'));

	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
			$data['message']= '';
			// $data['clients']  = $this->Bkashpayment_model->getAllClients();
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('bkashPayment_view',$data);
			$this->load->view('footer_view',$data);
		}
	    else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                        <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}
	}

	public function addbooking() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){

		$msg='';
		var_dump($_REQUEST);			
		$res = $this->bkashpayment_model->insertUser($_REQUEST,$log_sess['id']);
		// $data['bookings']  = $this->Bkashpayment_model->getAllPackages();
		// $data['pkgTotals']= $this->Bkashpayment_model->getPakageTotal();
		$data['message']="<div class='alert alert-success alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>YES</strong> Your Booking is Successful</div>";
		$this->load->view('headerc_view',$data);
		$this->load->view('cmenu_view',$data);
		$this->load->view('bkashPayment_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}
}                                                                                                             /* End of file usermaintainance.php */
/* Location: ./application/controllers/usermaintainance.php */