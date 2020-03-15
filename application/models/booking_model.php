<?php


Class booking_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->helper(array('form','url'));
		$this->load->model(array('booking_model','addpkg_model'));
 	}
	
	function getAllPackages(){

 		$query = $this->db->get('client_pakage')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function getBookingByPakageId($pkgId){
 		$this->db->where('c_pkg_id',$pkgId);
 	    $this->db->get('client_pakage')->result();


 	}

 	function insertUser($obj, $cid){
		$pkgId=	$obj['hidEx1'];
		$pkgNm=$obj['hidPkgNm_'.$pkgId];
		$pkgId=$obj['hidPkgId_'.$pkgId];
		$pkgpdesc=$obj['hidPkgpdesc_'.$pkgId];
		$pkgchkIN=$obj['hidPkgchkIN_'.$pkgId];
		$pkgchkOut=$obj['hidPkgchkOut_'.$pkgId];
		$rate=$obj['hidRate_'.$pkgId];

		$totalPerson=(round($obj['cadult'])*$rate)+(round($obj['cchild'])*$rate/2);
        $totalPersonNumber=(round($obj['cadult']))+(round($obj['cchild']));
		$data= array(
				'customer_id'   =>   $cid,
				
				'c_adult'		=>	$obj['cadult'],
				'c_child'		=>	$obj['cchild'],
				'bkash_payment'		=>	$obj['bkash'],
				'cash_payment'		=>	$obj['cash'],
			
				'issue_date'		=>	$obj['issuedate'],
				//'c_payment'		=>	$obj['payment'],
			  	'c_pakage'		=> $pkgNm,
			  	'package_id'   =>   $pkgId,
			  	'c_pkg_desc'	=> $pkgpdesc,
			  	'c_pkg_chkIN_date'		=> $pkgchkIN,
			  	'c_pkg_chkOut_date'	    => $pkgchkOut,
			  	'c_total_amount'        => ($totalPerson),
			  	'c_total_person'        => ($totalPersonNumber),

			  	

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
}
