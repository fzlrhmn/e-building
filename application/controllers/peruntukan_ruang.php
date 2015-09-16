<?php 

class Peruntukan_ruang extends CI_Controller {
        
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_peruntukan_ruang');
	}

	public function get_peruntukan_ruang($id = false)
	{
		$data['peruntukan_ruang'] = $this->model_peruntukan_ruang->get_peruntukan_ruang($id);
		// $this->output->set_content_type('application/json')->set_output(json_encode($data));
		$this->load->view('template/header');
		$this->load->view('content/peruntukan_ruang/peruntukan_ruang', $data);
		$this->load->view('template/footer');
	}

}

/* End of file jalan.php */
/* Location: ./application/controllers/jalan.php */