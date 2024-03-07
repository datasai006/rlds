<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rolesass extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Role_model');
		$this->load->model('User_model');
        $this->load->model('MenuModel');
        $this->load->model('RolePermission_model');
         $this->load->dbutil();
            $this->load->library('session');

       
        if (!$this->session->userdata('LoginSession')) {
           
            redirect(base_url('Login'));
        }
    }

	public function index(){
          $loginSession = $this->session->userdata('LoginSession');
                  $role_id = $loginSession['role_id'];
                      $user_id = $loginSession['id'];

    
              $entity_id = 5;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'view');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: view, Can view: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
            echo '<script>
                  if (confirm("Access Denied: You do not have permission to view this page. Would you like to go to the dashboard?")) {
        window.location.href = "' . base_url('dashboard') . '";
              } else {
        // Handle the case where the user chooses to stay on the current page
              }
               setTimeout(function() {
               window.location.href = "' . base_url('dashboard') . '";
            }, 2000);
            </script>';




   
                    exit();
                }
         $loginSession = $this->session->userdata('LoginSession');
         if ($loginSession && isset($loginSession['role_id'])) {
        $role_id = $loginSession['role_id'];
		 $data['users'] = $this->User_model->get_users();
         $data['roles'] = $this->Role_model->get_user_types();
         $data['tables']= $this->RolePermission_model->get_tables();
         $menu_levels = array(2, 3);
        $data['menuscheck'] = $this->MenuModel->get_menuslevel($menu_levels);
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
		 $this->load->view('roles/rolesass',$data);
           } else {
        redirect('login/index');
        }
	}
// public function submit_data()
// {
//     if ($this->input->post()) {
//         $user_id = $this->input->post('entity_id');
//         $role_id = $this->input->post('role_id');

//         // Check if the entity ID exists in the tbl_entities table
//         $entity_exists = $this->Employee_model->check_entity_exists($user_id);

//         if ($entity_exists) {
//             $can_view = $this->input->post('can_view') ? 1 : 0;
//             $can_edit = $this->input->post('can_edit') ? 1 : 0;
//             $can_delete = $this->input->post('can_delete') ? 1 : 0;
//             $can_approve = $this->input->post('can_approve') ? 1 : 0;

//             $data = array(
//                 'role_id' => $role_id,
//                 'entity_id' => $user_id,
//                 'can_view' => $can_view,
//                 'can_edit' => $can_edit,
//                 'can_delete' => $can_delete,
//                 'can_approve' => $can_approve,
//                 'created_at' => date('Y-m-d H:i:s'),
//                 'updated_at' => date('Y-m-d H:i:s')
//             );

//             // Insert data into the database using the model
//             $this->RolePermission_model->insert_permission($data);

//             redirect('Dashboard');
//         } else {
//             // Redirect with error message indicating entity ID doesn't exist
//             redirect('roles/Rolesass/index');
//         }
//     } else {
//         redirect('roles/Rolesass/index');
//     }
// }
//   public function submit_data() {
//         // Check if the form is submitted
//         if ($this->input->post()) {
//             // Retrieve data from the form
//             $user_id = $this->input->post('user_id');
//             $role_id = $this->input->post('role_id');

//             // Loop through table names to handle permissions for each table
//             foreach ($this->get_table_names() as $table) {
//                 // Check if the checkbox for this table is checked
//                 $can_view = $this->input->post('can_view_' . $table) ? 1 : 0;
//                 $can_edit = $this->input->post('can_edit_' . $table) ? 1 : 0;
//                 $can_delete = $this->input->post('can_delete_' . $table) ? 1 : 0;
//                 $can_approve = $this->input->post('can_approve_' . $table) ? 1 : 0;

//                 // Prepare data array for insertion
//                 $data = array(
//                     'role_id' => $role_id,
//                     'user_id' => $user_id,
//                     'entity_id' => $table,
//                     'can_view' => $can_view,
//                     'can_edit' => $can_edit,
//                     'can_delete' => $can_delete,
//                     'can_approve' => $can_approve,
//                     'created_at' => date('Y-m-d H:i:s'),
//                     'updated_at' => date('Y-m-d H:i:s')
//                 );

