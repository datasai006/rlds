<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rolesmanage extends CI_Controller {
     public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Role_model');
        $this->load->model('MenuModel');
    }
	public function index()
	{
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 4;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'view');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can view: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to view this page. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                // Handle the case where the user chooses to stay on the current page
                // Redirect to the dashboard after a delay
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
		$data['user_types'] = $this->Role_model->get_user_types();
     
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
		$this->load->view('roles/manage',$data);
	}
// 	public function add_role()
// {
//     // Get login session data
//     $loginSession = $this->session->userdata('LoginSession');
//     $role_id = $loginSession['role_id'];
//     $user_id = $loginSession['id'];

//     // Check if the user has permission to add roles
//     $entity_id = 4; // Assuming entity_id for adding roles
//     $canAdd = $this->check_permission($role_id, $user_id, $entity_id, 'add');
//     if (!$canAdd) {
//         // Handle access denied
//         $this->load->view('denied');
//         return;
//     }

//     // Get role name from form input
//     $role_name = $this->input->post("role");

//     // Get permissions from form input
//     $permissions = $this->input->post("permissions"); // Assuming checkbox values are sent as an array

//     // Process the permissions array if needed
//     // For example, convert it to a comma-separated string or store it in the database
    
//     // Prepare data to insert into the database
//     $data = array(
//         "role" => $role_name,
//         // You may also add permissions here or process them as needed
//     );

//     // Insert data into the database using the model
//     $inserted = $this->Role_model->insert_data($data);

//     // Redirect to the role management page after insertion
//     redirect(base_url('roles/Rolesmanage'));
// }
public function add_role()
{
    
    $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

  
    $entity_id = 4; 
    $canAdd = $this->check_permission($role_id, $user_id, $entity_id, 'add');
    if (!$canAdd) {
       
        $this->load->view('denied');
        return;
    }

    
    $role = $this->input->post("role");

   

    
    $data = array(
        "role" => $role
    );

   
    $insert_id = $this->Role_model->insert_data($data);
 $permissions = $this->input->post("menu_id");
   
    if (!empty($permissions)) {
        foreach ($permissions as $permission) {
            $permission_data = array(
                'role_id' => $insert_id,
              'menu_id' => $permission 
            );
          
            $this->Role_model->insert_permission($permission_data);
        }
    }

  
    redirect(base_url('roles/Rolesmanage'));
}

	public function edit_role($id){
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 4;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'edit');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: edit, Can edit: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to edit this data . Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                // Handle the case where the user chooses to stay on the current page
                // Redirect to the dashboard after a delay
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
    $data['user_types'] = $this->Role_model->get_user_types();
    $data['role_data'] = $this->Role_model->get_role_by_id($id);
    
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id,$user_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
    $this->load->view('roles/edit_rolesmanage', $data);
}
public function update_role($id){
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 4;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'approve');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: approve, Can approve: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to approve data. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                // Handle the case where the user chooses to stay on the current page
                // Redirect to the dashboard after a delay
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
    $data=array(
        "role"=>$this->input->post("role")
    );
    $this->Role_model->update_data($id, $data);
    redirect(base_url('roles/Rolesmanage'));
}
public function delete_role($id){
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 4;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'delete');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: delete, Can delete: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to delete data. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                // Handle the case where the user chooses to stay on the current page
                // Redirect to the dashboard after a delay
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
    $data = array('status' => 'inactive');
    $this->Role_model->update_data($id, $data);

    redirect(base_url('roles/Rolesmanage'));
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