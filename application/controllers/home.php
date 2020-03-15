<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('welcome_model'));

	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$data['message']= '';
				$data['package']  = $this->welcome_model->searchpackage();
		$data['team']  = $this->welcome_model->searchTeamMembers();
		$data['galleryimage']  = $this->welcome_model->searchGallery();
		$data['aboutUs']  = $this->welcome_model->searchAboutus();
		$data['pkgTotals']= $this->welcome_model->getPakageTotal();
		//$this->load->view('headerc_view',$data);
		$this->load->view('cmenu_view',$data);
		$this->load->view('home_view',$data);
		}
    	else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
}