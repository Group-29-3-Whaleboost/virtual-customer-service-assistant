<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdminProfile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Your Profile | CAS';
		$this->load->view('super-admin/admin-profile',$data);
	}
}