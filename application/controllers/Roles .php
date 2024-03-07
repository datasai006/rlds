<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// application/controllers/Roles.php

class Roles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tbl_roles_model');
        $this->load->model('MenuModel');
    }

    public function index() {
        $data['roles'] = $this->tbl_roles_model->get_roles();
       
    }

    public function create() {
         $data = array(
        "role" => $this->input->post("role"),
        "description" => $this->input->post("description")
        
    );

    $this->tbl_roles_model->insert_data($data);

   
    redirect('roles');
    }

   public function edit($id) {
    $data['role'] = $this->tbl_roles_model->get_role_by_id($id);
   
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
     $this->load->view('edit_role', $data);
}


  public function update($id) {
    $data = array(
        "role" => $this->input->post("role"),
        "description" => $this->input->post("description")
        
    );

    $this->tbl_roles_model->update_role($id, $data);

   
    redirect('roles');
}


   public function delete($id) {
    $this->tbl_roles_model->delete_role($id);

   
     redirect('roles');
}

}