<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('chart_model');
	}
	public function index()
	{
		$x['data']=$this->chart_model->get_data();
		$this->load->view('chart_view',$x);
		/*$data = $this->chart_model->get_data()->result();
		$x['data'] = json_encode($data);
		$this->load->view('chart_view', $x);*/
	}
}



/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */