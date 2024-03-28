<?php
class Income_model extends CI_Model {
    
//  public function insert_data($data) {
//   $query =  $this->db->insert('tbl_incometax', $data);
//   return $query;
// }

public function insert_data($data) {
    $this->db->insert('tbl_incometax', $data);
    return $this->db->insert_id();
}

     public function get_all_income_data() {
         $this->db->where('status', 'In-review');
    $query = $this->db->get('tbl_incometax'); 
    return $query->result();
    }
    public function get_income_data_by_id($IncomeTaxID) {
        $query = $this->db->get_where('tbl_incometax', array('id' => $IncomeTaxID)); 
        return $query->row();
    }

    // public function update_income_data($IncomeTaxID, $data) {
    //     $this->db->where('id', $IncomeTaxID);
    //      return $this->db->update('tbl_incometax', $data); 
        
    // }
      public function update_income_data($incomeTaxID, $data) {
      
        $this->db->where('id', $incomeTaxID);
        $this->db->update('tbl_incometax', $data);
        return $this->db->affected_rows() > 0; 
    }
     public function delete_income($IncomeTaxID)
    {
        $data = array(
            'status' => 'Reject',
        );

        $this->db->where('id', $IncomeTaxID);
        return $this->db->update('tbl_incometax', $data);
    }
 public function save_data($data, $id = null) {
    $result = [];

    if ($id !== null) {
        
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('tbl_incometax');

       
        if ($this->db->affected_rows() > 0) {
            $result['status'] = 'success';
        } else {
            $result['status'] = 'error';
            $result['message'] = 'Error updating data in the database.';
        }
    } else {
       
        $this->db->insert('tbl_incometax', $data);

        
        if ($this->db->affected_rows() > 0) {
            $result['status'] = 'success';
        } else {
            $result['status'] = 'error';
            $result['message'] = 'Error inserting data into the database.';
        }
    }

    return $result;
}


}
?>