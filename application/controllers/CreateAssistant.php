<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateAssistant extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Create Assistant | CAS';
		$this->load->view('manager/create-assistant',$data);
	}
}

?>