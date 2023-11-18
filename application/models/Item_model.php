<?php
class Item_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }

    public function insert_item($data) {
        return $this->db->insert('Item', $data);
    }

    public function get_all_items() {
        return $this->db->get('item')->result();
    }

    public function get_item_by_id($id) {
        return $this->db->get_where('item', array('item_id' => $id))->row();
    }

    public function update_item($id, $data) {
        $this->db->where('item_id', $id);
        $this->db->update('item', $data);
        return $this->db->affected_rows();
    }

    public function delete_item($id) {
        $this->db->where('item_id', $id);
        $this->db->delete('item');
        return $this->db->affected_rows();
    }
}
?>
