<?php
class User_model extends CI_Model {
	
	function __construct() {

	}
	
	function check_login($username,$password) {
		
		$query = $this->db->query("SELECT id, fName, lName, email, password FROM users WHERE email = ? and password = ?", array($username, sha1($password)));
		
		return ($query->num_rows() == 1) ? $query->row() : FALSE;
		
	}
	function getAllUsers()
	{
		$rows = array();
		$query = $this->db->get('users');
		
		foreach($query->result_array() as $row)
		{
			$rows[] = $row;
		
		}
		
		return $rows;
	}
	
	function addUser($userData = NULL)
	{
		$this->db->insert('users',$userData);
		return TRUE;
	}
	
	function editUser($id, $userData)
	{
		$this->db->where('id', $id);
		$table = $this->db->get('users');
		
		$row = $table->row();
		
		if($table->num_rows() > 0)
		{
			$this->db->where('id', $id);
			$this->db->update('users', $userData);
		}
	}
	
	function deleteUser($id)
	{
		$this->db->where('id', $id);
		$table = $this->db->get('users');
		
		$row = $table->row_array();
		
		if($table->num_rows() > 0)
		{
			$this->db->where('id', $id);
			$this->db->delete('users');
		}	
	}
	
	function getUserInformation($id = NULL) {
		$this->db->where('id', $id);
		$query = $this->db->get('users', 1);
		
		if($query->num_rows() > 0) {
			$row = $query->result_array();
			return $row;
		}else{
			return FALSE;
		}
	}
	
}
?>