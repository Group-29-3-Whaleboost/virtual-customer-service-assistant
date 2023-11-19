<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Manager');
		$this->load->model('User_model');

        $this->load->library('session');

    }

	public function index()
	{
		$user =$this->session->userdata('user_id');
		$branch = $this->User_model->get_branch_by_user_id($user);
		$data['managers'] = $this->Manager->get_managers_by_branch($branch);
		$data['user']=$this->User_model->get_user($user);
		
		$data['title'] = 'Help | CAS';
		$this->load->view('help',$data);
	}
}
