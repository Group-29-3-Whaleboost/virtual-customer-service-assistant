<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForSearchItemDevelopers extends CI_Controller {

	public function index()
	{
		$data['title'] = 'ForSearchItemDevelopers | CAS';
		$this->load->view('enduser/cart',$data);
	}
}
