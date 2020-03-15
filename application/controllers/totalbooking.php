<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Totalbooking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('totalbooking_model'));

	}

	public function index() {
			$log_sess=$this->session->userdata('logged_in');

			if($log_sess){
			// $data['clients']  = $res;
			//$data['details']  = $this->totalbooking_model->getAllClients();
			$data['sum']  = $this->totalbooking_model->get_sum();
			$data['count']  = $this->totalbooking_model->get_count();
			$data['getdetails'] = null;
			// $data['message']= '';
			$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
			$data['clients']  = $this->totalbooking_model->getAllClients();
			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('totalbooking_view',$data);
			$this->load->view('footer_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
	public function addToCheckinlist() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$res = $this->totalbooking_model->bookingStatusUpdate();

		$msg='';
		//$data['details']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
		$data['sum']  = $this->totalbooking_model->get_sum();
		$data['count']  = $this->totalbooking_model->get_count();

		$data['message']= '';
		$data['clients']  = null;
		$data['getdetails'] = $this->totalbooking_model->getDetails();
		
		//$data['bookings']  = $this->booking_model->getAllPackages();
		//var_dump($res);
		// $data['message']="<div class='alert alert-success alert-dismissable'>
		// 	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //                       <strong>YES</strong> Your Booking is Successful</div>";
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('totalbooking_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}

	public function addToArchivelist() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$res = $this->totalbooking_model->bookingStatusCOUpdate();

		$msg='';
		//$data['details']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
		$data['sum']  = $this->totalbooking_model->get_sum();
		$data['count']  = $this->totalbooking_model->get_count();

		$data['message']= '';
		$data['clients']  = null;
		$data['getdetails'] = $this->totalbooking_model->getDetails();
		
		//$data['bookings']  = $this->booking_model->getAllPackages();
		//var_dump($res);
		// $data['message']="<div class='alert alert-success alert-dismissable'>
		// 	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //                       <strong>YES</strong> Your Booking is Successful</div>";
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('totalbooking_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}	
	public function addToCheckOutlist() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$res = $this->totalbooking_model->bookingStatusCIUpdate();

		$msg='';
		//$data['details']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
		$data['sum']  = $this->totalbooking_model->get_sum();
		$data['count']  = $this->totalbooking_model->get_count();

		$data['message']= '';
		$data['clients']  = null;
		$data['getdetails'] = $this->totalbooking_model->getDetails();
		
		//$data['bookings']  = $this->booking_model->getAllPackages();
		//var_dump($res);
		// $data['message']="<div class='alert alert-success alert-dismissable'>
		// 	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //                       <strong>YES</strong> Your Booking is Successful</div>";
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('totalbooking_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}
	public function getDetails() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$data['getdetails'] = $this->totalbooking_model->getDetails();
		//var_dump($data['getdetails']);

		$msg='';
		//$data['details']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
		$data['sum']  = null;
		$data['count']  = null;

		$data['message']= '';
		$data['clients']  = null;
		
		//$data['bookings']  = $this->booking_model->getAllPackages();
		//var_dump($res);
		// $data['message']="<div class='alert alert-success alert-dismissable'>
		// 	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //                       <strong>YES</strong> Your Booking is Successful</div>";
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('totalbooking_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}		
	public function updatePayment() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$res = $this->totalbooking_model->updatePaymentStatus();

		$msg='';
		//$data['details']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
		$data['sum']  = $this->totalbooking_model->get_sum();
		$data['count']  = $this->totalbooking_model->get_count();
		$data['getdetails'] = $this->totalbooking_model->getDetails();

		$data['message']= '';
		$data['clients']  = null;
		
		//$data['bookings']  = $this->booking_model->getAllPackages();
		//var_dump($res);
		// $data['message']="<div class='alert alert-success alert-dismissable'>
		// 	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //                       <strong>YES</strong> Your Booking is Successful</div>";
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('totalbooking_view',$data);
		$this->load->view('footer_view',$data);
		}
		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}

	public function deleteClients() {
			$log_sess=$this->session->userdata('logged_in');
 
	         if($log_sess){
	
			$msg='';
			$res=$this->totalbooking_model-> deleteClientsById($_REQUEST['hidEx1']);	
		  	$data['clients']  = $this->totalbooking_model->getAllClients();
  			//$data['details']  = $this->totalbooking_model->getAllClients();
  			$data['name']  = $this->totalbooking_model->getnamebyid($log_sess['id']);
  			$data['sum']  = $this->totalbooking_model->get_sum();
  			$data['count']  = $this->totalbooking_model->get_count();
  			$data['getdetails'] = null;
			$data['message']=$msg;
			//$data['clients']  = $this->totalbooking_model->getAllClients();
			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('totalbooking_view',$data);
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