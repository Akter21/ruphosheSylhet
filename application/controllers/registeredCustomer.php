<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegisteredCustomer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('registeredCustomer_model','cpanel_model'));

	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');

	    if($log_sess){
		
		// $data['clients']  = $res;
		// $data['message']= '';
		$data['allcus']  = $this->registeredCustomer_model->getAllCustomer();
		$data['msg']  = $this->cpanel_model->get_message();
		$data['name']  = $this->registeredCustomer_model->getnamebyid($log_sess['id']);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
  		$this->load->view('registeredCustomer_view',$data);
  		$this->load->view('footer_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
	public function deleteCustomer() {
		$log_sess=$this->session->userdata('logged_in');
 
	    if($log_sess){
		// $msg='';
		$res=$this->registeredCustomer_model->deleteCustomerById($_REQUEST['hidEx1']);	
		// $data['clients']  = $res;
		// $data['message']=$msg;
		$data['allcus']  = $this->registeredCustomer_model->getAllCustomer();
		$data['msg']  = $this->cpanel_model->get_message();
		$data['name']  = $this->registeredCustomer_model->getnamebyid($log_sess['id']);
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('registeredCustomer_view',$data);
		$this->load->view('footer_view',$data);
		}
	}	
}








	
/* End of file usermaintainance.php */
/* Location: ./application/controllers/usermaintainance.php */