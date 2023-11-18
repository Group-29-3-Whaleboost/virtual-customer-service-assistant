<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

	public function index()
	{
		$data['title'] = 'verify | CAS';
		$this->load->view('assistent/verify',$data);
	}
}
