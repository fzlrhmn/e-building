<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kelurahan extends CI_Model {

	public function get_kelurahan($id_kelurahan = false)
	{
		$this->db->select('kelurahan.no_kecamatan, kelurahan.kelurahan, kelurahan.nomor, kecamatan.kecamatan');
		$this->db->from('kelurahan');
		if ($id_kelurahan!=false) {
			$this->db->where('id', $id_kelurahan);
		}
		$this->db->join('kecamatan', 'kecamatan.nomor = kelurahan.no_kecamatan', 'left');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_kelurahan_by_kecamatan($id_kecamatan = false)
	{
		$this->db->select('no_kecamatan, kelurahan, nomor');
		$this->db->from('kelurahan');
		if ($id_kecamatan!=false) {
			$this->db->where('no_kecamatan', $id_kecamatan);
		}
		$this->db->order_by('kelurahan', 'asc');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	// gembel
	public function get_kelurahan_geo($id_kecamatan = false, $nomor = false)
	{
		$this->db->select('asWkb(the_geom) as wkb, x(centroid(the_geom)) as xe, y(centroid(the_geom)) as ye, kelurahan, nomor, no_kecamatan, id_kel');
		$this->db->from('kelurahan');
		if($id_kecamatan!=""){
			$this->db->where('no_kecamatan', $id_kecamatan);
		}
		if($nomor!=""){
			$this->db->where('nomor', $nomor);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

}

/* End of file Model_kelurahan.php */
/* Location: ./application/models/Model_kelurahan.php */