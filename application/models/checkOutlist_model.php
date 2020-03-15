<?php


Class CheckOutlist_model extends CI_Model{
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

	// function getCheckOutlist(){
	// 	$query = $this->db->get('checkOutlist')->result();
 // 		//$this->db->order_by("book_date","asen");
 // 		if(count($query)>0){
 // 			return $query;
 // 		}
 // 		else{
 // 			return false;
 // 		}
 // 	}


 	function getCheckOutlist(){
		$this->db->where('booking_status','CHECKOUT');
		$this->db->join('customer','customer.customer_id=total_booking.customer_id');
		$query=$this->db->get('total_booking')->result();
 		//$this->db->order_by("book_date","asen");
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
		// function getCheckInlist(){
		// $this->db->select('*');
		// $this->db->from('checkinlist');
		// $this->db->join('total_booking','total_booking.c_id=checkinlist.c_id');
		// $query = $this->db->get();  
		// return $query->result(); 
		// }

 // 	function deleteCheckOutlistById(){
	// 	$this->db->where('checkOutlist_id', $id);
	// 	$query=$this->db->delete('checkOutlist');			
	// 	if($query == 1){
	// 		return true;
	// 	}
	// 	else{
	// 		return false;
	// 	}			
	// }
}