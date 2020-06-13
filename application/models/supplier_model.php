<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {

	function supplier_crud($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function edit_supplier($data,$table)
	{
		$this->db->update($table, $data);
	}

	function delete_supplier($table)
	{
		$this->db->delete($table);
	}

}

/* End of file supplier_model.php */
/* Location: ./application/models/supplier_model.php */