<?php
class Office_model extends CI_Model {
    
    public function insert_data($data) {
         $this->db->insert('tbl_office', $data);
          return $this->db->insert_id();
    }
    public function get_all_office_data() {
         $this->db->where('status', 'In-review');
    $query = $this->db->get('tbl_office');
    return $query->result();
}
  public function get_office_by_id($id) {
     $this->db->where('id', $id);
        $query = $this->db->get('tbl_office');
          return $query->row();
    }
    public function update_office_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_office', $data);
         return $this->db->affected_rows() > 0; 
    }
     public function delete_office($id)
    {
        $data = array(
            'status' => 'Reject',
        );

        $this->db->where('id', $id);
        return $this->db->update('tbl_office', $data);
    }

}
?>