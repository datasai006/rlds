<?php
// application/models/Tbl_role_permissions_model.php

class Tbl_role_permissions_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_role_permissions() {
        // Your code to retrieve role permissions
        $query = $this->db->get('tbl_role_permissions');
        return $query->result();
    }
     public function get_role_permission_by_id($id) {
         $this->db->where('id', $id);
        $this->db->get('tbl_role_permissions');
    }

    public function create_role_permission($data) {
        // Your code to insert a new role permission
        $this->db->insert('tbl_role_permissions', $data);
        return $this->db->insert_id();
    }

    public function update_role_permission($id, $data) {
        // Your code to update a role permission by ID
        $this->db->where('id', $id);
        $this->db->update('tbl_role_permissions', $data);
    }

    public function delete_role_permission($id) {
        // Your code to delete a role permission by ID
        $this->db->where('id', $id);
        $this->db->delete('tbl_role_permissions');
    }
}

?>