<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpanel extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('cpanel_model'));

	}
	public function index() {
			$log_sess=$this->session->userdata('logged_in');

			if($log_sess){
			// $data['clients']  = $res;
			//$data['details']  = $this->totalbooking_model->getAllClients();
					$data['message']= '';
			$data['booking']  = $this->cpanel_model->get_booking();
			$data['amount']  = $this->cpanel_model->get_amount();
			$data['customer']  = $this->cpanel_model->get_customer();
			$data['admin']  = $this->cpanel_model->get_admin();
			$data['mssg']  = $this->cpanel_model->get_message();
		
			$data['name']  = $this->cpanel_model->getnamebyid($log_sess['id']);
			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('cpanel_view',$data);
			$this->load->view('footer_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
	public function deleteMessage() {
		$log_sess=$this->session->userdata('logged_in');
 
	    if($log_sess){
		 $msg='';
		$res=$this->cpanel_model->deleteMessageById($_REQUEST['hidEx1']);
											$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		Successfully Message deleted/div>";	
    		$data['message']= '';
			$data['booking']  = $this->cpanel_model->get_booking();
			$data['amount']  = $this->cpanel_model->get_amount();
			$data['customer']  = $this->cpanel_model->get_customer();
			$data['admin']  = $this->cpanel_model->get_admin();
			$data['mssg']  = $this->cpanel_model->get_message();
			
			$data['name']  = $this->cpanel_model->getnamebyid($log_sess['id']);
			$this->load->view('header_view',$data);
			$this->load->view('menu_view',$data);
			$this->load->view('cpanel_view',$data);
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