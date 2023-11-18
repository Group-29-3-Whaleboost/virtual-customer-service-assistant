<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Your Profile | CAS';
		$this->load->view('enduser/profile',$data);
	}
}