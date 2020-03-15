<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaction extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('admin_model','totalbooking_model'));
				//$tzone = $this->config->item('time_zone');
		//if(function_exists('date_default_timezone_set')) date_default_timezone_set($tzone);

	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');

	    if($log_sess){
		
		// $data['clients']  = $res;
		$data['message']= '';
		$data['getTransaction']  = $this->admin_model->get_transaction();
		$data['name']  = $this->admin_model->getnamebyid($log_sess['id']);
		$data['bookings']  = $this->totalbooking_model->getAllClients();
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
  		$this->load->view('transaction_view',$data);
  		$this->load->view('footer_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
	public function addtransaction() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
					$msg='';
				$res = $this->admin_model->insertTransaction($_REQUEST);
		$msg="<div class='alert alert-success alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Hurray</strong> Successfully Transaction Added</div>";

	
	 	$data['message']=$msg;

    		
		$data['getTransaction']  = $this->admin_model->get_transaction();
		$data['bookings']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->admin_model->getnamebyid($log_sess['id']);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
  		$this->load->view('transaction_view',$data);
  		$this->load->view('footer_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}

	public function deleteTransaction() {
		$log_sess=$this->session->userdata('logged_in');
 
	    if($log_sess){
		$msg='';
		$res=$this->admin_model->deleteTransactionById($_REQUEST['hidEx1']);
		$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		 Successfully Transaction deleted</div>";		
		// $data['clients']  = $res;
	 	$data['message']=$msg;
		$data['getTransaction']  = $this->admin_model->get_transaction();
		$data['bookings']  = $this->totalbooking_model->getAllClients();
		$data['name']  = $this->admin_model->getnamebyid($log_sess['id']);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('transaction_view',$data);
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