//                 // Insert data into the database using the model
//                 $this->RolePermission_model->insert_permission($data);
//             }

//             // Redirect to Dashboard after successful submission
//             redirect('Dashboard');
//         } else {
//             // If form is not submitted, redirect to the index page of roles controller
//             redirect('roles/Rolesass/index');
//         }
//     }


// private function get_table_names() {
  
//     $query = $this->db->get('tbl_entities');
 
//     $tables = array();

    
//     if ($query->num_rows() > 0) {
       
//         foreach ($query->result() as $row) {
           
//             $tables[] = $row->id;
//         }
//     }

//     return $tables;
// }



// public function submit_data() {
//     // Check if the form is submitted
//     if ($this->input->post()) {
//         // Retrieve data from the form
//         $user_id = $this->input->post('user_id');
//         $role_id = $this->input->post('role_id');

//         // Loop through table IDs to handle permissions for each table
//         foreach ($this->get_tables() as $table_id) {
//             // Check if the checkbox for this table is checked
//             $can_view = $this->input->post('can_view_' . $table_id) ? 1 : 0;
//             $can_edit = $this->input->post('can_edit_' . $table_id) ? 1 : 0;
//             $can_delete = $this->input->post('can_delete_' . $table_id) ? 1 : 0;
//             $can_approve = $this->input->post('can_approve_' . $table_id) ? 1 : 0;

//             // Prepare data array for insertion
//             $data = array(
//                 'role_id' => $role_id,
//                 'user_id' => $user_id,
//                 'entity_id' => $table_id,
//                 'can_view' => $can_view,
//                 'can_edit' => $can_edit,
//                 'can_delete' => $can_delete,
//                 'can_approve' => $can_approve,
//                 'created_at' => date('Y-m-d H:i:s'),
//                 'updated_at' => date('Y-m-d H:i:s')
//             );

//             // Insert data into the database using the model
//             $this->RolePermission_model->insert_permission($data);
//         }

//         // Redirect to Dashboard after successful submission
//         redirect('Dashboard');
//     } else {
//         // If form is not submitted, redirect to the index page of roles controller
//         redirect('roles/Rolesass/index');
//     }
// }

// private function get_table_ids() {
//     $query = $this->db->get('tbl_entities');
//     $tables = array();

//     if ($query->num_rows() > 0) {
//         foreach ($query->result() as $row) {
//             $tables[] = $row->id;
//         }
//     }

//     return $tables;
// }

public function get_tables(){
    $tables_query = $this->db->get('tbl_entities');
    $tables = array();

    if ($tables_query->num_rows() > 0) {
        foreach ($tables_query->result() as $row) {
            // Store both table ID and name
            $tables[] = array(
                'id' => $row->id,
                'name' => $row->name
            );
        }
    }

    return $tables;
}

// public function submit_data() {
//     // Check if the form is submitted
//     if ($this->input->post()) {
//         // Retrieve data from the form
//         $user_id = $this->input->post('user_id');
//         $role_id = $this->input->post('role_id');

//         // Loop through table IDs to handle permissions for each table
//         foreach ($this->get_tables() as $table) {
//             $table_id = $table['id'];
//             // Check if the checkbox for this table is checked
//             $can_view = $this->input->post('can_view_' . $table_id) ? 1 : 0;
//             $can_edit = $this->input->post('can_edit_' . $table_id) ? 1 : 0;
//             $can_delete = $this->input->post('can_delete_' . $table_id) ? 1 : 0;
//             $can_approve = $this->input->post('can_approve_' . $table_id) ? 1 : 0;

//             // Prepare data array for insertion
//             $data = array(
//                 'role_id' => $role_id,
//                 'user_id' => $user_id,
//                 'entity_id' => $table_id,
//                 'can_view' => $can_view,
//                 'can_edit' => $can_edit,
//                 'can_delete' => $can_delete,
//                 'can_approve' => $can_approve,
//                 'created_at' => date('Y-m-d H:i:s'),
//                 'updated_at' => date('Y-m-d H:i:s')
//             );

