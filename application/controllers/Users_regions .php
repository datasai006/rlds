<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users_regions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tbl_users_regions_model');
    }

    public function index() {
        $data['users_regions'] = $this->Tbl_users_regions_model->get_all_users_regions();
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('users_regions/index', $data);
    }

    public function create() {
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('users_regions/create');
    }

    public function store() {
        $data = array(
            'region_id' => $this->input->post('region_id'),
            'user_id' => $this->input->post('user_id'),
            
        );

        $insert_id = $this->Tbl_users_regions_model->create_user_region($data);
        redirect('users_regions');
    }

    public function edit($id) {
        $data['user_region'] = $this->Tbl_users_regions_model->get_user_region_by_id($id);
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('users_regions/edit', $data);
    }

    public function update($id) {
        $data = array(
            'region_id' => $this->input->post('region_id'),
            'user_id' => $this->input->post('user_id'),
           
        );

        $this->Tbl_users_regions_model->update_user_region($id, $data);
        redirect('users_regions');
    }

    public function delete($id) {
        $this->Tbl_users_regions_model->delete_user_region($id);
        redirect('users_regions');
    }
}