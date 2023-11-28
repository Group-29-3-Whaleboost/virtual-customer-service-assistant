<?php
class Select_branch_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_branches() {
        $query = $this->db->get('branches');
        return $query->result();
    }
    
    // Add other methods as needed (e.g., insert_branch, update_branch, delete_branch)
}
