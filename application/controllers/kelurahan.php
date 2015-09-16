<?php 

class Kelurahan extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kelurahan');
	}

	public function get_kelurahan($id_kelurahan=false)
	{
		$data['kelurahan'] = $this->model_kelurahan->get_kelurahan($id_kelurahan);
		$this->load->view('template/header');
		$this->load->view('content/kelurahan/kelurahan', $data);
		$this->load->view('template/footer');
	}

	//gembel
	public function get_kelurahan_by_kecamatan($id_kecamatan=false, $nomor=false)
	{
		$data = $this->model_kelurahan->get_kelurahan_by_kecamatan($id_kecamatan, $nomor);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
	//gembel
	public function geo($id_kecamatan=false)
	{
		# Build GeoJSON feature collection array
		$geojson = array(
		   'type'      => 'FeatureCollection',
		   'features'  => array()
		);

		$data['kecamatan'] = $this->model_kelurahan->get_kelurahan_geo($id_kecamatan);

		foreach ($data['kecamatan'] as $item) {
			$properties = $item;

			unset($properties['wkb']);
			unset($properties['the_geom']);
			$feature = array(
		         'type' => 'Feature',
		         'properties' => $properties,
		         'geometry' => json_decode($this->geophp->wkb_to_json($item['wkb']))
		    );
		    # Add feature arrays to feature collection array
		    array_push($geojson['features'], $feature);
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($geojson));
	}
}

/* End of file jalan.php */
/* Location: ./application/controllers/jalan.php */