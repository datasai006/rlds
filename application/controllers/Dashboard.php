<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
$this->load->model('MenuModel');
$this->load->model('User_model');
       
        $this->load->library('session');

       
        if (!$this->session->userdata('LoginSession')) {
           
            redirect(base_url('Login'));
        }
    }

public function index() {
    $loginSession = $this->session->userdata('LoginSession');
if ($loginSession && isset($loginSession['role_id'])) {
    $role_id = $loginSession['role_id'];
    $data['role_id'] = $role_id;  
    $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id); // Pass both role_id and user_id to the model function
    $data['menu_items'] = $this->MenuModel->get_menu_items();    
    $this->load->view('includes/sidebar', $data);
    $this->load->view('dashboard');
} else {
    redirect('login/index');
}

}


}
?>