<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Assistants');
        $this->load->library('session');

    }

	public function index()
	{
		// $this->session->set_userdata('branch_id', 1);

		$user =$this->session->userdata('user_id');
		// $branch = $this->User_model->get_branch_by_user_id($user);
		// $data['Assistants'] = $this->Assistants->get_Assistants();
		$data['Assistants'] = $this->Assistants->getAssistantsByBranch($this->session->userdata('branch_id'));
		$data['user']=$this->User_model->get_user($user);
		
		$data['title'] = 'Help | CAS';
		$this->load->view('help',$data);
	}
}
