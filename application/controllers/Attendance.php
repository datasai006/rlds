<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
    
 public function __construct() {
        parent::__construct();
        $this->load->model('Attendance_model');
        $this->load->model('MenuModel');
    }
 public function index() {
        $data['employees'] = $this->Attendance_model->getEmployees();
        
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('attandance', $data);
    }
// public function updateAttendance() {
//     // Get data from the form
//     $employeeId = $this->input->post('employee_id');
//     $attendance = $this->input->post('attendance');
//     $otHours = $this->input->post('ot_hours');

//     // Ensure $attendance is a scalar value (not an array)
//     // You might need to adjust this based on your form structure
//     if (is_array($attendance)) {
//         $attendance = implode(',', $attendance); // Convert array to comma-separated string
//     }

//     // Update the data in the model
//     $this->Attendance_model->updateAttendance($employeeId, $attendance, $otHours);

//     // Redirect or load the view as needed
//     redirect('attendance'); // Change 'attendance' to the URL of your view
// }


public function updateAttendance() {
    if ($this->input->post()) {
        // Get the posted data
        $data = $this->input->post();
       

        // Loop through each employee record and update the database
        foreach ($data['id'] as $key => $employee_id) {
            $update_data = array(
                'attendance' => $data['attendance_' . $employee_id],
                'ot_hours'   => $data['ot_hours_' . $employee_id],
            );

            // Assuming you have a model named 'Attendance_model'
            $this->Attendance_model->updateAttendanceById($employee_id, $update_data);
        }

        // Redirect or show success message as needed
        redirect('Attendance');
    } else {
        // Handle invalid form submission or redirect to an error page
        redirect('your_error_route');
    }
}



}
    
    ?>