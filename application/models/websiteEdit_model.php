<?php


Class WebsiteEdit_model extends CI_Model{
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

	function insertTeamMembers($obj){
				
		$data= array(
				't_membersimg'	=>	 $obj['teamMembersimages'],
			    't_name'		=>	 $obj['teamMemName'],
				't_post'	    =>	 $obj['teamMemPost'],
				// 't_facebook'	=>	 $obj['TeamMemFacebook'],
				// 't_twitter'	    =>	 $obj['TeamMemTwitter'],
				// 't_instagram'	=>	 $obj['TeamMemInstagram'],
		);
		$query = $this -> db -> insert('teammembers_table',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

 	function getTeamMemberById($id){
		$this->db->where('t_id', $id);
		$query = $this->db->get('teammembers_table')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}	
	
	function getTeamMember(){		
		$query = $this->db->get('teammembers_table')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	
	function updateTeam($obj){
		
		$data= array(
			't_name'	    =>	 $obj['teamMemName'],
			't_post'	    =>	 $obj['teamMemPost'],
		);
	
	   	$this->db->where('t_id', $obj['hidEx1']);
	   	$query=$this->db->update('teammembers_table', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}

	
	function deleteTeamMemberById($id){
		$this->db->where('t_id', $id);
		$query=$this->db->delete('teammembers_table');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function insertGallery($obj){
				
		$data= array(
				'gallery_img'	    =>	 $obj['galleryimages'],
			    'gallery_desc'		=>	 $obj['gallerydes'],
		);
		$query = $this -> db -> insert('gallery',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function searchGallery($obj){		
	$query = $this -> db -> get('gallery')->result();
	//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	function getGallery(){		
		$query = $this->db->get('gallery')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}		
	
	function deleteGalleryById($id){
		$this->db->where('p_id', $id);
		$query=$this->db->delete('gallery');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
	
	function insertAboutus($obj){
		$data= array(
			    'aboutus_image'		=>	 $obj['aboutUsimages'],
			    'about_des'		=>	 $obj['aboutUsdes'],
		);
		$query = $this -> db -> insert('about_us',$data);
		//echo $this->db->last_query();
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function getAboutById($id){
		$this->db->where('aboutus_id', $id);
		$query = $this->db->get('about_us')->result();
//		echo $this->db->last_query();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}	
	function getAboutus(){		
		$query = $this->db->get('about_us')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}	
	function searchaboutus($obj){		
		$query = $this -> db -> get('about_us')->result();
		//echo $this->db->last_query();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}

	
	function updateAbout($obj){
		
		$data= array(
			'about_des'	    =>	 $obj['aboutUsdes'],
		);
	
	   	$this->db->where('aboutus_id', $obj['hidEx1']);
	   	$query=$this->db->update('about_us', $data);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}	
	}	
	
	function deleteAboutus($id){
		$this->db->where('aboutus_id', $id);
		$query=$this->db->delete('about_us');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}
}