<?php
class Audits_model extends CI_Model {
    
public function get_all_audits() {
     return $this->db->get('tbl_audits')->result_array();
}
public function approved(){
     $this->db->where('status', 'approved'); 
        $query = $this->db->get('tbl_audits'); 
        return $query->result_array();
}
public function pending(){
     $this->db->where('status', 'pending'); 
        $query = $this->db->get('tbl_audits'); 
        return $query->result_array();
}
public function rejected(){
     $this->db->where('status', 'rejected'); 
        $query = $this->db->get('tbl_audits'); 
        return $query->result_array();
}

    public function get_employee_by_id($id) {
 $query = $this->db->get_where('tbl_audits', array('id' => $id, 'status' => 'active'));
        return $query->row();
    }

    public function insert_audits($data) {
        $this->db->insert(' tbl_audits', $data);
        return $this->db->insert_id();
    }

    public function update_employee($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_audits', $data);
    }

  public function update_employee_status($id, $status) {
    $data = array('status' => $status);
    $this->db->where('id', $id);
    $this->db->update('tbl_audits', $data);
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
        $query = $this->db->get(' tbl_audits');

        // Check if any row is returned
        return $query->num_rows() > 0;
    }
     public function get_audit_by_id($audit_id) {
        // Retrieve audit data from the database based on the provided audit ID
        $query = $this->db->get_where('tbl_audits', array('id' => $audit_id));
        return $query->row(); // Assuming only one record per audit ID
    }


}