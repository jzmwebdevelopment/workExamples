<?php
class Options_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function systemOptions()
	{
		$database = $this->db->get('options');
		
		if($database->num_rows() > 0)
		{
			$row = $database->result();
		}
		
		return $row;
	}
}
?>