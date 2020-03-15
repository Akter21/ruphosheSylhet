<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cbooking extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('addpkg_model','cbooking_model'));

		
	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');
	    if($log_sess){
	
	    	$sessArr = array('srcAdult' => '',
	    					'srcChild' => '',
	    					'srcPkgId' => ''
	    					);
	    	$this->session->set_userdata('bookInfo',$sessArr);
	    	$data['srchData'] = $this->session->userdata('bookInfo');

			$data['message']= '';
			$data['bookings']  = $this->cbooking_model->getAllPackages();
			$data['aboutus']  = $this->cbooking_model->getAboutus();
			$data['pkgTotals']= $this->cbooking_model->getPakageTotal();
			$data['galleryimage']  = $this->cbooking_model->getGallery();
			$data['cuspkg']  = null;
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('cbooking_view',$data);
			$this->load->view('footer_view',$data);
		}
		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	
	}

	public function addToPayment() {
		$log_sess=$this->session->userdata('logged_in');
		//var_dump($_REQUEST);
		if($log_sess){
	    	$sessArr = array('srcAdult' 	=> $this->input->post('cadult'),
	    					'srcChild' 		=> $this->input->post('cchild'),
	    					'srcPkgId' 		=> $this->input->post('hidEx1') 
	    					);
	    	$this->session->set_userdata('bookInfo',$sessArr);
	    	$data['srchData'] = $this->session->userdata('bookInfo');
	    	$data['package']=$this->cbooking_model->getPackageByID($data['srchData']['srcPkgId']);	
			//var_dump($data['package']);
			$data['custInfo']=$this->session->userdata('logged_in');

			$msg='';
			//$res = $this->cbooking_model->insertUser($_REQUEST,$log_sess['id']);
			$data['message']="";
			$data['bookings']  =null;
			$data['pkgTotals']=null;
			$data['cuspkg']  = null;
			$data['aboutus']  = null;
			$data['galleryimage']  = null;
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
	public function Bkashpayment() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

	    	$sessArr = array('srcAdult' 	=> $this->input->post('hidAdult'),
	    					'srcChild' 		=> $this->input->post('hidChild'),
	    					'srcPkgId' 		=> $this->input->post('hidPkgId') 
	    					);
	    	$this->session->set_userdata('bookInfo',$sessArr);
	    	$data['srchData'] = $this->session->userdata('bookInfo');

	
			$msg='';
			//var_dump($_REQUEST);
			$res = $this->cbooking_model->insertToBkashpayment($_REQUEST,$log_sess['id']);
	
		
		

			$data['message']="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>YES</strong> Your Booking is Successful</div>";
            $data['bookings']  = $this->cbooking_model->getAllPackages();
			$data['pkgTotals']= $this->cbooking_model->getPakageTotal();
			$data['cuspkg']  = $this->cbooking_model->getMyBookingsByCustomerId($log_sess['id']);
			$data['aboutus']  = null;
			$data['galleryimage']  = null;
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('mypackages_view',$data);
			$this->load->view('footer_view',$data);

		}

		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}
	public function rocketpayment() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

	    	$sessArr = array('srcAdult' 	=> $this->input->post('hidAdult'),
	    					'srcChild' 		=> $this->input->post('hidChild'),
	    					'srcPkgId' 		=> $this->input->post('hidPkgId') 
	    					);
	    	$this->session->set_userdata('bookInfo',$sessArr);
	    	$data['srchData'] = $this->session->userdata('bookInfo');

	
			$msg='';
			//var_dump($_REQUEST);
			$res = $this->cbooking_model->insertTorocketpayment($_REQUEST,$log_sess['id']);
	
		
		

			$data['message']="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>YES</strong> Your Booking is Successful</div>";
            $data['bookings']  = $this->cbooking_model->getAllPackages();
			$data['pkgTotals']= $this->cbooking_model->getPakageTotal();
			$data['cuspkg']  = $this->cbooking_model->getMyBookingsByCustomerId($log_sess['id']);
			$data['aboutus']  = null;
			$data['galleryimage']  = null;
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('mypackages_view',$data);
			$this->load->view('footer_view',$data);

		}

		else{
			$data['message']="<div class='alert alert-danger alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <strong>Oops!</strong> Time out or session destroyed.</div>";
			$this->load->view('login_view',$data);
		}		
	}

	public function CardPayment() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){

	    	$sessArr = array('srcAdult' 	=> $this->input->post('hidAdult'),
	    					'srcChild' 		=> $this->input->post('hidChild'),
	    					'srcPkgId' 		=> $this->input->post('hidPkgId') 
	    					);
	    	$this->session->set_userdata('bookInfo',$sessArr);
	    	$data['srchData'] = $this->session->userdata('bookInfo');
			$msg='';
			//var_dump($_REQUEST);
			$res = $this->cbooking_model->insertToCardbooking($_REQUEST,$log_sess['id']);
			

			$data['message']="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>YES</strong> Your Booking is Successful</div>";
            $data['bookings']  = $this->cbooking_model->getAllPackages();
			$data['pkgTotals']= $this->cbooking_model->getPakageTotal();
			$data['cuspkg']  = $this->cbooking_model->getMyBookingsByCustomerId($log_sess['id']);
			$data['aboutus']  = null;
			$data['galleryimage']  = null;
			$this->load->view('headerc_view',$data);
			$this->load->view('cmenu_view',$data);
			$this->load->view('mypackages_view',$data);
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