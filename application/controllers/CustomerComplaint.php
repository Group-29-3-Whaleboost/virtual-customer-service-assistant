<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerComplaint extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Complaint | CAS';
		$this->load->view('enduser/complaint',$data);
	}
}
