<?php
// application/helpers/permission_helper.php

if (!function_exists('check_view_permission')) {
    function check_view_permission($role_id, $entity_id) {
        $CI =& get_instance();
        $CI->load->model('Permission_model');
        return $CI->Permission_model->check_permission($role_id, $entity_id, 'view');
    }
}

// Similarly, create helper functions for other actions like edit, delete, and approve


?>