//             // Insert data into the database using the model
//             $this->RolePermission_model->insert_permission($data);
//         }

//         // Redirect to Dashboard after successful submission
//         redirect('Dashboard');
//     } else {
//         // If form is not submitted, redirect to the index page of roles controller
//         redirect('roles/Rolesass/index');
//     }
// }
// public function submit_data() {
//     // Check if the form is submitted
//     if ($this->input->post()) {
//         // Retrieve data from the form
//         $user_id = $this->input->post('user_id');
//         $role_id = $this->input->post('role_id');

//         // Loop through table IDs to handle permissions for each table
//         foreach ($this->get_tables() as $table) {
//             $table_id = $table['id'];
//             // Check if the checkbox for this table is checked
//             $can_view = $this->input->post('can_view_' . $table_id) ? 1 : 0;
//             $can_edit = $this->input->post('can_edit_' . $table_id) ? 1 : 0;
//             $can_delete = $this->input->post('can_delete_' . $table_id) ? 1 : 0;
//             $can_approve = $this->input->post('can_approve_' . $table_id) ? 1 : 0;

//             // Check if a permission record already exists for this user, role, and table
//             $existing_permission = $this->RolePermission_model->get_permission($user_id, $role_id, $table_id);

//             // Prepare data array for insertion or update
//             $data = array(
//                 'role_id' => $role_id,
//                 'user_id' => $user_id,
//                 'entity_id' => $table_id,
//                 'can_view' => $can_view,
//                 'can_edit' => $can_edit,
//                 'can_delete' => $can_delete,
//                 'can_approve' => $can_approve,
//                 'updated_at' => date('Y-m-d H:i:s')
//             );

//             // Insert or update data into the database using the model
//             if ($existing_permission) {
//                 // If a record exists, update it
//                 $this->RolePermission_model->update_permission($existing_permission['id'], $data);
//             } else {
//                 // If no record exists, insert a new one
//                 $data['created_at'] = date('Y-m-d H:i:s');
//                 $this->RolePermission_model->insert_permission($data);
//             }
//         }

//         // Redirect to Dashboard after successful submission
//         redirect('roles/Rolesass/index');
//     } else {
//         // If form is not submitted, redirect to the index page of roles controller
//         redirect('roles/Rolesass/index');
//     }
// }
///////////////////////////////////////////////1/3/2024 working 
public function submit_data() {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 5;
    
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
   
    if ($this->input->post()) {
      
        $user_id = $this->input->post('user_id');
        $role_id = $this->input->post('role_id');

       
        foreach ($this->get_tables() as $table) {
            $table_id = $table['id'];
             $can_add = $this->input->post('can_add_' . $table_id) ? 1 : 0;
            $can_view = $this->input->post('can_view_' . $table_id) ? 1 : 0;
            $can_edit = $this->input->post('can_edit_' . $table_id) ? 1 : 0;
            $can_delete = $this->input->post('can_delete_' . $table_id) ? 1 : 0;
            $can_approve = $this->input->post('can_approve_' . $table_id) ? 1 : 0;

          
            $existing_permission = $this->RolePermission_model->get_permission($user_id, $role_id, $table_id);

            
            $data = array(
                'role_id' => $role_id,
                'user_id' => $user_id,
                'entity_id' => $table_id,
                 'can_add' => $can_add,
                'can_view' => $can_view,
                'can_edit' => $can_edit,
                'can_delete' => $can_delete,
                'can_approve' => $can_approve,
                'updated_at' => date('Y-m-d H:i:s')
            );

           
            if ($existing_permission) {
                
                $this->RolePermission_model->update_permission($existing_permission['id'], $user_id, $role_id, $data);
            } else {
               
                $data['created_at'] = date('Y-m-d H:i:s');
                $this->RolePermission_model->insert_permission($data);
            }
        }

        
        redirect('roles/Rolesass/index');
    } else {
        
        redirect('roles/Rolesass/index');
    }
}
/////////////////////////////////////////////1/3/2024
// public function submit_data() {
//       echo "Submit Data method accessed";
//     if ($this->input->post()) {
//         $user_id = $this->input->post('user_id');
//         $role_id = $this->input->post('role_id');
        
       
//         $menu_ids = $this->input->post('menu_id');

