<?php
class Employee_model extends CI_Model {
    
public function get_employees() {
    $this->db->select('*');
    $this->db->where('status', 'active');
    $query = $this->db->get('tbl_employees');
    return $query->result_array();
}


    public function get_employee_by_id($id) {
 $query = $this->db->get_where('tbl_employees', array('id' => $id, 'status' => 'active'));
        return $query->row();
    }

    public function insert_employee($data) {
        $this->db->insert('tbl_employees', $data);
        return $this->db->insert_id();
    }

     public function update_employee_data($id, $data) {
       
        $this->db->where('id', $id);
        $this->db->update('tbl_employees', $data);
        return $this->db->affected_rows() > 0;
    }

  public function update_employee_status($id, $status) {
    $data = array('status' => $status);
    $this->db->where('id', $id);
    $this->db->update('tbl_employees', $data);
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
   public function check_entity_exists($entity_id) {
        // Query to check if the entity ID exists in the tbl_entities table
        $this->db->where('id', $entity_id);
        $query = $this->db->get(' tbl_employees');

        // Check if any row is returned
        return $query->num_rows() > 0;
    }


}