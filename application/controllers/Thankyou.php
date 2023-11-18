<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends CI_Controller {

	public function index()
	{
		if (isset($_COOKIE['my_unique_id'])) {
			$uniqueId = $_COOKIE['my_unique_id'];	
		} 
		
		$data['title'] = 'Thankyou | CAS';
		$this->load->view('enduser/thankyou',$data);
	}
}
