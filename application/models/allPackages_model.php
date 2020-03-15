<?php


Class AllPackages_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();

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

 	function getPakageTotal(){		 
		$this->db->select('package_id,c_total_person');
		$this->db->select_sum('c_total_person');
		$this->db->group_by('package_id'); 		
 		$query = $this->db->get('total_booking')->result();
 		if(count($query)>0){
 			return $query;
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
}