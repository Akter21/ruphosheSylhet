<?php


Class RegisteredCustomer_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();

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
 	
 	function getAllCustomer(){
 		$this->db->order_by("customer_id","asc");
 		$query = $this->db->get('customer')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	function get_transaction(){
		$query=$this->db->get('transaction')->result();			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}

	function deleteCustomerById($id){
		$this->db->where('customer_id', $id);
		$query=$this->db->delete('customer');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
}