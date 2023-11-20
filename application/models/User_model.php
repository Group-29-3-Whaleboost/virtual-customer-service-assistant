<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_users() {
        return $this->db->get('user')->result();
    }

    public function get_user($id) {
        return $this->db->where('user_id', $id)->get('user')->row();
    }

    public function insert_user() {
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
        );
        $this->db->insert('user', $data);
    }

    public function update_user($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age')
        );
        $this->db->where('id', $id)->update('user', $data);
    }

    public function delete_user($id) {
        $this->db->where('id', $id)->delete('user');
    }

    public function get_user_by_email($email) {
        return $this->db->where('email', $email)->get('user')->row();
    }

    // public function get_branch_by_user_id($user_id) {
    //     // Define the table name
    //     $table_name = 'user'; // Change this to your actual table name if different

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
