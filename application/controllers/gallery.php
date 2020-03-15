<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('websiteEdit_model'));

	}

	public function index() {
		//$log_sess=$this->session->userdata('logged_in');
		//if($log_sess){
		$data['addGallery']  = $this->websiteEdit_model->getGallery();
		$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);
		$data['message']= '';
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteGallery_view',$data);
		$this->load->view('footer_view',$data);
		}
    	//else{
		//$data['message']="<div class='alert alert-danger alert-dismissable'>
			//<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                     //   <strong>Oops!</strong> Time out or session destroyed.</div>";
		//$this->load->view('login_view',$data);
		//}
	}
	
	public function addGallery() {
		$sn = $this->config->item('short_name');
		$log_sess=$this->session->userdata($sn.'logged_in');

		if($log_sess){
		$target_dir = "uploads/galleryimages/";

		$target_file = $target_dir . basename($_FILES["galleryimages"]["name"]);
		$uploadOk = 1;
		// Check if image file is a actual image or fake image
		if(isset($_POST["galleryimages"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
				} else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			$_REQUEST['galleryimages']='';
			// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				 // echo "Sorry, your file was not uploaded.";
				 // if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["galleryimages"]["tmp_name"], $target_file)) {
				   // echo "The file ". basename( $_FILES["galleryimages"]["name"]). " has been uploaded.";
				    $_REQUEST['galleryimages']=$target_file;
				  } else {
				    //echo "Sorry, there was an error uploading your file.";
				  }
				}	}
		$msg='';
		$res = $this->websiteEdit_model->insertGallery($_REQUEST);
							$msg="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Image Added</div>";
    	$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);
		$data['addGallery']  = $this->websiteEdit_model->getGallery();
		$data['message']=$msg;
		
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteGallery_view',$data);
		$this->load->view('footer_view',$data);
	}

	public function deleteGallery() {
		$log_sess=$this->session->userdata('logged_in');

		if($log_sess){

		$msg='';
		$res=$this->websiteEdit_model-> deleteGalleryById($_REQUEST['hidEx1']);
							$msg="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Image delete</div>";
    	$data['name']  = $this->websiteEdit_model->getnamebyid($log_sess['id']);	
		$data['addGallery']  = $this->websiteEdit_model->getGallery();
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('websiteGallery_view',$data);
		$this->load->view('footer_view',$data);
		}else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
		}
	}
}



	
/* End of file usermaintainance.php */
/* Location: ./application/controllers/usermaintainance.php */