<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
		$this->load->model('Payment_model');
        $this->load->library('session');
    }


	public function index()
	{
		$data['user'] = $this->User_model->get_user($this->session->userdata('user_id'));
		$data['title'] = 'Payment | CAS';
		$this->load->view('enduser/payment',$data);
	}

	public function verify($id)
	{
		$this->Payment_model->update_verify($id);
		redirect('verify?verified=success');
	}
}
