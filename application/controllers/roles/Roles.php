<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Role_model');
        $this->load->model('MenuModel');
    }

	public function index()
	{
		$data['roles'] = $this->Role_model->get_user_types();
    
        // $data['menus'] = $this->MenuModel->get_menus();
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
		$this->load->view('roles/roles',$data);
	}
	public function add_role(){
		$data=array(
			
			"role_for"=>$this->input->post("role_for"),

		);
		 $this->load->model('Role_model');
		 $insert_id = $this->Role_model->insert_role($data);
		 
	}
	 public function submit_permissions() {
        $role_for = $this->input->post('role_for');
        $permissions = $this->input->post(['audit_status', 'user_management', 'dealer_management', 'settings', 'qn_mgmt']);

        $data = [
            'role_for' => $role_for,
            'audit_status' => isset($permissions['audit_status']),
            'user_management' => isset($permissions['user_management']),
            'dealer_management' => isset($permissions['dealer_management']),
            'settings' => isset($permissions['settings']),
            'qn_mgmt' => isset($permissions['qn_mgmt']),
        ];

        $this->Role_model->insert_role($data);

        redirect('roles/Roles/index');
    }
}