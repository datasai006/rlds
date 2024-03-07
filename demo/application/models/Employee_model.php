<?php
class Employee_model extends CI_Model {
    
   public function get_employees() {
        $this->db->where('status', 'active');
    $query = $this->db->get('tbl_employee');
    return $query->result();
    }

    public function get_employee_by_id($id) {
 $query = $this->db->get_where('tbl_employee', array('id' => $id, 'status' => 'active'));
        return $query->row();
    }

    public function insert_employee($data) {
        $this->db->insert('tbl_employee', $data);
        return $this->db->insert_id();
    }

    public function update_employee($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_employee', $data);
    }

  public function update_employee_status($id, $status) {
    $data = array('status' => $status);
    $this->db->where('id', $id);
    $this->db->update('tbl_employee', $data);
}
public function get_designations() {
    $query = $this->db->get('tbl_designations');
    return $query->result();
}
public function get_departments() {
    $query = $this->db->get('tbl_departments');
    return $query->result();
}
public function get_residence_states() {
    $query = $this->db->get('tbl_states');
    return $query->result();
}
public function get_countries() {
    $query = $this->db->get('tbl_countries');
    return $query->result();
}
public function get_nationalities() {
    $query = $this->db->get('tbl_nationalities');
    return $query->result();
}
public function get_religions() {
    $query = $this->db->get('tbl_religions');
    return $query->result();
}
public function get_castes() {
    $query = $this->db->get('tbl_castes');
    return $query->result();
}
public function get_categories() {
    $query = $this->db->get('tbl_categories');
    return $query->result();
}
public function get_skill_types() {
    $query = $this->db->get('tbl_skill_types');
    return $query->result();
}


}