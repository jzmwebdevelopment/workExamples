<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AParty extends CI_Controller {
	
	function __construct() {
	        parent::__construct();
	    }    

	public function index()
	{
	 	//if($this->session->userdata('logged_in')) redirect('dashboard/home');
		
		$message = $this->session->userdata('message');
		
		if($message === FALSE)
		{
			$message='';
		}else{
			$this->session->unset_userdata('message');
		}
		
		$data['contentMangement'] = $this->options_model->systemOptions();
		$data['aPartys'] = $this->party_model->getAPartyInformation();
		$data['pageTitle'] = 'A Party Management';
		$data['message'] = $message;
		$this->load->view('_assets/dashHeader', $data);
		$this->load->view('dashboard/aParty', $data);
		$this->load->view('_assets/footer');
	}
	
		public function add()
		{
			$this->form_validation->set_rules('aPartyLocation','A Party Location', 'required|trim|prep_for_form|max_length[35]|xss_clean');
			$this->form_validation->set_rules('aPartyPhone','A Party Phone', 'required|trim|numeric|max_length[35]|xss_clean');

			if($this->form_validation->run() === TRUE)
				{
					$location = $this->input->post('aPartyLocation', TRUE);
					$phone = $this->input->post('aPartyPhone', TRUE);
					
					$userData = array(
						'location' => html_escape($location),
						'phone'	=> html_escape($phone)
					);
					
					$this->db->escape($userData);
					$this->party_model->addAParty($userData);
					
					$data['message'] = '<div class="alert alert-success"><strong>Thank You</strong> Your A Party Has Been Added</div>';
					$this->session->set_userdata('message', $data['message']);
					
					redirect(site_url('dashboard/aParty'));
					
				}elseif($this->form_validation->run() === FALSE)
				{
					$data['contentMangement'] = $this->options_model->systemOptions();
					$data['pageTitle'] = 'Add A Party';
					$data['message'] = validation_errors('<div class="alert alert-error">', '</div>'); 
					$this->load->view('_assets/dashHeader', $data);
					$this->load->view('dashboard/addAParty', $data);
					$this->load->view('_assets/footer');
				}
		}
		function edit($id)
		{
			$id = $this->uri->segment(4);
			$this->form_validation->set_rules('aPartyLocation','A Party Location', 'required|trim|prep_for_form|max_length[35]|xss_clean');
			$this->form_validation->set_rules('aPartyPhone','A Party Phone', 'required|trim|numeric|max_length[35]|xss_clean');


				if($this->form_validation->run() === TRUE)
					{
						$location = $this->input->post('aPartyLocation', TRUE);
						$phone = $this->input->post('aPartyPhone', TRUE);
						
						$userData = array(
							'id' => $id,
							'location' => html_escape($location),
							'phone'	=> html_escape($phone)
						);	

						$this->db->escape($userData);

						$this->party_model->editAParty($id,$userData);

						$data['message'] = '<div class="alert alert-success"><strong>Thank You</strong> Your A Party Has Been Updated</div>';
						$this->session->set_userdata('message', $data['message']);

						redirect(site_url('dashboard/aParty'));

					}elseif($this->form_validation->run() === FALSE)
					{
						$data['aPartyContent'] = $this->party_model->getAPartyInformation($id);
						$data['contentMangement'] = $this->options_model->systemOptions();
						$data['pageTitle'] = 'Edit User';
						$data['message'] = validation_errors('<div class="alert alert-error">', '</div>'); 
						$this->load->view('_assets/dashHeader', $data);
						$this->load->view('dashboard/editAParty', $data);
						$this->load->view('_assets/footer');
					}
		}
		function delete($id)
		{
			$id = $this->uri->segment(4);
			$this->party_model->deleteAParty($id);
			$data['message'] = '<div class="alert alert-success"><strong>Thank You</strong> Your A Party Has Been Deleted</div>';
			$this->session->set_userdata('message', $data['message']);
			redirect(site_url('dashboard/aParty'));
		}
		function getAPartyInformation($id = NULL) {
			$this->db->where('id', $id);
			$query = $this->db->get('aParty', 1);

			if($query->num_rows() > 0) {
				$row = $query->result_array();
				return $row;
			}else{
				return FALSE;
			}
		}
}