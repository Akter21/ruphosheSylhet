<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WebsiteSlideEdit extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('websiteSlideEdit_model'));
		
	}

	public function index() {
			
			$data['message']= '';
			$this->load->view('header_view',$data);
		    $this->load->view('menu_view',$data);
			$this->load->view('websiteEdit_aboutus_view ',$data);
	}

}

	
	


