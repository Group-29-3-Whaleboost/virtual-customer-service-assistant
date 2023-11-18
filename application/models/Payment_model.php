<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_model extends CI_Model {

    public function insert_payment() {
        $data = array(
            'user_id' =>$this->session->userdata('user_id'),
            'paymentArray' =>$_GET['cart'],
            'payment' => false,
            'verified' => false,
        );
        $this->db->insert('payment', $data);
    }

    public function update_verify($id) {

		$data = array(
			'payment' => true,
			'verified' => true
		);

		$this->db->where('id', $id);
		$this->db->update('payment', $data);
    }

    // public function get_users() {
    //     return $this->db->get('users')->result();
    // }

    // public function get_user($id) {
    //     return $this->db->where('id', $id)->get('users')->row();
    // }

    // public function insert_user() {
    //     $data = array(
    //         'name' => $this->input->post('name'),
    //         'age' => $this->input->post('age'),
    //         'password' => $this->input->post('password'),
    //         'email' => $this->input->post('email'),
    //     );
    //     $this->db->insert('users', $data);
    // }

    // public function update_user($id) {
    //     $data = array(
    //         'name' => $this->input->post('name'),
    //         'age' => $this->input->post('age')
    //     );
    //     $this->db->where('id', $id)->update('users', $data);
    // }

    // public function delete_user($id) {
    //     $this->db->where('id', $id)->delete('users');
    // }

    // public function get_user_by_email($email) {
    //     return $this->db->where('email', $email)->get('users')->row();
    // }

    // public function get_branch_by_user_id($user_id) {
    //     // Define the table name
    //     $table_name = 'users'; // Change this to your actual table name if different

    //     // Query to retrieve the branch based on the user ID
    //     $this->db->select('branch');
    //     $this->db->where('id', $user_id);
    //     $query = $this->db->get($table_name);

    //     // Check if the query was successful
    //     if ($query->num_rows() > 0) {
    //         // Return the branch ID
    //         return $query->row()->branch;
    //     } else {
    //         // Return null if the user is not found
    //         return null;
    //     }
    // }
}
