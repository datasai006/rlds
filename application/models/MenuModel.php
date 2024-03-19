<?php
class MenuModel extends CI_Model{
      public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Create
public function add_menu($data) {   
   
    $this->db->insert('tbl_menu', $data);

  
    return $this->db->insert_id();
}


  public function has_grandchildren($menu_id) {
     
        $this->db->where('parent_id', $menu_id);
        $query = $this->db->get('tbl_menu');
        return $query->num_rows() > 0;
    }    
    public function get_menus() {
        return $this->db->get('tbl_menu')->result_array();
    }
     public function get_menus_by_role_id($role_id) {
       
        $this->db->select('m.*');
        $this->db->from('tbl_menu as m');
        $this->db->join('tbl_role_menu_permissions as rmp', 'm.menu_id = rmp.menu_id');
        $this->db->where('rmp.role_id', $role_id);
        return $this->db->get()->result_array();
    }
    public function get_menuslevel($menu_levels) {
    $this->db->where_in('menu_level', $menu_levels);
    return $this->db->get('tbl_menu')->result_array();
}

      public function get_menu_items($parent_id = 0) {
        $this->db->where('parent_id', $parent_id);
        $query = $this->db->get('tbl_menu');
        return $query->result_array();
    }
  public function get_menus_with_level() {
        $this->db->select('*');
        $this->db->from('tbl_menu');
        $query = $this->db->get();
        $menus = $query->result_array();

        $menus_with_children = array();

        foreach ($menus as $menu) {
            if ($menu['parent_id'] == 0) {
                $menu['children'] = $this->get_children($menu['menu_id']);
                $menus_with_children[] = $menu;
            }
        }

        return $menus_with_children;
    }
// public function get_menus_with_permissions($role_id) {
//     $query = $this->db->select('m.*, p.can_view')
//                       ->from('tbl_menu m')
//                       ->join('tbl_role_permissions p', 'm.id = p.entity_id')
//                       ->where('p.role_id', $role_id)
//                       ->where('p.can_view', 1)
//                       ->get();
//     return $query->result_array();
// }

// public function get_menus_with_permissions($role_id) {
//     $query = $this->db->select('m.*, p.can_view, p.can_edit, p.can_delete, p.can_approve')
//                       ->from('tbl_menu m')
//                       ->join('tbl_role_permissions p', 'm.id = p.entity_id')
//                       ->where('p.role_id', $role_id)
//                       ->where('p.can_view', 1)
//                       ->get();
//     return $query->result_array();
// }
//   public function getMenusWithPermissions($user_id) {
//     $query = $this->db->select('m.*, p.can_view, p.can_edit, p.can_delete, p.can_approve')
//                       ->from('tbl_menu m')
//                       ->join('tbl_role_permissions p', 'm.id = p.entity_id AND p.user_id = ' . $user_id)
//                       ->get();

//     return $query->result_array();
// }





    public  function get_children($parent_id) {
        $this->db->where('parent_id', $parent_id);
        $query = $this->db->get('tbl_menu');
        return $query->result_array();
    }

    // Update
    public function update_menu($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_menu', $data);
    }

    // Delete
    public function delete_menu($id) {
        $data = array(
            'status' => 'inactive'
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_menu', $data);
    }
     public function get_menu($id) {
        // Fetch a single menu item by  ID
        $this->db->where('id', $id);
        return $this->db->get('tbl_menu')->row_array();
    }
  public function get_menus_with_permissions($role_id) {
        // Fetch menus with associated entities and permissions based on user's role
        // Adjust the SQL query as per your database schema and RBAC logic
        $query = $this->db->query("
            SELECT m.*, e.entity_id, rp.can_view, rp.can_edit, rp.can_delete
            FROM tbl_menu m
            LEFT JOIN tbl_entities e ON m.entity_id = e.id
            LEFT JOIN tbl_role_permissions rp ON rp.entity_id = e.id AND rp.role_id = $role_id
        ");
        return $query->result_array();
    }
  public function check_permission($role_id, $menu_id) {
        // Check if menu_id is provided
        if (empty($menu_id)) {
            return false; // Return false if menu_id is empty
        }

        // Add your permission checking logic here
        // Example: Fetch permissions from database based on user's role and menu ID
        $query = $this->db->query("SELECT * FROM tbl_role_permissions WHERE role_id = $role_id AND menu_id = $menu_id");
        $result = $query->row();
        
        // Check if permission exists
        if ($result) {
            // Return true if user has permission, otherwise false
            return true;
        } else {
            return false;
        }
    }
      public function get_entities() {
        return $this->db->get(' tbl_entities')->result_array();
    }
    // MenuModel.php
public function update_menu_id($menu_id, $new_menu_id) {
    $data = array(
        'menu_id' => $new_menu_id
    );
    $this->db->where('id', $menu_id);
    $this->db->update('tbl_menu', $data);
}


    public function get_menus_by_permissions($role_id) {
        $this->db->distinct();
        $this->db->select('m.*');
        $this->db->from('tbl_menu m');
        $this->db->join('tbl_role_permissions rp', 'm.id = rp.entity_id');
        $this->db->where('rp.role_id', $role_id);
        $this->db->group_start();
        $this->db->or_where('rp.can_view', 1);
        $this->db->or_where('rp.can_edit', 1);
        $this->db->or_where('rp.can_delete', 1);
        $this->db->or_where('rp.can_approve', 1);   
        $this->db->group_end();
        $this->db->where('m.status', 'active');
        $query = $this->db->get();
        return $query->result();
    }
    // public function get_parent(){
           
    //     $query = $this->db->where('menu_level', 1)
    //                   ->get('tbl_menu');
    // return $query->result_array();
    // }

 public function get_menu_by_id($menu_id) {
        // Fetch menu details based on the menu ID
        $query = $this->db->get_where('tbl_menu', array('id' => $menu_id));
        return $query->row_array(); // Assuming each menu is represented as an associative array
    }

    public function get_first_menu() {
        // Fetch the first menu from the database
        $query = $this->db->get('tbl_menu', 1); // Assuming your table name is 'menus'
        return $query->row_array(); // Assuming each menu is represented as an associative array
    }


}
?>