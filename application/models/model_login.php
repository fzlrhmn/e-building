<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function auth(){
		$user 	=$this->input->post('user');
		$pass 	=$this->input->post('password');
		$this->db->where('username',$user);
		$rs 	=$this->db->get('user');
		if($rs->num_rows()>0){
		    $item=$rs->row();
			$p_hash=$this->encrypt->sha1($pass);
			if($item->pwd==$p_hash){
				$id_user=$item->id_user;
				$data=array(
					'username'=>$this->input->post('user')
					,'is_logged_in'=>TRUE
					,'id_user'=>$id_user
					,'username'=>$user
				);

				$this->session->set_userdata($data);

				return array('stat'=>TRUE);
		
			}
			else{
				return array('stat'=>false,'text'=>'kombinasi username & password salah');
			}
		}
		else{
			return array('stat'=>false,'text'=>'data tidak ditemukan');
		}
	
  }

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */