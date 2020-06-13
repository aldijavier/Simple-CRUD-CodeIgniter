<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// load form and url helpers
		$this->load->helper(array('form', 'url'));

        // load form_validation library
        // 
		$this->load->library('form_validation');
	}

	// List all your items
	public function index()
	{
		$data['content'] = $this->db->get('supplier');
		$this->load->view('viewSupplier', $data);
	}

	// Add a new item
	public function add()
	{	
		$this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
		$this->form_validation->set_rules('nama_supplier', 'Kode Supplier', 'required');
		$this->form_validation->set_rules('alamat', 'Kode Detil', 'required');
		$this->form_validation->set_rules('nomor_telepon', 'Produsen', 'required');
		//$this->form_validation->set_rules('userfile', 'Image of Product', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('addSupplier');
		}
		else {
			$data = array(
				'kode_supplier' => $this->input->post('kode_supplier'),
				'nama_supplier' => $this->input->post('nama_supplier'),
				'alamat' => $this->input->post('alamat'),
				'nomor_telepon' => $this->input->post('nomor_telepon')
			);
			//$this->supplier_model->supplier_crud($data,'supplier');
			$this->db->insert('supplier', $data);
			redirect('Supplier','refresh');
		}
	}

	//Add Item
	public function addInput()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('kode_supplier', $id);
		$data['content'] = $this->db->get('supplier');
		$this->load->view('editSupplier', $data);
	}

	public function actionupdate($id='')
	{
		$this->form_validation->set_rules('kode_supplier', 'Kode Obat', 'required');
		$this->form_validation->set_rules('nama_supplier', 'Kode Supplier', 'required');
		$this->form_validation->set_rules('alamat', 'Kode Detil', 'required');
		$this->form_validation->set_rules('nomor_telepon', 'Produsen', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('editSupplier');
		}
		else
		{
			$data = array(
				'kode_supplier' => $this->input->post('kode_supplier'),
				'nama_supplier' => $this->input->post('nama_supplier'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('telp'),
			);

			$this->db->where('kode_supplier', $id);
			//$this->supplier_model->edit_supplier($data,'supplier');
			$this->db->update('supplier', $data);
			redirect('Supplier','refresh');
		}
	}

	//Delete one item
	public function delete($id = NULL)
	{
		$this->db->where('kode_supplier', $id);
		//$this->supplier_model->delete_supplier($data,'supplier');
		$this->db->delete('supplier');
		redirect('Supplier','refresh');

	}

	public function read($id)
	{
		$this->db->where('kode_supplier', $id);
		$data['content'] = $this->db->get('supplier');

		$this->load->view('viewSupplier', $data);
	}
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
