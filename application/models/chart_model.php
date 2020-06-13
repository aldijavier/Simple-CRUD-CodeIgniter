<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model {

	function get_data(){
		//select senjata ,SUM(STOK) AS STOK FROM BARANG GROUP BY MERK");
		$query = $this->db->query('SELECT nama_senjata, SUM(jumlah_stok) AS stok FROM senjata GROUP BY nama_senjata');
		if($query->num_rows() > 0){
			foreach($query->result() as $data){
				$hasil[] = $data;
			}
			return $hasil;
		}
		//$this->db->select('nama_senjata', SUM('jumlah_stok');
		//$result = $this->db->get('senjata');
		//return $result;
	//}
	}
}

/* End of file chart_mode.php */
/* Location: ./application/models/chart_mode.php */