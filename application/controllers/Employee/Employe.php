 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->model('MenuModel');
        $this->load->model('Employee_model');
        $this->load->model('Tbl_code_type_model');
        $this->load->model('Tbl_code_value_model');
        $this->load->model('Role_model');
        $this->load->library('session');
  
        if (!$this->session->userdata('LoginSession')) {
            redirect(base_url('Login'));
        }
    }

  public function view_employee() {
        $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 3;
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

        $data['countries'] = $this->Tbl_code_value_model->get_countries();
        $data['states'] = $this->Tbl_code_value_model->get_states();
       
        $data['employees'] = $this->Employee_model->get_employees();
        // $data['menus'] = $this->MenuModel->get_menus();
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
        $data['menu_items'] = $this->MenuModel->get_menu_items();
       
        $this->load->view('includes/sidebar', $data);
        $this->load->view('viewemployee', $data);
    }



// public function add_employee() {
   
//     $loginSession = $this->session->userdata('LoginSession');
//     $role_id = $loginSession['role_id'];
//     $user_id = $loginSession['id'];

    
//     $entity_id = 3;

   
//       $canadd = $this->check_permission($role_id, $user_id, $entity_id, 'add');
//                 echo '<script>';
//                 echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can View: " . ($canadd ? 'true' : 'false') . "');";
//                 echo '</script>';
   
//            if (!$canadd) {
   
//                        $this->load->view('denied');
  
//                        echo '<script>
//             if (confirm("Access Denied: You do not have permission to view this page. Would you like to go to the dashboard?")) {
//                 window.location.href = "' . base_url('dashboard') . '";
//             } else {
//                 // Handle the case where the user chooses to stay on the current page
//                 // Redirect to the dashboard after a delay
//                 setTimeout(function() {
//                     window.location.href = "' . base_url('dashboard') . '";
//                 }, 1000); 
//             }
//                   </script>';
   
//                        exit();
//                  }

    
//          if ($this->input->post()) {
       
//                  $data = array(
//             'first_name' => $this->input->post('first_name'),
//             'last_name' => $this->input->post('last_name'),
//             'email' => $this->input->post('email'),
//             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
//             'gendar' => $this->input->post('gendar'),
//             'country' => $this->input->post('country'),
//             'state' => $this->input->post('state'),
//             'mobile_no' => $this->input->post('mobile_no'),
//             'doj' => $this->input->post('doj'),
//             'qualification' => $this->input->post('qualification'),
//             'role_id' => $this->input->post('role_id'),
          
//         );

       
//                $inserted = $this->Employee_model->insert_employee($data);

//               if ($inserted) {
//                   echo 'Employee added successfully.';
//             } else {
//             echo 'Error adding employee.';
//                }
//              } else {
      
