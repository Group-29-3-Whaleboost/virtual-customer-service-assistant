<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchItem extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Search Items | CAS';
		$this->load->view('enduser/search-item',$data);
	}
}
