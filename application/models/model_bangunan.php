<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_bangunan extends CI_Model {

	public function get_bangunan($id_bangunan=false)
	{
		$this->db->select('bangunan.id, bangunan.nomor, bangunan.no_imb, bangunan.a1a2, bangunan.a1a9, bangunan.a1a3, bangunan.a1a4, bangunan.a1a5, bangunan.a1a6, bangunan.a1a7, bangunan.a1a8, bangunan.a21, bangunan.a22, bangunan.a25, bangunan.a26, bangunan.a27, kecamatan.kecamatan');
		$this->db->from('bangunan');
		if ($id_bangunan!=false) {
			$this->db->where('bangunan.id', $id_bangunan);
		}
		$this->db->join('kecamatan', 'bangunan.a26 = kecamatan.nomor', 'left');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_bangunan_edit($id_bangunan=false)
	{
		$this->db->select('bangunan.*, kecamatan.kecamatan, tanah.nama as penggunaan_tanah, ruang.nama as penggunaan_ruang');
		$this->db->from('bangunan');
		if ($id_bangunan!=false) {
			$this->db->where('bangunan.id', $id_bangunan);
		}
		$this->db->join('kecamatan', 'bangunan.a26 = kecamatan.nomor', 'left');
		$this->db->join('tanah', 'bangunan.peruntukan_tanah = tanah.id', 'left');
		$this->db->join('ruang', 'bangunan.peruntukan_ruang = ruang.id', 'left');
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function get_bangunan_detail($id_bangunan=false)
	{
		$this->db->select('bangunan.*, kecamatan.kecamatan, tanah.nama as penggunaan_tanah, ruang.nama as penggunaan_ruang');
		$this->db->from('bangunan');
		if ($id_bangunan!=false) {
			$this->db->where('bangunan.id', $id_bangunan);
		}
		$this->db->join('kecamatan', 'bangunan.a26 = kecamatan.nomor', 'left');
		$this->db->join('tanah', 'bangunan.peruntukan_tanah = tanah.id', 'left');
		$this->db->join('ruang', 'bangunan.peruntukan_ruang = ruang.id', 'left');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_kelurahan($id_kecamatan, $nomor_kelurahan)
	{
		$this->db->select('kelurahan');
		$this->db->where('no_kecamatan', $id_kecamatan);
		$this->db->where('nomor', $nomor_kelurahan);
		$this->db->from('kelurahan');
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function get_nomor_bangunan($nomor)
	{
		$this->db->select('MAX(nomor) as nomor');
		$this->db->like('nomor', $nomor);
		$this->db->from('bangunan');
		$query = $this->db->get();
		$result = $query->row();
		return $result->nomor;
	}

	public function upload_foto($name, $file_name)
	{
		// $file_ = explode('.', $file_name);
		// $config['file_name']		= '';

		$config['upload_path'] 		= './upload/';
		$config['allowed_types'] 	= '*';
		$config['max_size']			= '0';
		$config['file_name']		= $file_name;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($name)) {
			$data = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
		}

		return $data['upload_data']['file_name'];
	}

	public function insert_bangunan($data)
	{
		$this->db->insert('bangunan', $data);
	}

	public function update_bangunan($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('bangunan', $data);
	}

	public function delete_bangunan($id_bangunan)
	{
		$this->db->where('id', $id_bangunan);
		$this->db->delete('bangunan');
	}

	public function search_bangunan()
	{
		$this->db->select('bangunan.id, bangunan.nomor, bangunan.no_imb, bangunan.a1a2, bangunan.a1a9, bangunan.a1a3, bangunan.a1a4, bangunan.a1a5, bangunan.a1a6, bangunan.a1a7, bangunan.a1a8, bangunan.a21, bangunan.a22, bangunan.a25, bangunan.a26, bangunan.a27, kecamatan.kecamatan');
		$this->db->from('bangunan');
		$this->db->join('kecamatan', 'bangunan.a26 = kecamatan.nomor', 'left');
		
		if ( $this->input->post('keyword') != '' ) {
			$this->db->like('a1a2', $this->input->post('keyword'));
		}

		if ( $this->input->post('a26') != '' ) {
			$this->db->where('a26', $this->input->post('a26'));	
		}

		if ( $this->input->post('a25') != '' ) {
			$this->db->where('a25', $this->input->post('a25'));
		}
		
		if ( $this->input->post('peruntukan_tanah') != '' ) {
			$this->db->where('peruntukan_tanah', $this->input->post('peruntukan_tanah'));
		}
		
		if ( $this->input->post('peruntukan_ruang') != '' ) {
			$this->db->where('peruntukan_ruang', $this->input->post('peruntukan_ruang'));
		}
		
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function report_bangunan( $params, $value )
	{
		$this->db->select('count(bangunan.id) as total');
		$this->db->from('bangunan');
		$this->db->where($params , $value);
		$query = $this->db->get();
		$result = $query->row();
		return $result->total;
	}

	public function report_bangunan_kelurahan( $kecamatan, $kelurahan )
	{
		$this->db->select('count(bangunan.id) as total');
		$this->db->from('bangunan');
		$this->db->where('a26' , $kecamatan);
		$this->db->where('a25' , $kelurahan);
		$query = $this->db->get();
		$result = $query->row();
		return $result->total;
	}

	//gembel
	public function get_bangunan_by_rtrw($kecamatan=false, $kelurahan=false, $rw=false, $rt=false)
	{
		$this->db->select('bangunan.id, bangunan.nomor, bangunan.no_imb, bangunan.a1a2, bangunan.a1a9, bangunan.a1a3, bangunan.a1a4, bangunan.a1a5, bangunan.a1a6, bangunan.a1a7, bangunan.a1a8, bangunan.a21, bangunan.a22, bangunan.a25, bangunan.a26, bangunan.a27, kecamatan.kecamatan');
		$this->db->from('bangunan');
		if ($kecamatan!=false) {
			$this->db->where('bangunan.a26', $kecamatan);
		}
		if ($kelurahan!=false) {
			$this->db->where('bangunan.a25', $kelurahan);
		}
		if ($rt!=false) {
			$this->db->where('bangunan.a23', $rt);
		}
		if ($rw!=false) {
			$this->db->where('bangunan.a24', $rw);
		}
		$this->db->join('kecamatan', 'bangunan.a26 = kecamatan.nomor', 'left');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	//gembel
	public function get_kawasan_geo()
	{
		$this->db->select('asWkb(the_geom) as wkb, x(centroid(the_geom)) as xe, y(centroid(the_geom)) as ye, id, kecamatan, kelurahan, rw, rt');
		$this->db->from('kode_administrasi_geo');
		// if($id_kecamatan!=""){
		// 	$this->db->where('nomor', $id_kecamatan);
		// }
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function get_kawasan_geo_by_nama($nama_pemilik)
	{
		$this->db->select('bangunan.a1a2 as nama, x(centroid(kode_administrasi_geo.the_geom)) as xe, y(centroid(kode_administrasi_geo.the_geom)) as ye, kode_administrasi_geo.id as id, kode_administrasi_geo.kecamatan as kecamatan, kode_administrasi_geo.kelurahan as kelurahan, kode_administrasi_geo.rw as rw, kode_administrasi_geo.rt as rt');
		$this->db->from('kode_administrasi_geo');
		$this->db->join('bangunan', 'bangunan.a26 = kode_administrasi_geo.kecamatan and bangunan.a25 = kode_administrasi_geo.kelurahan and bangunan.a24 = kode_administrasi_geo.rw and bangunan.a23 = kode_administrasi_geo.rt', 'left');
		
		if($nama_pemilik!=""){
			$this->db->like('bangunan.a1a2', $nama_pemilik);
		}
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function get_imb()
	{
		$this->db->select('distinct(a211) as imb');
		$this->db->from('bangunan');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
}

/* End of file model_jalan.php */
/* Location: ./application/models/model_jalan.php */