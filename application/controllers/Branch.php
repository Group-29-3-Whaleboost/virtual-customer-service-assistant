<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Branch | CAS';
		$this->load->view('super-admin/branch',$data);
	}
}

?>