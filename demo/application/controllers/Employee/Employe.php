<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('Employee_model');
    }
		public function view_employee()
	{
		  $data['employees'] = $this->Employee_model->get_employees();
        $this->load->view('viewemployee', $data);
	}

   public function add_employee() {
    if ($this->input->post()) {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);
            
        if ($this->upload->do_upload('employee_pic')) {
			 $file_data = $this->upload->data();
            $data = array(
                'employee_type' => $this->input->post('employee_type'),
                'designation' => $this->input->post('designation'),
                'department' => $this->input->post('department'),
				'employee_code' => $this->input->post('employee_code'),
				'doj' => $this->input->post('doj'),
				'qualification' => $this->input->post('qualification'),
				'experience' => $this->input->post('experience'),
				'esi' => $this->input->post('esi'),
				'pf' => $this->input->post('pf'),
				'insurance' => $this->input->post('insurance'),
				'skill_type' => $this->input->post('skill_type'),
				'category' => $this->input->post('category'),
				'employee_name' => $this->input->post('employee_name'),
				'dob' => $this->input->post('dob'),
				'religion' => $this->input->post('religion'),
				'nationality' => $this->input->post('nationality'),
				'caste' => $this->input->post('caste'),
				'martial_status' => $this->input->post('martial_status'),
				'resident_status' => $this->input->post('resident_status'),
				'physically_handicaped' => $this->input->post('physically_handicaped'),
				'mobile' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'employee_pic' => $file_data['file_name'],
				'aadhar' => $this->input->post('aadhar'),
				'driving_licence' => $this->input->post('driving_licence'),
				'bloog_group' => $this->input->post('bloog_group'),
				'gender' => $this->input->post('gender'),
				'father_name' => $this->input->post('father_name'),
				'mother_name' => $this->input->post('mother_name'),
				'p_country' => $this->input->post('p_country'),
				'p_state' => $this->input->post('p_state'),
				'p_place' => $this->input->post('p_place'),
				'p_pincode' => $this->input->post('p_pincode'),
				'permanent_address' => $this->input->post('permanent_address'),
				'residence_country' => $this->input->post('residence_country'),
				'residence_state' => $this->input->post('residence_state'),
				'residence_place' => $this->input->post('residence_place'),
				'residence_pincode' => $this->input->post('residence_pincode'),
				'residence_address' => $this->input->post('residence_address'),
				'emergency_name' => $this->input->post('emergency_name'),
				'emergency_no' => $this->input->post('emergency_no'),
				'contact_address' => $this->input->post('contact_address'),
            );  
            $insert_id = $this->Employee_model->insert_employee($data);

            if ($insert_id) {
           redirect('Dashboard'); 
            } else {
           
                echo 'Error inserting data into the database';
            }
        } else {
           
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
        }
    } else {
        $this->load->view('addemployee');
    }
}


    public function success() {
        // Display a success message
        echo 'Employee added successfully!';
    }
	public function delete_employee($id) {
    $this->Employee_model->update_employee_status($id, 'inactive');
    redirect('Employee/Employe/view_employee',$data);
}
// public function edit_employee($id) {
//     if ($this->input->post()) {
//         $data = $this->input->post();
//         // $this->Employee_model->update_employee($id, $data);
//         // redirect('viewemployee');
// 		 $data['employees'] = $this->Employee_model->get_employees();
//         $this->load->view('viewemployee', $data);
//     } else {
//         // Load designations from the database
//         $data['designations'] = $this->Employee_model->get_designations();
// 		 $data['departments'] = $this->Employee_model->get_departments();
//         // Get existing employee data
//         $data['employee'] = $this->Employee_model->get_employee_by_id($id);

//         $this->load->view('editemployee', $data);
//     }
// }

public function edit_employee ($id) {
    if ($this->input->post()) {
        $data = $this->input->post();
        $this->Employee_model->update_employee($id, $data);
        redirect('Employee/Employe/view_employee',$data);
    } else {
        $data['designations'] = $this->Employee_model->get_designations();
        $data['departments'] = $this->Employee_model->get_departments();
        $data['employee'] = $this->Employee_model->get_employee_by_id($id);
		  $data['countries'] = $this->Employee_model->get_countries();
		 $data['residence_states'] = $this->Employee_model->get_residence_states();
		  $data['nationalities'] = $this->Employee_model->get_nationalities();
		  $data['religions'] = $this->Employee_model->get_religions();
		   $data['castes'] = $this->Employee_model->get_castes();
			$data['categories'] = $this->Employee_model->get_categories();
			 $data['skill_types'] = $this->Employee_model->get_skill_types();
		

        if ($data['employee']) {
			
            $this->load->view('editemployee', $data);
			
        } else {
            echo "Employee not found"; 
        }
    }
}
//    function edit_employee(){
//         $this->load->model('Employee_model');
//         $id = $this->uri->segment(3);
//         $data['designations'] = $this->Employee_model->get_designations();
//         $data['departments'] = $this->Employee_model->get_departments();
//         $data['employee'] = $this->Employee_model->get_employee_by_id($id);
//         $this->load->view('editemployee', $data);
            
            
//         }


}