<?php
class Residence_model extends CI_Model {
    
    public function insert_data($data) {
        return $this->db->insert('tbl_residence', $data);
    }
      public function get_residence_data() {
         $this->db->where('status', 'active');
        $query = $this->db->get('tbl_residence');
        return $query->result();
    }
     public function get_residence_data_by_id($id) {
       $this->db->where('id', $id);
        $query = $this->db->get('tbl_residence');
          return $query->row();
    }
      public function update_residence_data($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tbl_residence', $data);

        return $this->db->affected_rows(); 
    }
      public function delete_residence($id)
    {
        $data = array(
            'status' => 'inactive',
        );

        $this->db->where('id', $id);
        return $this->db->update('tbl_residence', $data);
    }
}
?>