<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model{
    
       public function insert_data($data) {
        $this->db->insert(' tbl_roles', $data);
         return $this->db->insert_id();
    }
      public function get_user_types() {
         $this->db->where('status', 'active');
        $query = $this->db->get('tbl_roles');
        return $query->result_array();
    }
    public function get_role_by_id($id) {
        $query = $this->db->get_where('tbl_roles', array('id' => $id));
        return $query->row_array();
    }

    public function update_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_roles', $data);
    }

    public function delete_data($id) {
        $data = array(
            'status' => 'inactive',
        );

        $this->db->where('id', $id);
        return $this->db->update('tbl_roles', $data);
    }
    public function insert_role($data) {
        $this->db->insert('roles', $data);
        return $this->db->insert_id();
    }
    public function insert_permission($permission_data){
         $this->db->insert('tbl_role_menu_permissions', $permission_data);
        return $this->db->insert_id();
    }
    
}