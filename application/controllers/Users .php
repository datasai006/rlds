<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// application/controllers/Users.php

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tbl_users_model');
    }

    public function index() {
        $data['users'] = $this->tbl_users_model->get_users();
        // Your code to load a view with the users data
    }

    public function create() {
        // Your code to handle user creation
    }

    public function edit($id) {
        // Your code to load user data for editing
    }

    public function update($id) {
        // Your code to handle user update
    }

    public function delete($id) {
        // Your code to handle user deletion
    }
}

?>