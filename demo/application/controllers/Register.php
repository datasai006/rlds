<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');
	}
   public function insert(){
    $this->form_validation->set_rules("firstname", 'First Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules("password", 'Password', 'required');
     
    if ($this->form_validation->run() == FALSE) {
       redirect(base_url('register'));
    } else {
        $firstname = $this->input->post('firstname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = array(
            'firstname' => $firstname,
            'email' => $email,
            'password' => $password
        );

        $this->load->model('register_model');
        $this->register_model->register($data, 'tbl_user');
        redirect(base_url('Login'));
    }
}

}