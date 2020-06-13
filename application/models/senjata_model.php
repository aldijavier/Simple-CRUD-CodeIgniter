<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Senjata_model extends CI_Model {

	function senjata_crud($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function edit_senjata($data,$table)
	{
		$this->db->update($table, $data);
	}

	function delete_senjata($table)
	{
		$this->db->delete($table);
	}
	

}

/* End of file senjata_model.php */
/* Location: ./application/models/senjata_model.php */