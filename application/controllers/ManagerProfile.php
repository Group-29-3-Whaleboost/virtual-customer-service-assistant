<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManagerProfile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Your Profile | CAS';
		$this->load->view('manager/manager-profile',$data);
	}
}