//         $data['roles'] = $this->Role_model->get_user_types();
//         $data['code_values'] = $this->Tbl_code_value_model->get_all_code_values();
//         $data['menus'] = $this->MenuModel->get_menus();
//         $data['menu_items'] = $this->MenuModel->get_menu_items();

      
//         $this->load->view('includes/sidebar', $data);
//         $this->load->view('addemployee', $data);
//     }
// }

  public function add_employee() {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 3;

   
      $canadd = $this->check_permission($role_id, $user_id, $entity_id, 'add');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can View: " . ($canadd ? 'true' : 'false') . "');";
                echo '</script>';
   
           if (!$canadd) {
   
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
        if ($this->input->post()) {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
               'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gendar' => $this->input->post('gendar'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'mobile_no' => $this->input->post('mobile_no'),
                'doj' => $this->input->post('doj'),
                'qualification' => $this->input->post('qualification'),
                'role_id'=>$this->input->post('role_id'),
            );
            
            
            if (!empty($_FILES['employee_pic']['name'])) {
                $config['upload_path'] = './assets/uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1024;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('employee_pic')) {
                    $file_data = $this->upload->data();
                    $data['employee_pic'] = $file_data['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    echo $error['error'];
                    return; 
                }
            }
            
            $this->db->trans_begin();
        
            $insert_id = $this->Employee_model->insert_employee($data);
            
            if ($insert_id) {
            // Insert data into tbl_users
            $employee_data = array(
                'employee_id' => $insert_id,
                'username' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'role_id'=>$this->input->post('role_id'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            );
            $this->load->model('User_model');
           $user_inserted =  $this->User_model->insert_user($employee_data);
           if ($user_inserted) {
                $this->db->trans_commit();
                
                redirect('Dashboard');
            } else {
                $this->db->trans_rollback();
                echo 'Error inserting data into the tbl_users';
            }
        } else {
            $this->db->trans_rollback();
            echo 'Error inserting data into the tbl_employee';
        }
       }       else {
         $data['roles'] = $this->Role_model->get_user_types();
            $data['code_values'] = $this->Tbl_code_value_model->get_all_code_values();
                // $data['menus'] = $this->MenuModel->get_menus();
                 $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
        $data['menu_items'] = $this->MenuModel->get_menu_items();
       
        $this->load->view('includes/sidebar', $data);
            $this->load->view('addemployee', $data);
        }
    }



    public function delete_employee($id) {
        $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];    
    $entity_id = 3;
     $candelete = $this->check_permission($role_id, $user_id, $entity_id, 'delete');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can delete: " . ($candelete ? 'true' : 'false') . "');";
                echo '</script>';
                     if (!$candelete) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to delete this data. Would you like to go to the dashboard?")) {
                window.location.href = "' . base_url('dashboard') . '";
            } else {
                setTimeout(function() {
                    window.location.href = "' . base_url('dashboard') . '";
                }, 1000); 
            }
          </script>';
   
    exit();
}
        $this->Employee_model->update_employee_status($id, 'inactive');
        // $data['menus'] = $this->MenuModel->get_menus();
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        redirect('Employee/Employe/view_employee',$data);
    }

    public function edit_employee($id) {
                   $loginSession = $this->session->userdata('LoginSession');
                   $role_id = $loginSession['role_id'];
                   $user_id = $loginSession['id'];    
                  $entity_id = 3;
         $canedit = $this->check_permission($role_id, $user_id, $entity_id, 'edit');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can edit: " . ($canedit ? 'true' : 'false') . "');";
                echo '</script>';
                     if (!$canedit) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to edit this data. Would you like to go to the dashboard?")) {
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
            // Your code for editing employee here
        } else {
            // Load edit employee view
            $data['employee'] = $this->Employee_model->get_employee_by_id($id);
            // $data['menus'] = $this->MenuModel->get_menus();
             $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
            $data['menu_items'] = $this->MenuModel->get_menu_items();
            $this->load->view('includes/sidebar', $data);
            $data['roles'] = $this->Role_model->get_user_types();
            $data['code_values'] = $this->Tbl_code_value_model->get_all_code_values();
            if ($data['employee']) {
                $this->load->view('editemployee', $data);
            } else {
                echo "Employee not found"; 
            }
        }
    }

// private function check_permission($role_id, $id, $entity_id, $action) {
   
//     $query = $this->db->get_where('tbl_role_permissions', array(
//         'role_id' => $role_id,
//         'entity_id' => $entity_id,
//         'user_id' => $id 
//     ));
//     $row = $query->row_array();

//     if ($row) {
        
   
//         switch ($action) {
//             case 'view':
//                 return $row['can_view'] == 1;
//             case 'edit':
//                 return $row['can_edit'] == 1;
//             case 'delete':
//                 return $row['can_delete'] == 1;
//             case 'approve':
//                 return $row['can_approve'] == 1;
//             default:
//                 return false; 
//         }
//     } else {
      
//         $query = $this->db->get_where('tbl_role_permissions', array(
//             'role_id' => $role_id,
//             'entity_id' => 0,
//             'user_id' => $id,
//         ));
//         $row = $query->row_array();

//         if ($row) {
         
           
//             switch ($action) {
//                 case 'view':
//                     return $row['can_view'] == 1;
//                 case 'edit':
//                     return $row['can_edit'] == 1;
//                 case 'delete':
//                     return $row['can_delete'] == 1;
//                 case 'approve':
//                     return $row['can_approve'] == 1;
//                 default:
//                     return false;
//             }
//         } else {
         
//             return false; 
//         }
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
?>