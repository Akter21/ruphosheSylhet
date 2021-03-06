<?php


Class Packageview_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();

 	}
 	
 	function getAllpackages(){
 		//$this->db->order_by("issue_date","desc");
 		$query = $this->db->get('client_pakage')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
	
	function searchUser($obj){		

	
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
		 $this->db->select('*');
		 $this->db->select_sum('c_total_person');
		 $this->db->join('total_booking','client_pakage.c_pkg_id=total_booking.package_id','left');
		 $this->db->group_by('c_pkg_id');
		$query = $this -> db -> get('client_pakage')->result();
		// echo $this->db->last_query();
		// echo "<pre>";
		// 	var_dump($query);
		// echo "</pre>";
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}

	function insertPackage($obj){
				
		$data= array(
			    'total_person'		=>	 $obj['totalperson'],
			    'p_pic'				=>	 $obj['img'],
				'c_pkg_name'	    =>	 $obj['pname'],
				'c_pkg_cost'	    =>	 $obj['pcost'],
				'c_pkg_desc'	    =>	 $obj['pdesc'],
				'c_pkg_create_date'	=>	 $obj['pcredate'],
				'c_pkg_chkIN_date'	=>	 $obj['chkINdate'],
				'c_pkg_chkOut_date'	=>	 $obj['chkOutdate'],


		);
	
		$query = $this -> db -> insert('client_pakage',$data);

	//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
    
    function deleteClient($id){
		$this->db->where('c_id', $id);
		$query=$this->db->delete('total_booking');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function deleteClientById($id){
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
	
	function getPackageById($id){
		$this->db->where('c_pkg_id', $id);
		$query = $this->db->get('client_pakage')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	
	function updatePackage($obj){
		
		$data= array(
			'c_pkg_name'	    =>	 $obj['pname'],
			//'usr_add'	    =>	 $obj['admadd'],
			'c_pkg_cost'	    =>	 $obj['pcost'],
			'total_person'	    =>	 $obj['totalperson'],
		);
	
	   	$this->db->where('c_pkg_id', $obj['hidEx1']);
	   	$query=$this->db->update('client_pakage', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}
}