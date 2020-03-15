<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Addpkg extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model(array('addpkg_model'));
		
		// $timezone = $this->config->item('time_zone');
		//  if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		
	}

	public function index() {
		$log_sess=$this->session->userdata('logged_in');
		if($log_sess){
		$data['addpkg']  = null;
		//$data['addpkgs']  = null;
		$data['packageUpdate']  = null;
		$data['addpkgs']  = $this->addpkg_model->searchpackage();
		$data['pkgTotals']= $this->addpkg_model->getPakageTotal();
		$data['pkgTotalamount']= $this->addpkg_model->getPakageTotalAmount();
		$data['getpkgchild']= $this->addpkg_model->getallChild();
		$data['getpkgadult']= $this->addpkg_model->getallAdult();
		$data['name']  = $this->addpkg_model->getnamebyid($log_sess['id']);
		$data['message']= '';
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addpkg_view',$data);
		$this->load->view('footer_view',$data);
	}
    else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	}

}

	public function addPackage() {
	$log_sess=$this->session->userdata('logged_in');

	    if($log_sess){
			

		$target_dir = "uploads/packagesimages/";
		$target_file = $target_dir . basename($_FILES["packagesimages"]["name"]);
		$uploadOk = 1;
		// Check if image file is a actual image or fake image
		if(isset($_POST["packagesimages"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        // echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
				} else {
			       // echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			$_REQUEST['img']='';
			// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  //echo "Sorry, your file was not uploaded.";
				 // if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["packagesimages"]["tmp_name"], $target_file)) {
				    //echo "The file ". basename( $_FILES["packagesimages"]["name"]). " has been uploaded.";
				    $_REQUEST['img']=$target_file;
				  } else {
				    //echo "Sorry, there was an error uploading your file.";
				  }
				}
			
		$res = $this->addpkg_model->insertPackage($_REQUEST);
		$data['addpkg']  = null;
		$data['addpkgs']  = $this->addpkg_model->searchpackage();
		$data['pkgTotals']= $this->addpkg_model->getPakageTotal();
		$data['pkgTotalamount']= $this->addpkg_model->getPakageTotalAmount();
		$data['getpkgchild']= $this->addpkg_model->getallChild();
		$data['getpkgadult']= $this->addpkg_model->getallAdult();
		$data['packageUpdate']  = null;
		$data['name']  = $this->addpkg_model->getnamebyid($log_sess['id']);
		$msg="<div class='alert alert-success alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		<strong>Hurray</strong> Successfully Added</div>";
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addpkg_view',$data);
		$this->load->view('footer_view',$data);

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
		$res=$this->addpkg_model-> deletePakageById($_REQUEST['hidEx1']);
			$msg="<div class='alert alert-danger alert-dismissable'>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		 Successfully Package Deleted</div>";
		$data['addpkgs']  = $this->addpkg_model->searchpackage();
		$data['pkgTotals']= $this->addpkg_model->getPakageTotal();
		$data['pkgTotalamount']= $this->addpkg_model->getPakageTotalAmount();
		$data['getpkgchild']= $this->addpkg_model->getallChild();
		$data['getpkgadult']= $this->addpkg_model->getallAdult();
		$data['name']  = $this->addpkg_model->getnamebyid($log_sess['id']);
	  	$data['addpkg']  = null;
	  	 	 $data['packageUpdate']  = null;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addpkg_view',$data);
		$this->load->view('footer_view',$data);
		}

		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	}
	public function editPackage() {
	   $log_sess=$this->session->userdata('logged_in');

		if($log_sess){
		$msg='';
		$res=$this->addpkg_model->getPackageById($_REQUEST['hidEx1']);	
		//$res=$this->admin_register_model-> deleteAdmin($_REQUEST['hidEx1']);	
		$data['packageUpdate']  = $res;
		$data['addpkgs']  = $this->addpkg_model->searchpackage();
		$data['pkgTotals']= $this->addpkg_model->getPakageTotal();
		$data['pkgTotalamount']= $this->addpkg_model->getPakageTotalAmount();
		$data['getpkgchild']= $this->addpkg_model->getallChild();
		$data['getpkgadult']= $this->addpkg_model->getallAdult();
		$data['name']  = $this->addpkg_model->getnamebyid($log_sess['id']);
		$data['addpkg']  = $res;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addpkg_view',$data);
		$this->load->view('footer_view',$data);
		}

		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	}
	public function updatePackage() {
		$sn = $this->config->item('short_name');
		$log_sess=$this->session->userdata($sn.'logged_in');
		if($log_sess){
		$upId=$this->addpkg_model->updatePackage($_REQUEST);
		$res=$this->addpkg_model->getPackageById($upId);
		$msg="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Update</div>";
		$data['addpkgs']  = $this->addpkg_model->searchpackage();
		$data['pkgTotals']= $this->addpkg_model->getPakageTotal();
		$data['pkgTotalamount']= $this->addpkg_model->getPakageTotalAmount();
		$data['getpkgchild']= $this->addpkg_model->getallChild();
		$data['getpkgadult']= $this->addpkg_model->getallAdult();
		$data['name']  = $this->addpkg_model->getnamebyid($log_sess['id']);
		$data['addpkg']  = null;
		$data['packageUpdate']  = $res;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addpkg_view',$data);
		$this->load->view('footer_view',$data);
		}

		else{
		$data['message']="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <strong>Oops!</strong> Time out or session destroyed.</div>";
		$this->load->view('login_view',$data);
	    }
	}
	public function updateStatus() {
		$sn = $this->config->item('short_name');
		$log_sess=$this->session->userdata($sn.'logged_in');
		if($log_sess){
			$res = $this->addpkg_model->updatePackageStatus();
		$msg="<div class='alert alert-success alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    		<strong>Hurray</strong> Successfully Updated</div>";
		$data['addpkgs']  = $this->addpkg_model->searchpackage();
		$data['pkgTotals']= $this->addpkg_model->getPakageTotal();
		$data['pkgTotalamount']= $this->addpkg_model->getPakageTotalAmount();
		$data['getpkgchild']= $this->addpkg_model->getallChild();
		$data['getpkgadult']= $this->addpkg_model->getallAdult();
		$data['name']  = $this->addpkg_model->getnamebyid($log_sess['id']);
		$data['addpkg']  = null;
		$data['packageUpdate']  = $res;
		$data['message']=$msg;
		$this->load->view('header_view',$data);
		$this->load->view('menu_view',$data);
		$this->load->view('addpkg_view',$data);
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