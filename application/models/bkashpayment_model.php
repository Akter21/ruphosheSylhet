<?php


Class Bkashpayment_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();

 	}
 	
 	function getAllClients(){
 		$query = $this->db->get('total_booking')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
  	
  	function insertUser($obj, $cid){
		$pkgId=	$obj['hidEx1'];
		$pkgNm=$obj['hidPkgNm_'.$pkgId];
		$pkgId=$obj['hidPkgId_'.$pkgId];
		$pkgpdesc=$obj['hidPkgpdesc_'.$pkgId];
		//$pkgchkIN=$obj['hidPkgchkIN_'.$pkgId];
		//$pkgchkOut=$obj['hidPkgchkOut_'.$pkgId];
		$rate=$obj['hidRate_'.$pkgId];

		$totalPerson=(round($obj['cadult'])*$rate)+(round($obj['cchild'])*$rate/2);
		$totalPersonNumber=(round($obj['cadult']))+(round($obj['cchild']));

		$data= array(
				'customer_id'   =>   $cid,
				'c_adult'		=>	$obj['cadult'],
				'c_child'		=>	$obj['cchild'],
				 'issue_date'		=>	$obj['issuedate'],
				'c_pakage'		=> $pkgNm,
			  	'package_id'   =>   $pkgId,
			  	'c_pkg_desc'	=> $pkgpdesc,
			  	//'c_pkg_chkIN_date'		=> $pkgchkIN,
			  	//'c_pkg_chkOut_date'	    => $pkgchkOut,
			  	'c_total_amount'        => ($totalPerson),
			  	'c_total_person'        => ($totalPersonNumber),
			  	'bkash_payment'        => $obj['bkash'],
			  	

		);
	
		$query = $this -> db -> insert('total_booking',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function searchClients($obj){		
		$query = $this -> db -> get('total_booking')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function searchPakage($obj){		

	
		$query = $this -> db -> get('client_pakage')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}

	function deleteClients($id){
		$this->db->where('c_id', $id);
		$query=$this->db->delete('total_booking');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function deleteClientsById($id){
		$this->db->where('c_id', $id);
		$query=$this->db->delete('total_booking');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function deletePakage($id){
		$this->db->where('c_pkg_id', $id);
		$query=$this->db->delete('client_pakage');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function deletePakageById($id){
		$this->db->where('c_pkg_id', $id);
		$query=$this->db->delete('client_pakage');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
}