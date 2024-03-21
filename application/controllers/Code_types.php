<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Code_types extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tbl_code_type_model');
        $this->load->model('MenuModel');
    }

    public function index() {
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 1;
    
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'view');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: view, Can view: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                    
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to view this page. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
        $data['code_types'] = $this->Tbl_code_type_model->get_code_types();
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
         $this->load->view('settings/codetype', $data);
    }
public function create() {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 1;
    
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can add: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                    
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to add this page. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
    $data = array(
        'code_type_cd' => $this->input->post('code_type_cd'),
        'code_type_desc' => $this->input->post('code_type_desc'),
        'code_type_desc_val' => $this->input->post('code_type_desc_val')
    );

 
    $inserted_id = $this->Tbl_code_type_model->insert_code_type($data);
        redirect('Code_types');
}


   public function edit($id) {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 1;
    
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'edit');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: edit, Can edit: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                    
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to edit this page. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
    $data['code_type'] = $this->Tbl_code_type_model->get_code_type_by_id($id);
    $data['code_types'] = $this->Tbl_code_type_model->get_code_types();
    
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
     $this->load->view('settings/editcodetype', $data);
}

public function update($id) {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 1;
    
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'view');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: view, Can view: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                    
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to view this page. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
    $data = array(
        "code_type_cd" => $this->input->post("code_type_cd"),
        "code_type_desc" => $this->input->post("code_type_desc"),
        "code_type_desc_val" => $this->input->post("code_type_desc_val"),
        "parent_code_type_id" => $this->input->post("parent_code_type_id"),
    );

    $this->Tbl_code_type_model->update_code_type($id, $data);
     redirect('code_types');
}


    public function delete($id) {
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 1;
    
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'delete');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: delete, Can delete: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                    
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to delete this page. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
     $this->Tbl_code_type_model->delete_code_type($id);
    redirect('code_types');
}
private function check_permission($role_id, $id, $entity_id, $action) {
    $query = $this->db->get_where('tbl_role_permissions', array(
        'role_id' => $role_id,
        'entity_id' => $entity_id,
        'user_id' => $id
    ));
    $row = $query->row_array();

    if ($row) {
        switch ($action) {
            case 'view':
                return $row['can_view'] == 1;
            case 'edit':
                return $row['can_edit'] == 1;
            case 'delete':
                return $row['can_delete'] == 1;
            case 'approve':
                return $row['can_approve'] == 1;
            case 'add':
                return $row['can_add'] == 1;
            default:
                return false;
        }
    } else {
        $query = $this->db->get_where('tbl_role_permissions', array(
            'role_id' => $role_id,
            'entity_id' => 0,
            'user_id' => $id,
        ));
        $row = $query->row_array();

        if ($row) {
            switch ($action) {
                case 'view':
                    return $row['can_view'] == 1;
                case 'edit':
                    return $row['can_edit'] == 1;
                case 'delete':
                    return $row['can_delete'] == 1;
                case 'approve':
                    return $row['can_approve'] == 1;
                case 'add':
                    return $row['can_add'] == 1;
                default:
                    return false;
            }
        } else {
            return false;
        }
    }
}
}
?>