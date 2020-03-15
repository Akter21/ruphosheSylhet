<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CheckInlist extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('checkInlist_model'));

	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$data['checkinlist']  = $this->checkInlist_model->getCheckInlist();
		$data['name']  = $this->checkInlist_model->getnamebyid($log_sess['id']);
		$this->load->view('headerc_view',$data);
		$this->load->view('menu_view',$data);
  		$this->load->view('checkInlist_view',$data);
  		$this->load->view('footer_view',$data);
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}

	public function deleteCheckinlist() {
		$log_sess=$this->session->userdata('logged_in');
 		if($log_sess){
		// $msg='';
		$res=$this->checkInlist_model-> deleteCheckInlistById($_REQUEST['hidEx1']);	
		$data['checkinlist']  = $this->checkInlist_model->getCheckInlist();
		$data['name']  = $this->checkInlist_model->getnamebyid($log_sess['id']);
		$this->load->view('headerc_view',$data);
		$this->load->view('menu_view',$data);
  		$this->load->view('checkInlist_view',$data);
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