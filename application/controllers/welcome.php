<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('welcome_model','websiteEdit_model','customer_register_model'));

	}

	public function index(){
		$data['package']  = $this->welcome_model->getallpackage();
		$data['team']  = $this->welcome_model->searchTeamMembers();
		$data['galleryimage']  = $this->welcome_model->searchGallery();
		$data['aboutUs']  = $this->welcome_model->searchAboutus();
		$data['pkgTotals']= $this->welcome_model->getPakageTotal();
		$data['message'] = "";
		// $this->load->view('homemenu_view',$data);


		$this->load->view('welcome_view',$data);



// $this->load->library('googlemaps');

// $config['center'] = '37.4419, -122.1419';
// $config['zoom'] = 'auto';
// $this->googlemaps->initialize();

// $marker = array();
// $marker['position'] = '37.429, -122.1419';
// $this->googlemaps->add_marker($marker);
// $data['map'] = $this->googlemaps->create_map();

// $this->load->view('welcome_view', $data);
	}





		public function sendmessage() {
//var_dump($_REQUEST);
			$res = $this->customer_register_model->insertMessage($_REQUEST);	
			 $msg="<div class='alert alert-danger alert-dismissable'>
			 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
     		<strong>Hurray</strong> Successfully Send</div>";	
		

			$data['message']=$msg;
			$data['package']  = $this->welcome_model->getallpackage();
		$data['team']  = $this->welcome_model->searchTeamMembers();
		$data['galleryimage']  = $this->welcome_model->searchGallery();
		$data['aboutUs']  = $this->welcome_model->searchAboutus();
		$data['pkgTotals']= $this->welcome_model->getPakageTotal();
		$data['message'] = "";
		// $this->load->view('homemenu_view',$data);


		$this->load->view('contact_view',$data);
}
}

