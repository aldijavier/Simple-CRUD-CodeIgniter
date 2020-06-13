<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$data['content'] = $this->db->get('senjata');
		$this->load->view('viewSenjata', $data);
	}

	// Add a new item
	public function add()
	{	
		$this->form_validation->set_rules('kode_senjata', 'Kode Senjata', 'required');
		$this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
		$this->form_validation->set_rules('nama_senjata', 'Nama Senjata', 'required');
		$this->form_validation->set_rules('harga', 'Harga Senjata', 'required');
		$this->form_validation->set_rules('jumlah_stok', 'Jumlah Stok Senjata', 'required');
		//$this->form_validation->set_rules('userfile', 'Image of Product', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('addSenjata');
		}
		else
		{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = 300;
			$config['max_width']            = 2000;
			$config['max_height']           = 2000;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('foto'))
			{
				$this->load->view('addSenjata');
			}
			else {
				$gambar = $this->upload->data();
				$data = array(
					'kode_senjata' => $this->input->post('kode_senjata'),
					'kode_supplier' => $this->input->post('kode_supplier'),
					'nama_senjata' => $this->input->post('nama_senjata'),
					'harga' => $this->input->post('harga'),
					'jumlah_stok' => $this->input->post('jumlah_stok'),
					'foto' => $gambar['file_name']
				);
				//$this->senjata_model->senjata_crud($data,'senjata');
				$this->db->insert('senjata', $data);
				redirect('Product','refresh');
			}
		}
	}

	//Add Item
	public function addInput()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('kode_senjata', $id);
		$data['content'] = $this->db->get('senjata');
		$this->load->view('editSenjata', $data);
	}

	public function actionupdate($id='')
	{
		$this->form_validation->set_rules('kode_senjata', 'Kode Senjata', 'required');
		$this->form_validation->set_rules('kode_supplier', 'Kode Supplier', 'required');
		$this->form_validation->set_rules('nama_senjata', 'Nama Senjata', 'required');
		$this->form_validation->set_rules('harga', 'Harga Senjata', 'required');
		$this->form_validation->set_rules('jumlah_stok', 'Jumlah Stok Senjata', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('editSenjata');
		}
		else
		{
			if($_FILES['foto']['name'] != ''){
				$config['upload_path']          = './uploads/';
				$config['allowed_types']        = 'jpg|png';
				$config['max_size']             = 300;
				$config['max_width']            = 2000;
				$config['max_height']           = 2000;

				$this->load->library('upload', $config);
				

				if ( ! $this->upload->do_upload('foto'))
				{
					$this->load->view('editSenjata');
				}
				else{
					$gambar = $this->upload->data();
					$data = array(
						'kode_senjata' => $this->input->post('kode_senjata'),
						'kode_supplier' => $this->input->post('kode_supplier'),
						'nama_senjata' => $this->input->post('nama_senjata'),
						'harga' => $this->input->post('harga'),
						'jumlah_stok' => $this->input->post('jumlah_stok'),
						'foto' => $gambar['file_name']
					);

					$this->db->where('kode_senjata', $id);
					//$this->senjata_model->edit_senjata($data,'senjata');
					$this->db->update('senjata', $data);
					redirect('Product','refresh');
				}
			}

			else{
				$data = array(
					'kode_senjata' => $this->input->post('kode_senjata'),
					'kode_supplier' => $this->input->post('kode_supplier'),
					'nama_senjata' => $this->input->post('nama_senjata'),
					'harga' => $this->input->post('harga'),
					'jumlah_stok' => $this->input->post('jumlah_stok'),
					'foto' => $gambar['file_name']
				);

				$this->db->where('kode_senjata', $id);
				//$this->senjata_model->edit_senjata($data,'senjata');
				$this->db->update('senjata', $data);
				redirect('Product','refresh');	
			}
		}
	}



	//Delete one item
	public function delete($id = NULL)
	{
		$this->db->where('kode_senjata', $id);
		//$this->senjata_model->delete_senjata($data,'senjata');
		$this->db->delete('senjata');
		redirect('product','refresh');

	}

	public function read($id)
	{
		$this->db->where('kode_senjata', $id);
		$data['content'] = $this->db->get('senjata');

		$this->load->view('viewProduct', $data);
	}
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
