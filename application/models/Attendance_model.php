<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
     public function getEmployees() {
        $query = $this->db->get('tbl_employee');
        return $query->result();
    }
    //    public function updateAttendance( $employeeId, $attendance, $otHours) {
    //          $data = array(
    //         'attendance' => $attendance,
    //         'ot_hours' => $otHours
    //     );
    //     $this->db->where('id', $employeeId);
    //     $this->db->update('tbl_employee', $data);
    // }
// In your Attendance_model

public function updateAttendanceById($employee_id, $data) {
    $this->db->where('id', $employee_id);
    $this->db->update('tbl_employee', $data);
}



}

    