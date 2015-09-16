<?php 

class Kecamatan extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kecamatan');
	}

	public function index($id_kecamatan)
	{
		$data['kecamatan'] = $this->model_kecamatan->get_kecamatan($id_kecamatan);
		$this->load->view('template/header');
		$this->load->view('content/kecamatan/kecamatan', $data);
		$this->load->view('template/footer');
	}

	//gembel
	public function geo($id_kecamatan=false)
	{
		# Build GeoJSON feature collection array
		$geojson = array(
		   'type'      => 'FeatureCollection',
		   'features'  => array()
		);

		$data['kecamatan'] = $this->model_kecamatan->get_kecamatan_geo($id_kecamatan);

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