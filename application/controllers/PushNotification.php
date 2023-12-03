<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PushNotification extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Push Notification | CAS';
		$this->load->view('manager/push-notification',$data);
	}
}

?>