<?php


Class CheckInlist_model extends CI_Model{
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

	//function getCheckInlist(){
		//$query = $this->db->get('checkinlist')->result();
 		//$this->db->order_by("book_date","asen");
 	// 	if(count($query)>0){
 	// 		return $query;
 	// 	}
 	// 	else{
 	// 		return false;
 	// 	}
 	// }


 	function getCheckInlist(){
		$this->db->where('booking_status','CHECKIN');
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
function getarchivelist(){
		$this->db->where('booking_status','ARCHIVE');
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
	// 	$this->db->select('*');
	// 	$this->db->from('checkinlist');
	// 	$this->db->join('total_booking','total_booking.c_id=checkinlist.c_id');
	// 	$query = $this->db->get();  
	// 	return $query->result(); 
	// }
 	function deleteCheckInlistById($id){
		$this->db->where('checkInlist_id', $id);
		$query=$this->db->delete('checkinlist');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	function deleteArchiveById($id){
		$this->db->where('c_id', $id);
		$query=$this->db->delete('total_booking');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}	
}