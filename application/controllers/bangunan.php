<?php 

class Bangunan extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_bangunan');
		$this->load->model('model_kecamatan');
		$this->load->model('model_kelurahan');
		$this->load->model('model_peruntukan_tanah');
		$this->load->model('model_peruntukan_ruang');
	}


	/**
	 * @param  boolean
	 * @return 
	 */
	public function index($id_bangunan=false)
	{
		if ($id_bangunan != false) {
			$data['bangunan'] = $this->model_bangunan->get_bangunan_edit($id_bangunan);
			
			if ( count($data['bangunan']) != 0 ) {
				// master form
				$data['kecamatan'] 			= $this->model_kecamatan->get_kecamatan();
				$data['kelurahan'] 			= $this->model_kelurahan->get_kelurahan_by_kecamatan($data['bangunan']->a26);
				$data['peruntukan_tanah'] 	= $this->model_peruntukan_tanah->get_peruntukan_tanah();
				$data['peruntukan_ruang'] 	= $this->model_peruntukan_ruang->get_peruntukan_ruang();
				// $this->output->set_content_type('application/json')->set_output(json_encode($data));
				$this->load->view('template/header');
				$this->load->view('content/bangunan/edit_bangunan', $data);
				$this->load->view('template/footer');
			}
			else{
				show_404();
			}
		}
		else{
			$data['kecamatan'] 			= $this->model_kecamatan->get_kecamatan();
			$data['peruntukan_tanah'] 	= $this->model_peruntukan_tanah->get_peruntukan_tanah();
			$data['peruntukan_ruang'] 	= $this->model_peruntukan_ruang->get_peruntukan_ruang();

			$this->load->view('template/header');
			$this->load->view('content/bangunan/bangunan', $data);
			$this->load->view('template/footer');
		}
	}

	public function datatables_bangunan()
	{
		$data['data'] = $this->model_bangunan->get_bangunan($id_bangunan);
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['kelurahan'] = null;
			$nomor_kelurahan 	= $data['data'][$i]['a25'];
			$id_kecamatan 		= $data['data'][$i]['a26']; //id kecamatan

			$kelurahan 			= $this->model_bangunan->get_kelurahan($id_kecamatan, $nomor_kelurahan);
			$data['data'][$i]['no'] = $i+1;
			$data['data'][$i]['kelurahan'] = $kelurahan->kelurahan;
			$data['data'][$i]['alamat'] = $data['data'][$i]['a1a3'].' RT '.$data['data'][$i]['a1a4'].' RW '.$data['data'][$i]['a1a5'].' Kelurahan '.$data['data'][$i]['a1a6'].' Kecamatan '.$data['data'][$i]['a1a7'];
			$data['data'][$i]['alamat_bangunan'] = $data['data'][$i]['a22'].' Kecamatan '.$data['bangunan'][$i]['kecamatan'];
			unset($data['data'][$i]['a1a3']);
			unset($data['data'][$i]['a1a4']);
			unset($data['data'][$i]['a1a5']);
			unset($data['data'][$i]['a1a6']);
			unset($data['data'][$i]['a1a7']);
			unset($data['data'][$i]['a25']);
			unset($data['data'][$i]['a26']);
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/**
	 * @return null
	 */
	public function create()
	{
		$data['kecamatan'] 			= $this->model_kecamatan->get_kecamatan();
		$data['peruntukan_tanah'] 	= $this->model_peruntukan_tanah->get_peruntukan_tanah();
		$data['peruntukan_ruang'] 	= $this->model_peruntukan_ruang->get_peruntukan_ruang();
		$this->load->view('template/header');
		$this->load->view('content/bangunan/entry_bangunan', $data);
		$this->load->view('template/footer');
	}

	/**
	 * @return null
	 */
	public function submit()
	{
		foreach($_POST as $key => $value){
			$options[$key] = $this->input->post($key);
		}
		$nama['b1a']		= pathinfo($_FILES['b1a']['name'], PATHINFO_BASENAME);
		$nama['b1b']		= pathinfo($_FILES['b1b']['name'], PATHINFO_BASENAME);
		$nama['b2']			= pathinfo($_FILES['b2']['name'], PATHINFO_BASENAME);
		$nama['b3a']		= pathinfo($_FILES['b3a']['name'], PATHINFO_BASENAME);
		$nama['b3b']		= pathinfo($_FILES['b3b']['name'], PATHINFO_BASENAME);
		$nama['imb']		= pathinfo($_FILES['imb']['name'], PATHINFO_BASENAME);
		$nama['b4a']		= pathinfo($_FILES['b4a']['name'], PATHINFO_BASENAME);
		$nama['b4b']		= pathinfo($_FILES['b4b']['name'], PATHINFO_BASENAME);
		$nama['b4c']		= pathinfo($_FILES['b4c']['name'], PATHINFO_BASENAME);
		$nama['b4d']		= pathinfo($_FILES['b4d']['name'], PATHINFO_BASENAME);
		$nama['b4e']		= pathinfo($_FILES['b4e']['name'], PATHINFO_BASENAME);
		$nama['b4f']		= pathinfo($_FILES['b4f']['name'], PATHINFO_BASENAME);
		$nama['b5']			= pathinfo($_FILES['b5']['name'], PATHINFO_BASENAME);
		$nama['b6']			= pathinfo($_FILES['b6']['name'], PATHINFO_BASENAME);
		$nama['b7a']		= pathinfo($_FILES['b7a']['name'], PATHINFO_BASENAME);
		$nama['b7b']		= pathinfo($_FILES['b7b']['name'], PATHINFO_BASENAME);
		$nama['b81']		= pathinfo($_FILES['b81']['name'], PATHINFO_BASENAME);
		$nama['arsip']		= pathinfo($_FILES['arsip']['name'], PATHINFO_BASENAME);

		if($nama['b1a']!=""){
			$this->model_bangunan->upload_foto('b1a', $options['nomor'].'_'.$nama['b1a']);
			$options['b1a']  		= 	$nama['b1a'];
		}
		if($nama['b1b']!=""){
			$this->model_bangunan->upload_foto('b1b', $options['nomor'].'_'.$nama['b1b']);
			$options['b1b']  		= 	$nama['b1b'];
		}
		if($nama['b2']!=""){
			$this->model_bangunan->upload_foto('b2', $options['nomor'].'_'.$nama['b2']);
			$options['b2']  		= 	$nama['b2'];
		}
		if($nama['b3a']!=""){
			$this->model_bangunan->upload_foto('b3a', $options['nomor'].'_'.$nama['b3a']);
			$options['b3a']  		= 	$nama['b3a'];
		}
		if($nama['b3b']!=""){
			$this->model_bangunan->upload_foto('b3b', $options['nomor'].'_'.$nama['b3b']);
			$options['b3b']  		= 	$nama['b3b'];
		}
		if($nama['imb']!=""){
			$this->model_bangunan->upload_foto('imb', $options['nomor'].'_'.$nama['imb']);
			$options['imb']  		= 	$nama['imb'];
		}
		if($nama['b4a']!=""){
			$this->model_bangunan->upload_foto('b4a', $options['nomor'].'_'.$nama['b4a']);
			$options['b4a']  		= 	$nama['b4a'];
		}
		if($nama['b4b']!=""){
			$this->model_bangunan->upload_foto('b4b', $options['nomor'].'_'.$nama['b4b']);
			$options['b4b']  		= 	$nama['b4b'];
		}
		if($nama['b4c']!=""){
			$this->model_bangunan->upload_foto('b4c', $options['nomor'].'_'.$nama['b4c']);
			$options['b4c']  		= 	$nama['b4c'];
		}
		if($nama['b4d']!=""){
			$this->model_bangunan->upload_foto('b4d', $options['nomor'].'_'.$nama['b4d']);
			$options['b4d']  		= 	$nama['b4d'];
		}
		if($nama['b4e']!=""){
			$this->model_bangunan->upload_foto('b4e', $options['nomor'].'_'.$nama['b4e']);
			$options['b4e']  		= 	$nama['b4e'];
		}
		if($nama['b4f']!=""){
			$this->model_bangunan->upload_foto('b4f', $options['nomor'].'_'.$nama['b4f']);
			$options['b4f']  		= 	$nama['b4f'];
		}
		if($nama['b5']!=""){
			$this->model_bangunan->upload_foto('b5', $options['nomor'].'_'.$nama['b5']);
			$options['b5']  		= 	$nama['b5'];
		}
		if($nama['b6']!=""){
			$this->model_bangunan->upload_foto('b6', $options['nomor'].'_'.$nama['b6']);
			$options['b6']  		= 	$nama['b6'];
		}
		if($nama['b7a']!=""){
			$this->model_bangunan->upload_foto('b7a', $options['nomor'].'_'.$nama['b7a']);
			$options['b7a']  		= 	$nama['b7a'];
		}
		if($nama['b7b']!=""){
			$this->model_bangunan->upload_foto('b7b', $options['nomor'].'_'.$nama['b7b']);
			$options['b7b']  		= 	$nama['b7b'];
		}
		if($nama['b81']!=""){
			$this->model_bangunan->upload_foto('b81', $options['nomor'].'_'.$nama['b81']);
			$options['b81']  		= 	$nama['b81'];
		}
		if($nama['arsip']!=""){
			$this->model_bangunan->upload_foto('arsip', $options['nomor'].'_'.$nama['arsip']);
			$options['arsip']  		= 	$nama['arsip'];
		}
		$this->model_bangunan->insert_bangunan($options);
		$this->output->set_content_type('application/json')->set_output(json_encode($options));
	}

	/**
	 * @return json
	 */
	public function edit()
	{
		foreach($_POST as $key => $value){
			$options[$key] = strtoupper($this->input->post($key));
		}
		$nama['b1a']		= pathinfo($_FILES['b1a']['name'], PATHINFO_BASENAME);
		$nama['b1b']		= pathinfo($_FILES['b1b']['name'], PATHINFO_BASENAME);
		$nama['b2']			= pathinfo($_FILES['b2']['name'], PATHINFO_BASENAME);
		$nama['b3a']		= pathinfo($_FILES['b3a']['name'], PATHINFO_BASENAME);
		$nama['b3b']		= pathinfo($_FILES['b3b']['name'], PATHINFO_BASENAME);
		$nama['imb']		= pathinfo($_FILES['imb']['name'], PATHINFO_BASENAME);
		$nama['b4a']		= pathinfo($_FILES['b4a']['name'], PATHINFO_BASENAME);
		$nama['b4b']		= pathinfo($_FILES['b4b']['name'], PATHINFO_BASENAME);
		$nama['b4c']		= pathinfo($_FILES['b4c']['name'], PATHINFO_BASENAME);
		$nama['b4d']		= pathinfo($_FILES['b4d']['name'], PATHINFO_BASENAME);
		$nama['b4e']		= pathinfo($_FILES['b4e']['name'], PATHINFO_BASENAME);
		$nama['b4f']		= pathinfo($_FILES['b4f']['name'], PATHINFO_BASENAME);
		$nama['b5']			= pathinfo($_FILES['b5']['name'], PATHINFO_BASENAME);
		$nama['b6']			= pathinfo($_FILES['b6']['name'], PATHINFO_BASENAME);
		$nama['b7a']		= pathinfo($_FILES['b7a']['name'], PATHINFO_BASENAME);
		$nama['b7b']		= pathinfo($_FILES['b7b']['name'], PATHINFO_BASENAME);
		$nama['b81']		= pathinfo($_FILES['b81']['name'], PATHINFO_BASENAME);
		$nama['arsip']		= pathinfo($_FILES['arsip']['name'], PATHINFO_BASENAME);

		if($nama['b1a']!=""){
			$this->model_bangunan->upload_foto('b1a', $options['nomor'].'_'.$nama['b1a']);
			$options['b1a']  		= 	$nama['b1a'];
		}
		if($nama['b1b']!=""){
			$this->model_bangunan->upload_foto('b1b', $options['nomor'].'_'.$nama['b1b']);
			$options['b1b']  		= 	$nama['b1b'];
		}
		if($nama['b2']!=""){
			$this->model_bangunan->upload_foto('b2', $options['nomor'].'_'.$nama['b2']);
			$options['b2']  		= 	$nama['b2'];
		}
		if($nama['b3a']!=""){
			$this->model_bangunan->upload_foto('b3a', $options['nomor'].'_'.$nama['b3a']);
			$options['b3a']  		= 	$nama['b3a'];
		}
		if($nama['b3b']!=""){
			$this->model_bangunan->upload_foto('b3b', $options['nomor'].'_'.$nama['b3b']);
			$options['b3b']  		= 	$nama['b3b'];
		}
		if($nama['imb']!=""){
			$this->model_bangunan->upload_foto('imb', $options['nomor'].'_'.$nama['imb']);
			$options['imb']  		= 	$nama['imb'];
		}
		if($nama['b4a']!=""){
			$this->model_bangunan->upload_foto('b4a', $options['nomor'].'_'.$nama['b4a']);
			$options['b4a']  		= 	$nama['b4a'];
		}
		if($nama['b4b']!=""){
			$this->model_bangunan->upload_foto('b4b', $options['nomor'].'_'.$nama['b4b']);
			$options['b4b']  		= 	$nama['b4b'];
		}
		if($nama['b4c']!=""){
			$this->model_bangunan->upload_foto('b4c', $options['nomor'].'_'.$nama['b4c']);
			$options['b4c']  		= 	$nama['b4c'];
		}
		if($nama['b4d']!=""){
			$this->model_bangunan->upload_foto('b4d', $options['nomor'].'_'.$nama['b4d']);
			$options['b4d']  		= 	$nama['b4d'];
		}
		if($nama['b4e']!=""){
			$this->model_bangunan->upload_foto('b4e', $options['nomor'].'_'.$nama['b4e']);
			$options['b4e']  		= 	$nama['b4e'];
		}
		if($nama['b4f']!=""){
			$this->model_bangunan->upload_foto('b4f', $options['nomor'].'_'.$nama['b4f']);
			$options['b4f']  		= 	$nama['b4f'];
		}
		if($nama['b5']!=""){
			$this->model_bangunan->upload_foto('b5', $options['nomor'].'_'.$nama['b5']);
			$options['b5']  		= 	$nama['b5'];
		}
		if($nama['b6']!=""){
			$this->model_bangunan->upload_foto('b6', $options['nomor'].'_'.$nama['b6']);
			$options['b6']  		= 	$nama['b6'];
		}
		if($nama['b7a']!=""){
			$this->model_bangunan->upload_foto('b7a', $options['nomor'].'_'.$nama['b7a']);
			$options['b7a']  		= 	$nama['b7a'];
		}
		if($nama['b7b']!=""){
			$this->model_bangunan->upload_foto('b7b', $options['nomor'].'_'.$nama['b7b']);
			$options['b7b']  		= 	$nama['b7b'];
		}
		if($nama['b81']!=""){
			$this->model_bangunan->upload_foto('b81', $options['nomor'].'_'.$nama['b81']);
			$options['b81']  		= 	$nama['b81'];
		}
		if($nama['arsip']!=""){
			$this->model_bangunan->upload_foto('arsip', $options['nomor'].'_'.$nama['arsip']);
			$options['arsip']  		= 	$nama['arsip'];
		}
		$this->model_bangunan->update_bangunan($options);
		$this->output->set_content_type('application/json')->set_output(json_encode($options));
	}

	/**
	 * @param  int $id_bangunan
	 * @return null
	 */
	public function delete($id_bangunan)
	{
		$this->model_bangunan->delete_bangunan($id_bangunan);
		redirect(base_url('index.php/bangunan'),'refresh');
	}

	/**
	 * @param  int $id_kecamatan
	 * @param  int $nomor_kelurahan
	 * @return int $data [return json data]
	 */
	public function get_nomor_bangunan($id_kecamatan, $nomor_kelurahan)
	{
		$data['gabungan'] 			= $id_kecamatan.'.'.$nomor_kelurahan;
		$data['nomor'] 				= $this->model_bangunan->get_nomor_bangunan($data['gabungan']);
		if ($data['nomor'] != NULL) {
			if ($nomor_kelurahan != NULL) {
				$array 	= explode('.', $data['nomor']);
				$nomor 	= $array[2] + 1;

				if (strlen($nomor) == 1) {
					$nomor = '00'.$nomor;
				}elseif (strlen($nomor) == 2) {
					$nomor = '0'.$nomor;
				}else{
					$nomor = $nomor;
				}
				$data['nomor_bangunan'] = $data['gabungan'].'.'.$nomor;
			}else{
				$data['nomor_bangunan'] = '';
			}
		}
		else{
			if ($nomor_kelurahan != NULL) {
				$data['nomor_bangunan'] = $data['gabungan'].'.001';
			}
			else{
				$data['nomor_bangunan'] = '';
			}
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	/**
	 * @param  
	 * @return json
	 */
	public function search()
	{
		$data['data'] = $this->model_bangunan->search_bangunan();
		for ($i=0; $i < count($data['data']); $i++) { 
			$data['data'][$i]['kelurahan'] = null;
			$nomor_kelurahan 	= $data['data'][$i]['a25'];
			$id_kecamatan 		= $data['data'][$i]['a26']; //id kecamatan

			$kelurahan 			= $this->model_bangunan->get_kelurahan($id_kecamatan, $nomor_kelurahan);
			$data['data'][$i]['no'] = $i+1;
			$data['data'][$i]['kelurahan'] = $kelurahan->kelurahan;
			$data['data'][$i]['alamat'] = $data['data'][$i]['a1a3'].' RT '.$data['data'][$i]['a1a4'].' RW '.$data['data'][$i]['a1a5'].' Kelurahan '.$data['data'][$i]['a1a6'].' Kecamatan '.$data['data'][$i]['a1a7'];
			$data['data'][$i]['alamat_bangunan'] = $data['data'][$i]['a22'].' Kecamatan '.$data['bangunan'][$i]['kecamatan'];
			unset($data['data'][$i]['a1a3']);
			unset($data['data'][$i]['a1a4']);
			unset($data['data'][$i]['a1a5']);
			unset($data['data'][$i]['a1a6']);
			unset($data['data'][$i]['a1a7']);
			unset($data['data'][$i]['a25']);
			unset($data['data'][$i]['a26']);
		}
		$this->output->set_content_type('application/json')->set_output(json_encode( $data ));
	}

	public function showform()
	{
		// $this->load->view('content/bangunan/form');

		// Set your CSV feed
		$feed = base_url('databasegandekan.csv');
		// Arrays we'll use later
		$keys = array();
		$newArray = array();
		// Function to convert CSV into associative array
		function csvToArray($file, $delimiter) { 
		  if (($handle = fopen($file, 'r')) !== FALSE) { 
		    $i = 0; 
		    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
		      for ($j = 0; $j < count($lineArray); $j++) { 
		        $arr[$i][$j] = $lineArray[$j]; 
		      } 
		      $i++; 
		    } 
		    fclose($handle); 
		  } 
		  return $arr; 
		} 
		// Do it
		$data = csvToArray($feed, ',');
		// Set number of elements (minus 1 because we shift off the first row)
		$count = count($data) - 1;
		  
		//Use first row for names  
		$labels = array_shift($data);  
		foreach ($labels as $label) {
		  $keys[] = $label;
		}
		// Add Ids, just in case we want them later
		$keys[] = 'id';
		for ($i = 0; $i < $count; $i++) {
		  $data[$i][] = $i;
		}
		  
		// Bring it all together
		for ($j = 0; $j < $count; $j++) {
		  $d = array_combine($keys, $data[$j]);
		  $newArray[$j] = $d;
		}
		// Print it out as JSON
		echo json_encode($newArray);
	}

	//gembel
	public function get_bangunan_by_rtrw($kecamatan=false, $kelurahan=false, $rw=false, $rt=false)
	{
		$data['data'] = $this->model_bangunan->get_bangunan_by_rtrw($kecamatan, $kelurahan, $rw, $rt);
		if ( count($data['data']) != 0 ) {
			// master form
		//	for($i = 0; $i< count($data['data']); $i++){
			//$data['data'][$i]['kecamatan'] 			= $this->model_kecamatan->get_kecamatan($data['data'][$i]['a26']);
			//$data['data'][$i]['kelurahan'] 			= $this->model_kelurahan->get_kelurahan_by_kecamatan($data['data'][$i]['a26']);
			//$data['peruntukan_tanah'] 	= $this->model_peruntukan_tanah->get_peruntukan_tanah();
			//$data['peruntukan_ruang'] 	= $this->model_peruntukan_ruang->get_peruntukan_ruang();
			// $this->output->set_content_type('application/json')->set_output(json_encode($data));
		//}
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
		}				
	}

	//gembel
	public function kawasan_geo()
	{
		# Build GeoJSON feature collection array
		$geojson = array(
		   'type'      => 'FeatureCollection',
		   'features'  => array()
		);

		$data['bangunan'] = $this->model_bangunan->get_kawasan_geo();

		foreach ($data['bangunan'] as $item) {
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

/* End of file bangunan.php */
/* Location: ./application/controllers/bangunan.php */