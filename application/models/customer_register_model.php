<?php


Class Customer_register_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->library('encrypt');

 	}
	function insertMessage($obj){
				
		$data= array(
			'name'	     	=>	 $obj['name'],
			'email'		=>	 $obj['email'],
			//'customer_phone'	 	=>	 $obj['phone'],
			'message'	    =>	 $obj['message'],
			'date'	    =>	 date("Y-m-d H:i:s"),
		);
	
		$query = $this -> db -> insert('contact',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function insertCustomer($obj){
				
		$data= array(
			'customer_name'	     	=>	 $obj['cusname'],
			'customer_pass'	     	=>	$this->encrypt->encode($obj['cuspass']),
			'customer_address'		=>	 $obj['cusaddress'],
			'customer_phone'	 	=>	 $obj['cusphone'],
			'customer_email'	    =>	 $obj['cusemail'],
			'customer_reg_date'	    =>	 date("Y-m-d H:i:s"),
		);
	
		$query = $this -> db -> insert('customer',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function checkCustomer($obj){
		$this->db->where('customer_name', $obj['cusname']);
		$query = $this->db->get('customer')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
}