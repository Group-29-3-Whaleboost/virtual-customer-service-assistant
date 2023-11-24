<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateManager extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Create Manager | CAS';
		$this->load->view('super-admin/create-manager',$data);
	}
}

?>