<?php


Class Mypackages_model extends CI_Model{
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
 	
 	function getMyAllBookings(){
 		$query = $this->db->get('total_booking')->result();
 		
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
