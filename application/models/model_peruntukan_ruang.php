<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_peruntukan_ruang extends CI_Model {

	public function get_peruntukan_ruang($id = false)
	{
		$this->db->select('id, nama, warna');
		$this->db->from('ruang');
		if ($id!=false) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

}

/* End of file model_jalan.php */
/* Location: ./application/models/model_jalan.php */