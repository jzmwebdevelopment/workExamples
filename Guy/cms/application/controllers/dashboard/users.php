<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
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
		$data['userDetails'] = $this->user_model->getAllUsers();
		$data['pageTitle'] = 'User Management';
		$data['message'] = $message;
		$this->load->view('_assets/dashHeader', $data);
		$this->load->view('dashboard/users', $data);
		$this->load->view('_assets/footer');
	}
		public function add()
		{
			$this->form_validation->set_rules('userFirstName','First Name', 'required|trim|max_length[99]|xss_clean');
			$this->form_validation->set_rules('userLastName','Last Name', 'required|trim|max_length[99]|xss_clean');
	$this->form_validation->set_rules('userEmail','E-Mail', 'required|valid_email|trim|max_length[99]|xss_clean|is_unique[users.email]');
			$this->form_validation->set_rules('userPassword','Password', 'required|trim|max_length[99]|xss_clean');

			if($this->form_validation->run() === TRUE)
				{
					$userData = array(
						'fName' => $this->input->post('userFirstName', TRUE),
						'lName'	=> $this->input->post('userLastName', TRUE),
						'email' => $this->input->post('userEmail', TRUE),
						'password' => sha1($this->input->post('userPassword', TRUE))
					);	

					$this->db->escape($userData);
					$this->user_model->addUser($userData);
					
					$data['message'] = '<div class="alert alert-success"><strong>Thank You</strong> Your User Has Been Added</div>';
					$this->session->set_userdata('message', $data['message']);
					
					redirect(site_url('dashboard/users'));
					
				}elseif($this->form_validation->run() === FALSE)
				{
					$data['contentMangement'] = $this->options_model->systemOptions();
					$data['pageTitle'] = 'Add User';
					$data['message'] = validation_errors('<div class="alert alert-error">', '</div>'); 
					$this->load->view('_assets/dashHeader', $data);
					$this->load->view('dashboard/addUser', $data);
					$this->load->view('_assets/footer');
				}
		}
	function edit($id)
	{
		$id = $this->uri->segment(4);
		$this->form_validation->set_rules('userFirstName','First Name', 'required|trim|max_length[99]|xss_clean');
		$this->form_validation->set_rules('userLastName','Last Name', 'required|trim|max_length[99]|xss_clean');
	$this->form_validation->set_rules('userEmail','E-Mail', 'required|valid_email|trim|max_length[99]|xss_clean|is_unique[users.email]');
			$this->form_validation->set_rules('userPassword','Password', 'required|trim|max_length[99]|xss_clean');

			if($this->form_validation->run() === TRUE)
				{
					$userData = array(
						'id' => $id,
						'fName' => $this->input->post('userFirstName', TRUE),
						'lName'	=> $this->input->post('userLastName', TRUE),
						'email' => $this->input->post('userEmail', TRUE),
						'password' => sha1($this->input->post('userPassword', TRUE))
					);	

					$this->db->escape($userData);
					
					$this->user_model->editUser($id,$userData);
					
					$data['message'] = '<div class="alert alert-success"><strong>Thank You</strong> Your User Has Been Updated</div>';
					$this->session->set_userdata('message', $data['message']);
					
					redirect(site_url('dashboard/users'));
					
				}elseif($this->form_validation->run() === FALSE)
				{
					$data['userContent'] = $this->user_model->getUserInformation($id);
					$data['contentMangement'] = $this->options_model->systemOptions();
					$data['pageTitle'] = 'Edit User';
					$data['message'] = validation_errors('<div class="alert alert-error">', '</div>'); 
					$this->load->view('_assets/dashHeader', $data);
					$this->load->view('dashboard/editUser', $data);
					$this->load->view('_assets/footer');
				}
	}
	
	function delete($id)
	{
		$id = $this->uri->segment(4);
		$this->user_model->deleteUser($id);
		$data['message'] = '<div class="alert alert-success"><strong>Thank You</strong> Your User Has Been Deleted</div>';
		$this->session->set_userdata('message', $data['message']);
		redirect(site_url('dashboard/users'));
	}
}