<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		if ($this->session->userdata('is_logged_in')) {
			redirect(base_url('index.php/home'));
		}
		else{
			$this->load->view('login');
		}
	}

	public function login_fail($text = false){
		$data['error']=$text;
		$this->load->view('login',$data);
	}

	public function submit()
	{
		$this->form_validation->set_rules('user','Username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_error_delimiters('<div style="color:red">','</div>');
		if($this->form_validation->run() == false){
			$this->login_fail();
		}
		else{
			$stat=$this->model_login->auth();
			if($stat['stat']==TRUE){
				// if ($this->agent->is_mobile()) {
				// 	redirect('mobile');
				// }else{
				// 	redirect('home');
				// }
				redirect('home');
			}
			else{
				$this->login_fail($stat['text']);
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */