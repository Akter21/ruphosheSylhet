<?php


Class Welcome_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();
  
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
 	function getallpackage(){
		$this->db->where('package_status','ACTIVE');
		$query=$this->db->get('client_pakage')->result();
 		//$this->db->order_by("book_date","asen");
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
 	
 	function searchTeamMembers(){
 		$query = $this->db->get('teammembers_table')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function searchGallery(){
 		$query = $this->db->get('gallery')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
 	
 	function searchAboutus(){
 		$query = $this->db->get('about_us')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}
}