//         foreach ($menu_ids as $menu_id) {
//             foreach ($this->get_tables() as $table) {
//                 $table_id = $table['id'];

//                 $can_view = $this->input->post('can_view_' . $menu_id . '_' . $table_id) ? 1 : 0;
//                 $can_edit = $this->input->post('can_edit_' . $menu_id . '_' . $table_id) ? 1 : 0;
//                 $can_delete = $this->input->post('can_delete_' . $menu_id . '_' . $table_id) ? 1 : 0;
//                 $can_approve = $this->input->post('can_approve_' . $menu_id . '_' . $table_id) ? 1 : 0;

               
//                 $existing_permission = $this->RolePermission_model->get_permission($user_id, $role_id, $table_id, $menu_id);

               
//                 $data = array(
//                     'role_id' => $role_id,
//                     'user_id' => $user_id,
//                     'entity_id' => $table_id,
//                     'menu_id' => $menu_id,
//                     'can_view' => $can_view,
//                     'can_edit' => $can_edit,
//                     'can_delete' => $can_delete,
//                     'can_approve' => $can_approve,
//                     'updated_at' => date('Y-m-d H:i:s')
//                 );

              
//                 if ($existing_permission) {
//                     $this->RolePermission_model->update_permission($existing_permission['id'], $user_id, $role_id, $data);
//                 } else {
//                     $data['created_at'] = date('Y-m-d H:i:s');
//                     $this->RolePermission_model->insert_permission($data);
//                 }
//             }
//         }

//         redirect('roles/Rolesass/index');
//     } else {
//         redirect('roles/Rolesass/index');
//     }
// }

// public function submit_data() {
//     // Check if the form is submitted
//     if ($this->input->post()) {
//         // Retrieve data from the form
//         $user_id = $this->input->post('user_id');
//         $role_id = $this->input->post('role_id');

//         // Initialize an empty array to store entity IDs
//         $entity_id = array();

//         // Loop through table IDs to handle permissions for each table
//         foreach ($this->get_tables() as $table) {
//             $table_id = $table['id'];
//             // Check if the checkbox for this table is checked
//             $can_view = $this->input->post('can_view_' . $table_id) ? 1 : 0;
//             $can_edit = $this->input->post('can_edit_' . $table_id) ? 1 : 0;
//             $can_delete = $this->input->post('can_delete_' . $table_id) ? 1 : 0;
//             $can_approve = $this->input->post('can_approve_' . $table_id) ? 1 : 0;

//             // If permission is granted, add the entity ID to the array
//             if ($can_view || $can_edit || $can_delete || $can_approve) {
//                 $entity_id[] = $table_id;
//             }
//         }

//         // Convert the array of entity IDs to a comma-separated string
//         $entity_ids_string = implode(',', $entity_id);

//         // Prepare data array for insertion or update
//         $data = array(
//                 'role_id' => $role_id,
//                 'user_id' => $user_id,
//                 'entity_id' => $entity_ids_string,
//                 'can_view' => $can_view,
//                 'can_edit' => $can_edit,
//                 'can_delete' => $can_delete,
//                 'can_approve' => $can_approve,
//                 'updated_at' => date('Y-m-d H:i:s')
//         );

//         // Insert or update data into the database using the model
//         $this->RolePermission_model->insert_or_update_permission($user_id, $role_id, $data);

//         // Redirect to Dashboard after successful submission
//         redirect('roles/Rolesass/index');
//     } else {
//         // If form is not submitted, redirect to the index page of roles controller
//         redirect('roles/Rolesass/index');
//     }
// }

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