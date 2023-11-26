<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Checkout | CAS';
		$this->load->view('enduser/checkout',$data);
	}
}
