<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function login($username,$password)
	{ 
		$periksa = $this->db->get_where('admin',array('username'=>$username,'password'=> $password)); 
		if($periksa->num_rows()>0)
		{ 
			return 1;
		}
		else{
			return 0; 
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */