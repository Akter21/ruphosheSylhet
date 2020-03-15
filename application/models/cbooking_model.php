<?php


Class Cbooking_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->helper(array('form','url'));
		$this->load->model(array('cbooking_model','addpkg_model'));
 	}
 	function getAllPackages(){
		$this->db->where('package_status','ACTIVE');
		$query=$this->db->get('client_pakage')->result();
 		//$this->db->order_by("book_date","asen");
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}	
	// function getAllPackages(){
 // 		$query = $this->db->get('client_pakage')->result();
 		
 // 		if(count($query)>0){
 // 			return $query;
 // 		}
 // 		else{
 // 			return false;
 // 		}
 // 	}

	function getAboutus(){
 		$query = $this->db->get('about_us')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	function getGallery(){
 		$query = $this->db->get('gallery')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}

	
	function getPackageByID($id){
		$this->db->where('c_pkg_id',$id);
 		$query = $this->db->get('client_pakage')->result();
 		
 		if(count($query)>0){
 			return $query[0];
 		}
 		else{
 			return false;
 		}
 	}
	function getCustomerByID($id){
		$this->db->where('customer_id',$id);
 		$query = $this->db->get('customer')->result();
 		
 		if(count($query)>0){
 			return $query[0];
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function getPakageTotal(){		 
		$this->db->select('package_id,c_total_person');
		$this->db->select_sum('c_total_person');
		$this->db->group_by('package_id'); 		
 		$query = $this->db->get('total_booking')->result();
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}

 	}	

 	function insertToBkashpayment($obj, $cid){
		$pkgId=	$obj['hidPkgId'];
		
		$pkg=$this->getPackageByID($pkgId);


		 $pkgNm=$pkg->c_pkg_name;
		 $pkgId=$pkg->c_pkg_id;
		 $pkgpdesc=$pkg->c_pkg_desc;
		 $pkgchkIN=$pkg->c_pkg_chkIN_date;
		 $pkgchkOut=$pkg->c_pkg_chkOut_date;
		 $rate=$pkg->c_pkg_cost;
		//$totalPerson=(round($obj['hidRoom'])*$rate);
		$totalPerson=(round($obj['hidAdult'])*$rate)+(round($obj['hidChild'])*$rate/2);
		$totalPersonNumber=(round($obj['hidAdult']))+(round($obj['hidChild']));

		$data= array(
				'customer_id'   	=>   $cid,
				'book_date' => date("Y-m-d H:i:s"),
				'c_adult'			=>	$obj['hidAdult'],
				'c_child'			=>	$obj['hidChild'],
				//'check_IN'			=>	$obj['hidChkINDate'],
				//'check_Out'			=>	$obj['hidChkOutDate'],
				//'total_room'			=>	$obj['hidRoom'],
				'c_pakage'			=> $pkgNm,
			  	'package_id'   		=>   $pkgId,
			  	'c_pkg_desc'		=> $pkgpdesc,
			  	'c_pkg_chkIN_date'	=> $pkgchkIN,
			  	'c_pkg_chkOut_date'	=> $pkgchkOut,
			  	'c_total_amount'    => ($totalPerson),
			  	'c_total_person'    => ($totalPersonNumber),
			  	'bkash_payment'     => $obj['bkash'],
		);
		$query = $this -> db -> insert('total_booking',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	 
	function insertToCardbooking($obj, $cid){
		$pkgId=	$obj['hidPkgId'];
		
		$pkg=$this->getPackageByID($pkgId);


		$pkgNm=$pkg->c_pkg_name;
		$pkgId=$pkg->c_pkg_id;
		$pkgpdesc=$pkg->c_pkg_desc;
		$pkgchkIN=$pkg->c_pkg_chkIN_date;
		$pkgchkOut=$pkg->c_pkg_chkOut_date;
		$rate=$pkg->c_pkg_cost;

			//$totalPerson=(round($obj['hidRoom'])*$rate);
		$totalPerson=(round($obj['hidAdult'])*$rate)+(round($obj['hidChild'])*$rate/2);
		$totalPersonNumber=(round($obj['hidAdult']))+(round($obj['hidChild']));

		$data= array(
				'customer_id'   	=>   $cid,
				'book_date' => date("Y-m-d H:i:s"),
				'c_adult'			=>	$obj['hidAdult'],
				'c_child'			=>	$obj['hidChild'],
				//'check_IN'			=>	$obj['hidChkINDate'],
				//'check_Out'			=>	$obj['hidChkOutDate'],
				'c_pakage'			=> $pkgNm,
			  	'package_id'   		=>   $pkgId,
			  	'c_pkg_desc'		=> $pkgpdesc,
			  	'c_pkg_chkIN_date'	=> $pkgchkIN,
			  	'c_pkg_chkOut_date'	=> $pkgchkOut,
			  	'c_total_amount'    => ($totalPerson),
			  	'c_total_person'    => ($totalPersonNumber),
			  	'card_payment'     => $obj['cardname'],
		);
		$query = $this -> db -> insert('total_booking',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function insertTorocketpayment($obj, $cid){
		$pkgId=	$obj['hidPkgId'];
		
		$pkg=$this->getPackageByID($pkgId);


		$pkgNm=$pkg->c_pkg_name;
		$pkgId=$pkg->c_pkg_id;
		$pkgpdesc=$pkg->c_pkg_desc;
		$pkgchkIN=$pkg->c_pkg_chkIN_date;
		$pkgchkOut=$pkg->c_pkg_chkOut_date;
		$rate=$pkg->c_pkg_cost;

			//$totalPerson=(round($obj['hidRoom'])*$rate);
		$totalPerson=(round($obj['hidAdult'])*$rate)+(round($obj['hidChild'])*$rate/2);
		$totalPersonNumber=(round($obj['hidAdult']))+(round($obj['hidChild']));

		$data= array(
				'customer_id'   	=>   $cid,
				'book_date' => date("Y-m-d H:i:s"),
				'c_adult'			=>	$obj['hidAdult'],
				'c_child'			=>	$obj['hidChild'],
				//'check_IN'			=>	$obj['hidChkINDate'],
				//'check_Out'			=>	$obj['hidChkOutDate'],
				'c_pakage'			=> $pkgNm,
			  	'package_id'   		=>   $pkgId,
			  	'c_pkg_desc'		=> $pkgpdesc,
			  	'c_pkg_chkIN_date'	=> $pkgchkIN,
			  	'c_pkg_chkOut_date'	=> $pkgchkOut,
			  	'c_total_amount'    => ($totalPerson),
			  	'c_total_person'    => ($totalPersonNumber),
			  	'rocket_payment'     => $obj['rocket'],
		);
		$query = $this -> db -> insert('total_booking',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function searchUser($obj){		
		$query = $this -> db -> get('client_pakage')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function getMyBookingsByCustomerId($id){
 		$this->db->where('customer_id',$id);
 		$this->db->order_by("issue_date","desc");
 		$query = $this->db->get('total_booking')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function getBookingsByCustomerId($id){
 		$this->db->where('customer_id',$id);
 		$this->db->order_by("issue_date","desc");
 		$query = $this->db->get('total_booking')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
}

