<?php 

class Laporan extends CI_Controller {
        
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
	public function index()
	{
		$data['peruntukan_tanah'] 	= $this->model_peruntukan_tanah->get_peruntukan_tanah();
		for ($i=0; $i < count( $data['peruntukan_tanah'] ); $i++) { 
			$data['peruntukan_tanah'][$i]['jumlah'] = $this->model_bangunan->report_bangunan('peruntukan_ruang', $data['peruntukan_tanah'][$i]['id']);
		}
		$this->load->view('template/header');
		$this->load->view('content/laporan/peruntukan_tanah', $data);
		$this->load->view('template/footer');
	}

	public function peruntukan_ruang()
	{
		$data['peruntukan_ruang'] 	= $this->model_peruntukan_ruang->get_peruntukan_ruang();
		for ($i=0; $i < count( $data['peruntukan_ruang'] ); $i++) { 
			$data['peruntukan_ruang'][$i]['jumlah'] = $this->model_bangunan->report_bangunan('peruntukan_ruang', $data['peruntukan_ruang'][$i]['id']);
		}
		$this->load->view('template/header');
		$this->load->view('content/laporan/peruntukan_ruang', $data);
		$this->load->view('template/footer');
	}

	/**
	 * @return null
	 */
	public function kecamatan()
	{
		$data['kecamatan'] = $this->model_kecamatan->get_kecamatan($id_kecamatan);
		for ($i=0; $i < count( $data['kecamatan'] ); $i++) { 
			$data['kecamatan'][$i]['jumlah'] = $this->model_bangunan->report_bangunan('a26', $data['kecamatan'][$i]['nomor']);
		}
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));
		$this->load->view('template/header');
		$this->load->view('content/laporan/kecamatan', $data);
		$this->load->view('template/footer');
	}

	/**
	 * @return null
	 */
	public function imb()
	{
		$data['imb'] = $this->model_bangunan->get_imb();
		for ($i=0; $i < count( $data['imb'] ); $i++) { 
			if ( $data['imb'][$i]['imb'] == 1 ) {
				$data['imb'][$i]['keterangan'] = 'Ya';
			}
			else{
				$data['imb'][$i]['keterangan'] = 'Tidak';
			}

			$data['imb'][$i]['jumlah'] = $this->model_bangunan->report_bangunan('a211', $data['imb'][$i]['imb']);
		}
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));
		$this->load->view('template/header');
		$this->load->view('content/laporan/imb', $data);
		$this->load->view('template/footer');
	}

	/**
	 * @return json
	 */
	public function kelurahan($id_kelurahan)
	{
		$data['nama_kecamatan'] = $this->model_kecamatan->get_nama_kecamatan($id_kelurahan);
		$data['kelurahan'] 		= $this->model_kelurahan->get_kelurahan_by_kecamatan($id_kelurahan);
		for ($i=0; $i < count( $data['kelurahan'] ); $i++) { 
			$data['kelurahan'][$i]['jumlah'] = $this->model_bangunan->report_bangunan_kelurahan($data['kelurahan'][$i]['no_kecamatan'],$data['kelurahan'][$i]['nomor']);
		}
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));
		$this->load->view('template/header');
		$this->load->view('content/laporan/kelurahan', $data);
		$this->load->view('template/footer');
	}

}

/* End of file bangunan.php */
/* Location: ./application/controllers/bangunan.php */