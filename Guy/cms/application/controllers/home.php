<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
	        parent::__construct();
	    }    

	public function index()
	{
	 	//if($this->session->userdata('logged_in')) redirect('dashboard/home');
		
		$data['contentMangement'] = $this->options_model->systemOptions();
		$data['pageTitle'] = 'Login';
		$data['message'] = "";
		$this->load->view('_assets/header', $data);
		$this->load->view('login', $data);
		$this->load->view('_assets/footer');
	}
	
	public function login() {
		  $this->form_validation->set_rules('userEmail','Username', 'required|valid_email|trim|max_length[99]|xss_clean');
		    $this->form_validation->set_rules('userPassword','Password', 'required|trim|max_length[200]|xss_clean|callback__checkUsernamePassword');

		    if($this->form_validation->run() === FALSE) {

		       	$data['contentMangement'] = $this->options_model->systemOptions();
				$data['pageTitle'] = 'Login';
				$data['message'] = validation_errors('<div class="alert alert-error">', '</div>');
				$this->load->view('_assets/header', $data);
				$this->load->view('login', $data);
				$this->load->view('_assets/footer');
				
		    }elseif($this->form_validation->run() === TRUE){
			
			redirect('dashboard/home');
		}
	}

	
	function _checkUsernamePassword() {
			
			$username = $this->input->post('userEmail');
			$password = $this->input->post('userPassword');
			
	        $user = $this->user_model->check_login($username,$password);
			
			if(! $user)
			{
				$this->form_validation->set_message('_checkUsernamePassword', 'Sorry the details you provided have not been found');
				return FALSE;
			}else{
				 $this->session->set_userdata('logged_in',TRUE);
				return TRUE;
			}	
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */