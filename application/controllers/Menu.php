<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct() {
        parent::__construct();
         $this->load->database();
        $this->load->model('MenuModel');
       
    }

    // Display all menus
   public function index() {
        $userData = $this->session->userdata('LoginSession');
        if ($userData && isset($userData['role_id'])) {
            $role_id = $userData['role_id'];
            $data['menus'] = $this->MenuModel->get_menus_by_permissions($role_id);
            $this->load->view('includes/sidebar', $data);
            $this->load->view('menu/view_menu', $data);
        } else {
            redirect('login/index');
        }
    }

    // Add new menu

// public function add() {
//     $data['menuslevel'] = $this->MenuModel->get_menus_with_level();
    
//     if ($this->input->post()) {
//         $this->load->database();
//         $this->db->trans_begin();
        
//         // Insert menu data and retrieve the inserted ID
//         $menu_id = $this->MenuModel->add_menu($this->input->post()); 
        
//         if ($menu_id) {
//             // Data successfully inserted, commit the transaction
//             $this->db->trans_commit();
            
//             // Update the menu_id with the inserted ID
//             $this->MenuModel->update_menu_id($menu_id, $menu_id);
            
//             redirect('Menu/add');
//         } else {
//             // Error occurred during insertion, rollback the transaction
//             $this->db->trans_rollback();
//             echo "Error occurred while adding menu. Please try again.";
//         }
//     }
    
//     // Fetch menu items and other data
//      $data['entities'] = $this->MenuModel->get_entities();
//     $data['menus'] = $this->MenuModel->get_menus();
//     $data['menu_items'] = $this->MenuModel->get_menu_items();
    
//     // Load views
//     $this->load->view('includes/sidebar', $data);
//     $this->load->view('menu/add_menu', $data);
// }
// public function add() {
//     $userData = $this->session->userdata('LoginSession');
//     if (!$userData || !isset($userData['role_id'])) {
//         // Redirect to login if user is not authenticated or missing role_id in session
//         redirect('login/index');
//     }

//     $role_id = $userData['role_id'];

//     if ($this->input->post()) {
//         // Load necessary libraries and begin transaction
//         $this->load->database();
//         $this->db->trans_begin();
        
//         // Insert menu data and retrieve the inserted ID
//         $menu_id = $this->MenuModel->add_menu($this->input->post()); 
        
//         if ($menu_id) {
//             // Data successfully inserted, commit the transaction
//             $this->db->trans_commit();
            
//             // Update the menu_id with the inserted ID
//             $this->MenuModel->update_menu_id($menu_id, $menu_id);
            
//             redirect('Menu/add');
//         } else {
//             // Error occurred during insertion, rollback the transaction
//             $this->db->trans_rollback();
//             echo "Error occurred while adding menu. Please try again.";
//         }
//     }
    
//     // Fetch menu items and other data
//     $data['entities'] = $this->MenuModel->get_entities();
//     $data['menus'] = $this->MenuModel->get_menus();
//     $data['menu_items'] = $this->MenuModel->get_menu_items();
    
//     // Load views
//     $this->load->view('includes/sidebar', $data);
//     $this->load->view('menu/add_menu', $data);
// }

public function add() {
    $userData = $this->session->userdata('LoginSession');
    if (!$userData || !isset($userData['role_id'])) {
        // Redirect to login if user is not authenticated or missing role_id in session
        redirect('login/index');
    }

    $role_id = $userData['role_id'];

    // Fetch menu item's entity_id
    $entity_id = $this->input->post('entity_id');

    if ($this->input->post()) {
        // Load necessary libraries and begin transaction
        $this->load->database();
        $this->db->trans_begin();
        
        // Insert menu data and retrieve the inserted ID
        $menu_id = $this->MenuModel->add_menu($this->input->post()); 
        
        if ($menu_id) {
            // Data successfully inserted, commit the transaction
            $this->db->trans_commit();
            
            // Update the menu_id with the inserted ID
            $this->MenuModel->update_menu_id($menu_id, $menu_id);
            
            redirect('Menu/add');
        } else {
            // Error occurred during insertion, rollback the transaction
            $this->db->trans_rollback();
            echo "Error occurred while adding menu. Please try again.";
        }
    }
    
    // Fetch menu items and other data
    $data['entities'] = $this->MenuModel->get_entities();
    $data['menus'] = $this->MenuModel->get_menus();
    $data['menu_items'] = $this->MenuModel->get_menu_items();
    
    // Pass entity_id to the view
    $data['entity_id'] = $entity_id;
    
    // Load views
    $this->load->view('includes/sidebar', $data);
    $this->load->view('menu/add_menu', $data);
}





    // Update menu
    public function update($id) {
        if ($this->input->post()) {
            $this->MenuModel->update_menu($id, $this->input->post());
            redirect('Dashboard');
        }
        
        $data['menus'] = $this->MenuModel->get_menus();
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $data['menu'] = $this->MenuModel->get_menu($id);
        $this->load->view('menu/edit_menu', $data);
    }

    // Delete menu
    public function delete_menu($id) {
        $this->MenuModel->delete_menu($id);
        
        // Load only the sidebar view after deleting a menu item
        $data['menus'] = $this->MenuModel->get_menus();
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
    }

    // Get entity IDs for menu IDs
    public function get_entity_id() {
        $menuIds = $this->input->post('menu_ids');
        $entityIds = [];
        
        foreach ($menuIds as $menuId) {
            // Fetch entity_id for each menu_id
            $entityId = $this->MenuModel->get_entity_id($menuId);
            if ($entityId) {
                $entityIds[$menuId] = $entityId;
            }
        }

        // Send back entity_ids as JSON response
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['entity_ids' => $entityIds]));
    }
}
?>