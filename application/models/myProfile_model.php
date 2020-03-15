<?php


Class MyProfile_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
  
 	}
 	
 	function getClientId($id){
		$this->db->where('Customer_id', $id);
		$query = $this->db->get('customer')->result();
		
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	function getProfileById($id){
		$this->db->where('customer_id', $id);
		$query = $this->db->get('customer')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	function updateProfile($obj){
		
		$data= array(
			'customer_name'	    =>	 $obj['cusname'],
			'customer_address'	    =>	 $obj['cusaddress'],
			'customer_phone'	    =>	 $obj['cusphone'],
			'customer_email'	    =>	 $obj['cusemail'],
		);
	
	   	$this->db->where('customer_id', $obj['hidEx1']);
	   	$query=$this->db->update('customer', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}


 	
 	function getMyAllBookings(){
 		$query = $this->db->get('total_booking')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function getMyProfileByCustomerId($id){
 		$this->db->where('customer_id',$id);
 		$query = $this->db->get('customer')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}

 	function searchpackage(){
 		$query = $this->db->get('client_pakage')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
}








