<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kecamatan extends CI_Model {

	public function get_kecamatan($id_kecamatan = false)
	{
		$this->db->select('nomor, kecamatan');
		$this->db->from('kecamatan');
		if ($id_kecamatan!=false) {
			$this->db->where('id', $id_kecamatan);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_kecamatan_geo($id_kecamatan = false)
	{
		$this->db->select('asWkb(the_geom) as wkb, x(centroid(the_geom)) as xe, y(centroid(the_geom)) as ye, kecamatan, nomor');
		$this->db->from('kecamatan');
		if($id_kecamatan!=""){
			$this->db->where('nomor', $id_kecamatan);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

}

/* End of file model_jalan.php */
/* Location: ./application/models/model_jalan.php */