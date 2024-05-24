<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct() {
        parent::__construct();
         $this->load->database();
        $this->load->model('MenuModel');
       
    }

    // Display all menus
//    public function index() {
//         $userData = $this->session->userdata('LoginSession');
//         if ($userData && isset($userData['role_id'])) {
//             $role_id = $userData['role_id'];
//             $data['menus'] = $this->MenuModel->get_menus_by_permissions($role_id);
//             $this->load->view('includes/sidebar', $data);
//             $this->load->view('menu/view_menu', $data);
//         } else {
//             redirect('login/index');
//         }
//     }
public function index() {
    $userData = $this->session->userdata('LoginSession');
    if ($userData && isset($userData['role_id']) && isset($userData['user_id'])) {
        $role_id = $userData['role_id'];
       

        
        $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);

       
        $data['role_id'] = $role_id;
       
       
        $this->load->view('includes/sidebar', $data);
        $this->load->view('menu/view_menu', $data);
    } else {
        redirect('login/index');
    }
}


public function add() {
     $data['menuslevel'] = $this->MenuModel->get_menus_with_level();
    $userData = $this->session->userdata('LoginSession');
    if (!$userData || !isset($userData['role_id'])) {
       
        redirect('login/index');
    }

    $role_id = $userData['role_id'];

   
    $entity_id = $this->input->post('entity_id');

    if ($this->input->post()) {
  
        $this->load->database();
        $this->db->trans_begin();
        
        
        $menu_id = $this->MenuModel->add_menu($this->input->post()); 
        
        if ($menu_id) {
          
            $this->db->trans_commit();
            
           
            $this->MenuModel->update_menu_id($menu_id, $menu_id);
            
            redirect('Menu/add');
        } else {
           
            $this->db->trans_rollback();
            echo "Error occurred while adding menu. Please try again.";
        }
    }
    
   
    $data['entities'] = $this->MenuModel->get_entities();
     $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
    $data['menu_items'] = $this->MenuModel->get_menu_items();
    
 
    $data['entity_id'] = $entity_id;
   

    $this->load->view('includes/sidebar', $data);
    $this->load->view('menu/add_menu', $data);
}





   
    public function update($id) {
        if ($this->input->post()) {
            $this->MenuModel->update_menu($id, $this->input->post());
            redirect('Dashboard');
        }
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $data['menu'] = $this->MenuModel->get_menu($id);
        $this->load->view('menu/edit_menu', $data);
    }

  
    public function delete_menu($id) {
        $this->MenuModel->delete_menu($id);
        
       
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
    }

 
    public function get_entity_id() {
        $menuIds = $this->input->post('menu_ids');
        $entityIds = [];
        
        foreach ($menuIds as $menuId) {
            
            $entityId = $this->MenuModel->get_entity_id($menuId);
            if ($entityId) {
                $entityIds[$menuId] = $entityId;
            }
        }

       
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['entity_ids' => $entityIds]));
    }
}
?>