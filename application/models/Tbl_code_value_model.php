<?php
class Tbl_code_value_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
 public function insert_code_value($data) {
        
        $this->db->insert('tbl_code_value', $data);
        
       
        return $this->db->insert_id();
    }
    public function get_all_code_values() {
        $this->db->where('status', 'active');
        $query = $this->db->get('tbl_code_value');
        return $query->result_array();
    }
    
   public function get_code_value_by_id($id) {
    $this->db->where('id', $id);
    $query = $this->db->get('tbl_code_value');
    return $query->row_array(); 
}


    public function create_code_value($data) {
       
        $this->db->insert('tbl_code_value', $data);
        return $this->db->insert_id();
    }

    public function update_code_value($id, $data) {
      
        $this->db->where('id', $id);
        $this->db->update('tbl_code_value', $data);
    }

    public function delete_code_value($id) {
       
        $data = array(
        'status' => 'inactive'
    );
    $this->db->where('id', $id);
    $this->db->update('tbl_code_value', $data);
    }
    //  public function getCodeValuesByCodeTypeId($codeTypeId) {
    //     return $this->db->get_where('tbl_code_value', array('code_type_id' => $codeTypeId))->result();
    // }
    // In your model
  public function get_countries() {
    $query = $this->db->get_where('tbl_code_value', array('code_type_id' => 2)); 
    if ($query) {
        return $query->result_array();
    } else {
        
        log_message('error', 'Failed to fetch countries: ' . $this->db->error());
        return array();
    }
}

public function get_states() {
    $query = $this->db->get_where('tbl_code_value', array('code_type_id' => 3));
    if ($query) {
        return $query->result_array();
    } else {
        
        log_message('error', 'Failed to fetch states: ' . $this->db->error());
        return array();
    }
}


}

?>