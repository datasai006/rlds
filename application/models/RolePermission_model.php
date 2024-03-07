<!-- <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class RolePermission_model extends CI_Model {

//     public function __construct() {
//         parent::__construct();
//         $this->load->database();
//     }

//     public function insert_permission($data)
//     {
     
//         $this->db->insert('tbl_role_permissions', $data);
//     }
//    public function get_tables(){
//     $tables_query = $this->db->get('tbl_entities');
//     $tables = array();

//     if ($tables_query->num_rows() > 0) {
//         foreach ($tables_query->result() as $row) {
        
//             $tables[] = array(
//                 'id' => $row->id,
//                 'name' => $row->name
//             );
//         }
//     }

//     return $tables;
// }

// public function get_permission($user_id, $role_id, $entity_id) {
//     $this->db->where('user_id', $user_id);
//     $this->db->where('role_id', $role_id);
//     $this->db->where('entity_id', $entity_id);
//     $query = $this->db->get('tbl_role_permissions');
//     return $query->row_array(); 
// }



//   public function update_permission($permission_id, $user_id, $role_id, $data) {
//         $this->db->where('id', $permission_id);
//         $this->db->where('user_id', $user_id);
//         $this->db->where('role_id', $role_id);
//         $this->db->update('tbl_role_permissions', $data);
//     }
//      public function insert_or_update_permission($user_id, $role_id, $data) {
       
//         $existing_permission = $this->get_permission($user_id, $role_id, $data['entity_id']);
//         if ($existing_permission) {
         
//             return $this->update_permission($existing_permission['id'], $data);
//         } else {
           
//             return $this->insert_permission($data);
//         }
//     }
//        public function has_permission($role_id, $entity_id, $permission) {
//         return $this->db->select($permission)
//             ->from('tbl_roles_permissions')
//             ->where('role_id', $role_id)
//             ->where('entity_id', $entity_id)
//             ->get()
//             ->row();
//     }

// }


//  public function check_permission($role_id, $entity_id, $permission) {
       
//         $this->db->select($permission);
//         $this->db->where('role_id', $role_id);
//         $this->db->where('entity_id', $entity_id);
//         $query = $this->db->get('tbl_role_permissions');

//         if ($query->num_rows() > 0) {
//             $result = $query->row();
//             return $result->$permission == 1;
//         }

//         return false;
//     }


?> -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RolePermission_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_permission($data)
    {
        // Insert the data into the 'tbl_role_permissions' table
        $this->db->insert('tbl_role_permissions', $data);
    }

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

    public function get_permission($user_id, $role_id, $entity_id) {
        $this->db->where('user_id', $user_id);
        $this->db->where('role_id', $role_id);
        $this->db->where('entity_id', $entity_id);
        $query = $this->db->get('tbl_role_permissions');
        return $query->row_array(); 
    }

    public function update_permission($permission_id, $user_id, $role_id, $data) {
        $this->db->where('id', $permission_id);
        $this->db->where('user_id', $user_id);
        $this->db->where('role_id', $role_id);
        $this->db->update('tbl_role_permissions', $data);
    }

    public function insert_or_update_permission($user_id, $role_id, $data) {
        // Check if a permission record already exists for this user, role, and entity
        $existing_permission = $this->get_permission($user_id, $role_id, $data['entity_id']);
        if ($existing_permission) {
            return $this->update_permission($existing_permission['id'], $user_id, $role_id, $data);
        } else {
            return $this->insert_permission($data);
        }
    }

    public function has_permission($role_id, $entity_id, $permission) {
        return $this->db->select($permission)
            ->from('tbl_roles_permissions')
            ->where('role_id', $role_id)
            ->where('entity_id', $entity_id)
            ->get()
            ->row();
    }

    public function check_permission($role_id, $entity_id, $permission) {
        // Check if the role has the specified permission for the entity
        $this->db->select($permission);
        $this->db->where('role_id', $role_id);
        $this->db->where('entity_id', $entity_id);
        $query = $this->db->get('tbl_role_permissions');

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->$permission == 1;
        }

        return false;
    }

}