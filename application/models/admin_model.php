<?php
/**
 * @author		
 * @copyright  	
 * @license
 * @version    	SVN: $Id$
 * @since      	File available since Release 1.0.1
 * @deprecated	
 * Date			24/01/15		
 */

Class Admin_model extends CI_Model{
	function __construct(){
        
        parent::__construct();
        $this->load->library('encrypt');

 	}
 
	function login($user, $pass){
	
		$this -> db -> where('usr_name',$user);
		$query = $this -> db -> get('admin')->result();
	

		if(count($query)!=0){
			if($this->encrypt->decode($query[0]->usr_pass)==$pass){
				return $query[0];
			}
			else{
				return false;
			}				
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
	function get_message(){
			$query = $this->db->get('contact')->result();
 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
	}	
	function get_transaction(){
 		$this->db->order_by("transaction_id","asec");
 		$query = $this->db->get('transaction')->result();
 		 		
 		if(count($query)>0){
 			return $query;
 		}
 		else{
 			return false;
 		}
 	}


	function insertTransaction($obj){
				
		$data= array(
				'transaction_ref_id'	    =>	 $obj['transid'],
				'transaction_amount'	    =>	 $obj['transamount'],
				'transation_date'  =>	 date("Y-m-d H:i:s"),

		);
	
		$query = $this -> db -> insert('transaction',$data);
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function deleteTransactionById($id){
		$this->db->where('transaction_id', $id);
		$query=$this->db->delete('transaction');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}			
	}






























































































































































































	function getAllUsers(){
		$query = $this->db->get('admin')->result();
			
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}
	}
	
		
	function getUserById($id){

		$this->db->where('usr_id', $id);
		$query = $this->db->get('admin')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
	
	function confirmUserByCode($code){

		$data = array(
				'email_notified' => gmdate("Y-m-d H:i:s"),
				'created_on' => gmdate("Y-m-d H:i:s")
		);
		
		$this->db->where('email_notified', $code);
		$query = $this->db->update('admin', $data);		

		return ($this->db->affected_rows() > 0) ? TRUE : FALSE; 		
	}
	
	function checkUserExistence($name){
		$this->db->where('usr_name', $name);

		$query = $this->db->get('admin')->result();
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}	
	}
	
	
	function record_count() {
		return $this->db->count_all("admin");		
	}
	


   function fetch_users($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("admin");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

	function getUsers(){
//		$this -> db -> select('id, type_id, name,title, first_name, last_name, email, dob, description, pass, res_date, last_log, active_code, address_1, address_2, address_3, address_4, post, phone, mobile');
		
//		$this -> db -> from('user, address');

//		$this -> db -> where('user.id = address.object_id');
	
		$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('admin');
	
	
		$query = $this -> db -> get();
		
		if($query -> num_rows() > 0){
			
			return $query;
		}
		else{
			return false;
		}
	}
	
	function getDefaultType(){
		$this->db->where('default', 'Y');
		$query = $this->db->get('user_type')->result();
		
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
	
	
	function searchByLastName($lastName){

		$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('admin');
 		$this->db->like('last_name', $lastName,'after'); 
	
		$query = $this -> db -> get();

		if($query -> num_rows() > 0){
			return $query;
		}
		else{
			return false;
		}
	}	
	
	function searchUsers($obj){
		
		$tzone = $this->config->item('time_zone');
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($tzone);
		
		if($obj['fname'])	$this->db->like('usr_fname', $obj['fname'], 'after');
		if($obj['lname'])	$this->db->like('usr_lname', $obj['lname'], 'after');
		if($obj['userType'])$this->db->like('usr_user_type', $obj['userType'], 'after');
		if($obj['dob']) 	$this->db->like('usr_dob', date("Y-m-d", strtotime($obj['dob'])), 'after');
		if($obj['address'])	$this->db->like('usr_add', $obj['address'], 'after');
		if($obj['email'])	$this->db->like('usr_email', $obj['email'], 'after');
		if($obj['phone'])	$this->db->like('usr_phone', $obj['phone'], 'both');
		if($obj['name'])	$this->db->like('usr_name', $obj['name'], 'after');
		$this->db->where('usr_view', 'S');
		$query = $this -> db -> get('admin')->result();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	
	}
	
	function addUser($obj){
		$tzone = $this->config->item('time_zone');
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($tzone);
				
		$usr = array(
		'usr_name'		=>	$obj['name'],
		'usr_fname'		=>	$obj['fname'],
		'usr_lname'		=>	$obj['lname'],
		'usr_pass'		=>	$this->encrypt->encode($obj['password']),
		'usr_dob'		=>	date("Y-m-d", strtotime($obj['dob'])),
		'usr_email'		=>	$obj['email'],
		'usr_phone'		=>	$obj['phone'],
		'usr_user_type'	=>	$obj['userType'], 
		'usr_add'		=>	$obj['address'],
		'usr_pic'		=>	$obj['pic'],
		'usr_status'	=>	(isset($obj['block']) ? $obj['block']:'L')
		);
		
		$query = $this -> db -> insert('admin',$usr);
	
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function updateuser($obj){
		$tzone = $this->config->item('time_zone');
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($tzone);
		
		$usr = array(
		'usr_name'		=>	$obj['name'],
		'usr_fname'		=>	$obj['fname'],
		'usr_lname'		=>	$obj['lname'],
		'usr_pass'		=>	$this->encrypt->encode($obj['password']),
		'usr_dob'		=>	date("Y-m-d", strtotime($obj['dob'])),
		'usr_email'		=>	$obj['email'],
		'usr_phone'		=>	$obj['phone'],
		'usr_user_type'	=>	$obj['userType'], 
		'usr_add'		=>	$obj['address'],
		'usr_pic'		=>	$obj['pic'],
		'usr_status'	=>	(isset($obj['block']) ? $obj['block']:'L')
		);
			
	   	$this->db->where('usr_id', $obj['hidEx1']);
	   	$query=$this->db->update('admin', $usr);

	   	if($query == 1){
			return $obj['hidEx1'];
		}
		else{
			return false;
		}
	}
	function deleteUser($id){
		$this->db->where('usr_id', $id);
		$query=$this->db->delete('admin');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}		
	}
	
	/*********************staff type*****************************/

	function insertStaffType($obj,$store){
				
		$data = array(
		'styp_name'		=>	$obj['typName'],
		'styp_desc'		=>	$obj['typDesc'],
		'styp_store_id'	=>	$store
		);
		
		$query = $this -> db -> insert('staff_type',$data);
	
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function searchStaffType($obj,$store){

		if($obj['typName'])	$this->db->like('styp_name', $obj['typName'], 'after');
		if($obj['typDesc'])	$this->db->like('styp_desc', $obj['typDesc'], 'both');
		$this->db->where('styp_store_id', $store);
		$query = $this -> db -> get('staff_type')->result();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	function getAllStaffTypes($store){
		$this->db->where('styp_store_id', $store);
		$query = $this -> db -> get('staff_type')->result();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}

	function searchStaffTypeById($id){
		$this->db->where('styp_id', $id);
		$query = $this->db->get('staff_type')->result();
		
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}
	}
	function updateStaffType($obj){
		$data = array(
				'styp_name' => $obj['typName'],
				'styp_desc' => $obj['typDesc']
		);
		
		$this->db->where('styp_id', $obj['hidStaffTypeId']);
		$query = $this->db->update('staff_type', $data);		

	   	if($query == 1){
			return $obj['hidStaffTypeId'];
		}
		else{
			return false;
		}
	}

	function deleteStaffTypeById($id){
		$this->db->where('styp_id', $id);
		$query=$this->db->delete('staff_type');			
		if($query == 1){
			return true;
		}
		else{
			return false;
		}				
	}

	/***********Staff****************/

	function insertStaff($obj,$store){

		$data = array(
		'stf_type'		=>	$obj['staffType'],
		'stf_store_id'	=>	$store,
		'stf_fname'		=>	$obj['fname'],
		'stf_lname'		=>	$obj['lname'],
		'stf_sex'		=>	$obj['sex'],
		'stf_dob'		=>	date('Y-m-d', strtotime($obj['dateinput'])),
		'stf_pic'		=>	$obj['imgurl'],
		'stf_caddress'	=>	$obj['addressC'],
		'stf_paddress'	=>	$obj['addressP'],
		'stf_email'		=>	$obj['email'],
		'stf_phone'		=>	$obj['phone'],
		'stf_econtact'	=>	$obj['econtact'],
		'stf_nid'		=>	$obj['nid'],
		'stf_status'	=>	'L'
		);
		
		$query = $this -> db -> insert('staff',$data);
	
		if($query == 1){
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}
	function searchStaff($obj,$store){
		if(isset($obj['staffType']))	if($obj['staffType']!='')	$this->db->where('stf_type', $obj['staffType']);
		if(isset($obj['fname']))		if($obj['fname']!='')		$this->db->like('stf_fname', $obj['fname'], 'after');
		if(isset($obj['lname'])) 		if($obj['lname']!='')		$this->db->like('stf_lname', $obj['lname'], 'after');
		if(isset($obj['sex']))			if($obj['sex']!='')			$this->db->where('stf_sex', $obj['sex']);
		if(isset($obj['dateinput'])) 	if($obj['dateinput']!='')	$this->db->where('stf_dob', date('Y-m-d',strtotime($obj['dateinput'])));
		if(isset($obj['addressC'])) 	if($obj['addressC']!='')	$this->db->like('stf_caddress', $obj['addressC'], 'both');
		if(isset($obj['addressP'])) 	if($obj['addressP']!='')	$this->db->like('stf_paddress', $obj['addressP'], 'both');
		if(isset($obj['email'])) 		if($obj['email']!='')		$this->db->like('stf_email', $obj['email'], 'after');
		if(isset($obj['phone'])) 		if($obj['phone']!='')		$this->db->like('stf_phone', $obj['phone'], 'after');
		if(isset($obj['econtact'])) 	if($obj['econtact']!='')	$this->db->like('stf_econtact', $obj['econtact'], 'both');
		if(isset($obj['nid'])) 			if($obj['nid']!='')			$this->db->where('stf_nid', $obj['nid']);
		$this->db->where('stf_status','L');
		$this->db->where('stf_store_id', $store);
		
		$query = $this -> db -> get('staff')->result();
//echo $this->db->last_query();	
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}



	function getStaffById($id){
		$this->db->where('stf_id', $id);
		$query = $this->db->get('staff')->result();
		
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}
	function updateStaff($obj){
		
		$data = array(
		'stf_type'		=>	$obj['staffType'],
		'stf_fname'		=>	$obj['fname'],
		'stf_lname'		=>	$obj['lname'],
		'stf_sex'		=>	$obj['sex'],
		'stf_dob'		=>	date('Y-m-d', strtotime($obj['dateinput'])),
		'stf_pic'		=>	$obj['imgurl'],
		'stf_caddress'	=>	$obj['addressC'],
		'stf_paddress'	=>	$obj['addressP'],
		'stf_email'		=>	$obj['email'],
		'stf_phone'		=>	$obj['phone'],
		'stf_econtact'	=>	$obj['econtact'],
		'stf_nid'		=>	$obj['nid'],
		'stf_status'	=>	'L'
		);
		
		$this->db->where('stf_id', $obj['hidStaffId']);
		$query = $this->db->update('staff', $data);		

	   	if($query == 1){
			return $obj['hidStaffId'];
		}
		else{
			return false;
		}
	}
	function deleteStaffById($id){
		$data = array(
		'stf_status'	=>	'D'
		);
		
		$this->db->where('stf_id', $id);
		$query = $this->db->update('staff', $data);		

	   	if($query == 1){
			return $id;
		}
		else{
			return false;
		}

	}
	function getAllLiveStaffs($store){
		$this->db->where('stf_status', 'L');
		$this->db->where('stf_store_id', $store);
		$query = $this -> db -> get('staff')->result();
		
		if(count($query)>0){
			return $query;
		}
		else{
			return false;
		}		
	}
	function getStaffWithSalaryById($id){
		$this->db->where('stf_id', $id);
		$this->db->join('salary', 'staff.stf_id=salary.sal_staff_id', 'left');
		$query = $this->db->get('staff')->result();
		
		if(count($query)>0){
			return $query[0];
		}
		else{
			return false;	
		}

	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
