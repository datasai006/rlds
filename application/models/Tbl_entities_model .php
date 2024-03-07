<?php 
// application/models/Tbl_entities_model.php

class Tbl_entities_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_entities() {
        // Your code to retrieve entities
        $query = $this->db->get('tbl_entities');
        return $query->result();
    }
      public function get_entity_by_id($id) {
          $this->db->where('id', $id);
        $this->db->get('tbl_entities');
    }

    public function create_entity($data) {
        // Your code to insert a new entity
        $this->db->insert('tbl_entities', $data);
        return $this->db->insert_id();
    }

    public function update_entity($id, $data) {
        // Your code to update an entity by ID
        $this->db->where('id', $id);
        $this->db->update('tbl_entities', $data);
    }

    public function delete_entity($id) {
        // Your code to delete an entity by ID
        $this->db->where('id', $id);
        $this->db->delete('tbl_entities');
    }
}

?>