<?php
class Tbl_code_type_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
 public function insert_code_type($data) {
        $this->db->insert('tbl_code_type', $data);
        return $this->db->insert_id();
    }
    public function get_code_types() {
       $this->db->where('status', 'active');
        $query = $this->db->get('tbl_code_type');
        return $query->result_array();
    }
      public function get_code_type_by_id($id) {
       
        $query = $this->db->get_where('tbl_code_type', array('id' => $id));
        
       
        if ($query->num_rows() > 0) {
           
            return $query->row_array();
        } else {
            
            return null;
        }
    }

    public function create_code_type($data) {
      
        $this->db->insert('tbl_code_type', $data);
        return $this->db->insert_id();
    }

    public function update_code_type($id, $data) {
       
        $this->db->where('id', $id);
        $this->db->update('tbl_code_type', $data);
    }

    public function delete_code_type($id) {
        $data = array(
        'status' => 'inactive'
    );
    $this->db->where('id', $id);
    $this->db->update('tbl_code_type', $data);
    }
  
}
?>