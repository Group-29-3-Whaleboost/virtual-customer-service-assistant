<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerComplaint extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Complaint | CAS';
		$this->load->view('manager/manager-complaint',$data);
	}
}
