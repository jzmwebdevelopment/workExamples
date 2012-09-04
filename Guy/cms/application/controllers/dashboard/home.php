<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
	        parent::__construct();
	    }    

	public function index()
	{
	 	//if($this->session->userdata('logged_in')) redirect('dashboard/home');
		
		$data['contentMangement'] = $this->options_model->systemOptions();
		print_r($data['contentMangement']);
		$data['aPartyInformation'] = $this->party_model->getAPartyInformation();
		$data['pageTitle'] = 'Dashboard';
		$this->load->view('_assets/dashHeader', $data);
		$this->load->view('dashboard/home', $data);
		$this->load->view('_assets/footer');
	}
	
	function logout() {
		
		$this->session->sess_destroy();
		redirect('home/','refresh');
		
	}
}