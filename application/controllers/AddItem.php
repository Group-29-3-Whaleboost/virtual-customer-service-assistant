<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddItem extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

	public function index()
	{
		$data['title'] = 'Manupulate Items | CAS';
		$data['items'] = $this->Item_model->get_all_items();
        $this->load->view('manager/addItem', $data);
	}

	public function edit($id) {
		$data['title'] = 'Edit Item | CAS';
        $data['item'] = $this->Item_model->get_item_by_id($id);
        if ($data['item']) {
            $this->load->view('manager/editItem', $data);
        } else {
            redirect('AddItem/index');
        }
    }

	public function update($id) {
		if ($_POST) {
			$config['upload_path'] = './uploads/'; 
			$config['allowed_types'] = 'gif|jpg|jpeg|png'; 
			$config['max_size'] = 2048; 
	
			$this->load->library('upload', $config);
	
			if ($this->upload->do_upload('userfile')) { 
				$upload_data = $this->upload->data();
				$image_path = $upload_data['file_name'];
	
				$item_data = array(
					'item_name' => $this->input->post('item_name'),
					'price' => $this->input->post('price'),
					'description' => $this->input->post('description'),
					'offer' => $this->input->post('offer'),
					'image' => $image_path 
				);
	
				$this->Item_model->update_item($id, $item_data);
				redirect('Additem/index');
			} else {
				$error = $this->upload->display_errors();
				redirect('Additem/index');
			}
		} else {
			redirect('Additem/index');
		}
	}
	

	public function delete($id) {
        $this->Item_model->delete_item($id);
        redirect('AddItem/index');
    }
}
