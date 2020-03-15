<?php


Class Cpanel_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();

 	}
	function checkList($obj){
		$this->db->where('adult', $obj['adult']);
		$query = $this->db->get('checkinlist')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}

	function get_amount(){
		$sql="SELECT sum(c_total_amount) as c_total_amount from total_booking";
		$result = $this->db->query($sql);
		return $result->row()->c_total_amount;
	}

	function get_customer(){
		$sql="SELECT count(customer_id) as customer_id from customer";
		$result = $this->db->query($sql);
		return $result->row()->customer_id;
	}

	function get_booking(){
		$sql="SELECT count(c_total_amount) as c_total_amount from total_booking";
		$result = $this->db->query($sql);
		return $result->row()->c_total_amount;
	}
	function get_admin(){
		$sql="SELECT count(usr_id) as usr_id from admin";
		$result = $this->db->query($sql);
		return $result->row()->usr_id;
	}




 	// function getAllClients(){
 	// 	$this->db->order_by("issue_date","desc");
 	// 	$query = $this->db->get('total_booking')->result();
 		 		
 	// 	if(count($query)>0){
 	// 		return $query;
 	// 	}
 	// 	else{
 	// 		return false;
 	// 	}
 	// }

 	function getAllClients(){
		$this->db->select('*');
		$this->db->from('total_booking');
		$this->db->join('customer','customer.customer_id=total_booking.customer_id');
		$this->db->order_by("issue_date","desc");
		$query = $this->db->get();  
		return $query->result(); 		

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

 	function insertToCheckInlist($obj){

		$bookingId=	$obj['hidEx1'];
		$bookingId=$obj['hidBookingId_'.$bookingId];
		$customerName=$obj['hidCustomerName_'.$bookingId];
		$customerId=$obj['hidCustomerId_'.$bookingId];
		$adult=$obj['hidadult_'.$bookingId];
		$child=$obj['hidchild_'.$bookingId];
		$total=$obj['hidtotal_'.$bookingId];
		$packageId=$obj['hidPgkid_'.$bookingId];
		$packageName=$obj['hidPkgName_'.$bookingId];
		$checkIn=$obj['hidCheckIN_'.$bookingId];
		$checkOut=$obj['hidCheckOut_'.$bookingId];
		$amount=$obj['hidAmount_'.$bookingId];
		$bkash=$obj['hidBkashpayment_'.$bookingId];
		$card=$obj['hidCardpayment_'.$bookingId];
		
		$data= array(
			'time' => date("Y-m-d H:i:s"),
			'booking_id'			=> $bookingId,
			'booked_name'			=> $customerName,
			'ci_customer_id'		=> $customerId,
			'adult'					=> $adult,
			'child'					=> $child,
			'totalperson'			=> $total,
			'pacakeid'				=> $packageId,
			'packagename'			=> $packageName,
			'checkin'				=> $checkIn,
			'checkout'				=> $checkOut,
			'amount'				=> $amount,
			'bkash'					=> $bkash,
			'card'					=> $card,

		);
		$query = $this -> db -> insert('checkinlist',$data);
		if($query == 1){
			return $this->db->insert_id();
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
	
	function get_message(){
			$query = $this->db->get('contact')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
	}
	function deleteMessageById($id){
		$this->db->where('contact_id', $id);
		$query=$this->db->delete('contact');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
}