<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission_lib {
    
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->model('RolePermission_model'); // Load your role permission model
    }

    public function check_permission($permission) {
        // Get the user's role ID from session
        $role_id = $this->CI->session->userdata('LoginSession')['role_id'];

        // Check if the user's role has the specified permission
        $has_permission = $this->CI->RolePermission_model->check_permission($role_id, $permission);

        return $has_permission;
    }
}
?>