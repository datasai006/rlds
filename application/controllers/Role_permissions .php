<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Role_permissions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tbl_role_permissions_model');
        $this->load->model('MenuModel');
    }

    public function index() {
        $data['role_permissions'] = $this->tbl_role_permissions_model->get_role_permissions();
        
    }

  public function create() {
    $data = array(
        "role_id" => $this->input->post("role_id"),
        "entity_id" => $this->input->post("entity_id"),
        "can_view" => $this->input->post("can_view"),
        "can_edit" => $this->input->post("can_edit"),
        "can_delete" => $this->input->post("can_delete"),
        "can_approve" => $this->input->post("can_approve")
    );

    $this->load->model('tbl_role_permissions_model');
    $insert_id = $this->tbl_role_permissions_model->create_role_permission($data);
    redirect('Dashboard');
}


   public function edit($id) {
    $data['role_permission'] = $this->tbl_role_permissions_model->get_role_permission_by_id($id);
  
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
     $this->load->view('edit_role_permission', $data);
}


   public function update($id) {
    $data = array(
        "role_id" => $this->input->post("role_id"),
        "entity_id" => $this->input->post("entity_id"),
        "can_view" => $this->input->post("can_view"),
        "can_edit" => $this->input->post("can_edit"),
        "can_delete" => $this->input->post("can_delete"),
        "can_approve" => $this->input->post("can_approve")
    );

    $this->tbl_role_permissions_model->update_role_permission($id, $data);

    
     redirect('role_permissions');
}


  public function delete($id) {
    $this->tbl_role_permissions_model->delete_role_permission($id);

    
     redirect('role_permissions');
}

}