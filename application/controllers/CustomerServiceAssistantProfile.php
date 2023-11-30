<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerServiceAssistantProfile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Your Profile | CAS';
		$this->load->view('customer-service-assistant/assistant-profile',$data);
	}
}