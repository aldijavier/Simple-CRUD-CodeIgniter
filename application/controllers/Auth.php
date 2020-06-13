<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	} 

	function login()
	{ 
		if(isset($_POST['submit']))
		{
			$username = $this->input->post('username'); 
			$password = $this->input->post('password'); 
			$berhasil = $this->Login_model->login($username,$password); 
			if($berhasil == 1)
			{
				redirect('Product'); 
			}else{ 
				redirect('template/login');
			} 
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */