<?php


class Tbl_users_regions_model extends CI_Model {

    public function get_all_users_regions() {
        return $this->db->get('tbl_users_regions')->result();
    }

    public function get_user_region_by_id($id) {
        return $this->db->get_where('tbl_users_regions', array('id' => $id))->row();
    }

    public function create_user_region($data) {
        $this->db->insert('tbl_users_regions', $data);
        return $this->db->insert_id();
    }

    public function update_user_region($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_users_regions', $data);
    }

    public function delete_user_region($id) {
        $this->db->delete('tbl_users_regions', array('id' => $id));
    }
}


?>