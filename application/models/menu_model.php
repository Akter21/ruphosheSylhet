<?php
Class menu_model extends CI_Model{
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
 	
 	function getnamebyid($id){
 		$this->db->where('usr_id',$id);
 		$query = $this->db->get('admin')->result();
 		
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








