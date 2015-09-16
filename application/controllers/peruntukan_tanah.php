<?php 

class Peruntukan_tanah extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_peruntukan_tanah');
	}

	public function get_peruntukan_tanah($id = false)
	{
		$data['peruntukan_tanah'] = $this->model_peruntukan_tanah->get_peruntukan_tanah($id);
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));
		$this->load->view('template/header');
		$this->load->view('content/peruntukan_tanah/peruntukan_tanah', $data);
		$this->load->view('template/footer');
	}

}

/* End of file jalan.php */
/* Location: ./application/controllers/jalan.php */