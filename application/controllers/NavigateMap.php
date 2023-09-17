<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NavigateMap extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Navigate Map | CAS';
		$this->load->view('enduser/navigate-map',$data);
	}
}
