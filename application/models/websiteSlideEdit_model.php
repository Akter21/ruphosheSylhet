<?php


Class websiteSlideEdit_model extends CI_Model{
	function __construct(){
        // Call the Model constructor
        parent::__construct();

 	}
 	function insertSlides($obj){
				
		$data= array(
			    'slides_image'		=>	 $obj['slidespic'],
			    'slides_des'		=>	 $obj['Slidedes'],
		);
		$query = $this -> db -> insert('slidesimage_table',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	
	function searchSlides($obj){		
		$query = $this -> db -> get('slidesimage_table')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function deleteSlides($id){
		$this->db->where('slides_id', $id);
		$query=$this->db->delete('slidesimage_table');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
}