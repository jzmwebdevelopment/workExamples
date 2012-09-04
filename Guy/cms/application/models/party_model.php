<?php
class Party_model extends CI_Model {
	
	function __construct() {

	}
	
	function addAParty($userData = NULL)
	{
		$this->db->insert('aParty',$userData);
		return TRUE;
	}
	function getAPartyInformation()
	{
		$rows = array();
		$query = $this->db->get('aParty');
		
		foreach($query->result_array() as $row)
		{
			$rows[] = $row;
		
		}
		
		return $rows;
	}
	function editAParty($id, $userData)
	{
		$this->db->where('id', $id);
		$table = $this->db->get('aParty');
		
		$row = $table->row();
		
		if($table->num_rows() > 0)
		{
			$this->db->where('id', $id);
			$this->db->update('aParty', $userData);
		}	
	}
	function deleteAParty($id)
	{
		$this->db->where('id', $id);
		$table = $this->db->get('aParty');

		$row = $table->row_array();

		if($table->num_rows() > 0)
		{
			$this->db->where('id', $id);
			$this->db->delete('aParty');
		}	
	}
}
?>