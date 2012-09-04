<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	function __construct() {
	        parent::__construct();
	    }    

	public function index()
	{
	 	//if($this->session->userdata('logged_in')) redirect('dashboard/home');
		
		$data['contentMangement'] = $this->options_model->systemOptions();
		$data['aPartyInformation'] = $this->party_model->getAPartyInformation();
		$data['pageTitle'] = 'Settings';
		$this->load->view('_assets/dashHeader', $data);
		$this->load->view('dashboard/settings', $data);
		$this->load->view('_assets/footer');
	}
}