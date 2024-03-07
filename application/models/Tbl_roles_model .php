<?php
// application/models/Tbl_roles_model.php

class Tbl_roles_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_roles() {
        // Your code to retrieve roles
        $query = $this->db->get('tbl_roles');
        return $query->result();
    }

    public function create_role($data) {
        // Your code to insert a new role
        $this->db->insert('tbl_roles', $data);
        return $this->db->insert_id();
    }

    public function update_role($id, $data) {
        // Your code to update a role by ID
        $this->db->where('id', $id);
        $this->db->update('tbl_roles', $data);
    }

    public function delete_role($id) {
        // Your code to delete a role by ID
        $this->db->where('id', $id);
        $this->db->delete('tbl_roles');
    }
}

?>