<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audits extends CI_Controller {
  public function __construct() {
        parent::__construct();
		$this->load->helper(array('form', 'url'));		
        $this->load->model('Tbl_code_type_model');
        $this->load->model('Tbl_code_value_model'); 
        $this->load->model('MenuModel');
        $this->load->model('Audits_model');
        $this->load->model('Employee_model');
    }

	public function index()
	{
         $types = array("Office Verification", "Income Verification", "Residential Verification");
        $data['types'] = $types;
          $data['countries'] = $this->Tbl_code_value_model->get_countries();
          $data['states'] = $this->Tbl_code_value_model->get_states();
           $data['employees'] = $this->Employee_model->get_employees();
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
		$this->load->view('audits/addaudits',$data);
	}

    // insert audits data
    
    public function insert() {
        if ($this->input->post()) {
            $data = array(
              'Assign_to' => $this->input->post('Assign_to'),
            'Verification_Type' => $this->input->post('Verification_Type'),
            'Contact_person' => $this->input->post('Contact_person'),
            'Contact_number' => $this->input->post('Contact_number'),
            'address_line_1' => $this->input->post('address_line_1'),
            'address_line_2' => $this->input->post('address_line_2'),
            'city' => $this->input->post('city'),
            'pincode' => $this->input->post('pincode'),
            'state' => $this->input->post('state')
            );

            $this->db->trans_begin();
        
            $insert_id = $this->Audits_model->insert_audits($data);
            
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                echo 'Error occurred while inserting data: ' . $this->db->error()['message'];
            } else {
                $this->db->trans_commit();
                redirect('Dashboard');
            }
        } else {
            $data['countries'] = $this->Tbl_code_value_model->get_countries();
            $data['states'] = $this->Tbl_code_value_model->get_states();
            
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
            $this->load->view('audits/addaudits', $data);
        }
    }
    
    // view audits data
    public function view_data() { 
    $data['audits'] = $this->Audits_model->get_all_audits();  
    
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);  
    $this->load->view('audits/viewaudits', $data);
}

    public function approved() { 
    $data['audits'] = $this->Audits_model->approved();  
    
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);  
    $this->load->view('audits/viewaudits', $data);
}
    public function pending() { 
    $data['audits'] = $this->Audits_model->pending();  
    
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);  
    $this->load->view('audits/viewaudits', $data);
}
    public function rejected() { 
    $data['audits'] = $this->Audits_model->rejected();  
    
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);  
    $this->load->view('audits/viewaudits', $data);
}
 public function edit_audit($audit_id) {
       
        $data['audit'] = $this->Audits_model->get_audit_by_id($audit_id);
        
       
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('audits/edit_audit', $data);
    }

    // Update an audit record
    public function update_audit($audit_id) {
        if ($this->input->post()) {
         
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'mobile_no' => $this->input->post('mobile_no'),
              
            );

        
            $this->Audits_model->update_audit($audit_id, $data);
           
            redirect('audits/view_data');
        }
    }

    // Delete an audit record
    public function delete_audit($audit_id) {
        // Delete the audit record
        $this->Audits_model->delete_audit($audit_id);
        
        // Redirect to view audits or to a different page
        redirect('audits/view_data');
    }

}