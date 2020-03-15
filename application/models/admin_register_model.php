<?php


Class Admin_register_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->library('encrypt');

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
 	
 	function getAllAdmins(){
 		$this->db->order_by("usr_id","asec");
 		$query = $this->db->get('admin')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}

	function insertAdmin($obj){
				
		$data= array(
				'usr_pic'	    =>	 $obj['profilepic'],
				'usr_name'	    =>	 $obj['admname'],
				'usr_pass'	    =>	$this->encrypt->encode($obj['admpass']),
				'usr_add'	    =>	 $obj['admadd'],
				'usr_email'	    =>	 $obj['admemail'],
				'usr_reg_date'  =>	 date("Y-m-d H:i:s"),
				'usr_phone'	    =>	 $obj['admphone']
		);
	
		$query = $this -> db -> insert('admin',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	
	function checkAdmin($obj){
		$this->db->where('usr_name', $obj['admname']);
		$query = $this->db->get('admin')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
	
	function searchAdmins($obj){		
	$query = $this -> db -> get('admin')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function searchCustomers($obj){		
	$this->db->order_by("customer_reg_date","desc");
		$query = $this -> db -> get('customer')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function deleteAdmin($id){
		$this->db->where('usr_id', $id);
		$query=$this->db->delete('admin');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function deleteCus($id){
		$this->db->where('customer_id', $id);
		$query=$this->db->delete('customer');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function getAdminById($id){
		$this->db->where('usr_id', $id);
		$query = $this->db->get('admin')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	
	function updateAdmin($obj){
		
		$data= array(

			'usr_name'	    =>	 $obj['admname'],
			//'usr_add'	    =>	 $obj['admadd'],
			'usr_email'	    =>	 $obj['admemail'],
			'usr_phone'	    =>	 $obj['admphone'],
		);
	
	   	$this->db->where('usr_id', $obj['hidEx1']);
	   	$query=$this->db->update('admin', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}
}