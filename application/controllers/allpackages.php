<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Allpackages extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('allpackages_model','addpkg_model'));

	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		// $data['clients']  = $res;
		// $data['message']= '';
		$data['package']  = $this->allpackages_model->searchpackage();
		$data['pkgTotals']= $this->allpackages_model->getPakageTotal();
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('allpackages_view',$data);
		}
	    else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	                        <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}

    }

	public function deletePakage() {
		$log_sess=$this->session->userdata('logged_in');
 
	    if($log_sess){
	
		$msg='';
		$res=$this->allpackages_model-> deletePakageById($_REQUEST['hidEx1']);	
		$data['package']  = $this->allpackages_model->searchpackage();
		$data['pkgTotals']= $this->allpackages_model->getPakageTotal();
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('allpackages_view',$data);
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