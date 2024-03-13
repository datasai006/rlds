<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends CI_Controller {
		  public function __construct() {
        parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->model('Office_model');
        $this->load->model('MenuModel');
       $this->load->library('upload');
    }

	public function index(){
          $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 10;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'view');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: view, Can view: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to view data. Would you like to go to the dashboard?")) {
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
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
		$this->load->view('verification/office');
	}
// 	 public function add_office () {   
//          $loginSession = $this->session->userdata('LoginSession');
//                  $role_id = $loginSession['role_id'];
//              $user_id = $loginSession['id'];

    
//              $entity_id = 10;
//                   $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');
//                 echo '<script>';
//                 echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can add: " . ($canView ? 'true' : 'false') . "');";
//                 echo '</script>';
//                  if (!$canView) {
   
//                      $this->load->view('denied');
  
//                          echo '<script>
//             if (confirm("Access Denied: You do not have permission to add data. Would you like to go to the dashboard?")) {
//                 window.location.href = "' . base_url('dashboard') . '";
//             } else {
//                 // Handle the case where the user chooses to stay on the current page
//                 // Redirect to the dashboard after a delay
//                 setTimeout(function() {
//                     window.location.href = "' . base_url('dashboard') . '";
//                 }, 1000); 
//             }
//                      </script>';
   
//                  exit();
//                 }         
//                     if ($this->input->post()) {
//        $config['upload_path'] = './assets/uploads/';
//        echo $config['upload_path'];
//        $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
//         $config['max_size'] = 1024;
//          $this->upload->initialize($config);
//          if ($this->upload->do_upload('signature')) { 
//             $signature_data = $this->upload->data();
//         } else {
//             $signature_error = $this->upload->display_errors();
//         }
//         if ($this->upload->do_upload('stamp')) {
//             $stamp_data = $this->upload->data();
//         } else {
//             $stamp_error = $this->upload->display_errors();
//         }
//          if (isset($signature_data) && isset($stamp_data)) {
//             $data = array(
// 	   'branch_name' => $this->input->post('branch_name'),
// 	   'los_no' => $this->input->post('los_no'),
//        'Reference_no' => $this->input->post('Reference_no'),
//         'Typeofloan' => $this->input->post('Typeofloan'),
//         'Mobile_no' => $this->input->post('Mobile_no'),
//         'Applicantname' => $this->input->post('Applicantname'),
//         'Office_Address' => $this->input->post('Office_Address'),
//         'Receipt_date' => $this->input->post('Receipt_date'),
//         'DateoftheReport' => $this->input->post('DateoftheReport'),
//         'ExactCompany' => $this->input->post('ExactCompany'),
// 		"Designation"=>$this->input->post('Designation'),
// 		"EmployeeId"=>$this->input->post('EmployeeId'),
// 		"Personcontacted"=>$this->input->post('Personcontacted'),
// 		"WorkingSince"=>$this->input->post('WorkingSince'),
// 		"NetSalary"=>$this->input->post('NetSalary'),
// 		"PersonMet"=>$this->input->post('PersonMet'),
// 		"Designationoftheperson"=>$this->input->post('Designationoftheperson'),
// 		"NatureofBusiness"=>$this->input->post('NatureofBusiness'),
// 		"LandMark"=>$this->input->post('LandMark'),
// 		"Numberofemployeesseen"=>$this->input->post('Numberofemployeesseen'),
// 		"PersonmetatOffice"=>$this->input->post('PersonmetatOffice'),
// 		"Indicate"=>$this->input->post('Indicate'),
// 		"LocatingOffice"=>$this->input->post('LocatingOffice'),
// 		"Boardsighted"=>$this->input->post('Boardsighted'),
// 		"BusinessActivity"=>$this->input->post('BusinessActivity'),
// 		"Equipmentsighted"=>$this->input->post('Equipmentsighted'),
// 		"Visitingcard"=>$this->input->post('Visitingcard'),
// 		"Office_is_in"=>$this->input->post('Office_is_in'),
// 		"FieldExecutiveComments"=>$this->input->post('FieldExecutiveComments'),
// 		"fieldexecutive"=>$this->input->post('fieldexecutive'),
// 		"signature" => $signature_data['file_name'],
//                 "stamp" => $stamp_data['file_name'],
// 		"system_case_id"=>$this->input->post('system_case_id'),
// 		"applicant_name"=>$this->input->post('applicant_name'),
// 		"ref_number"=>$this->input->post('ref_number')
//             );  
//             var_dump( $data);
//             $insert_id = $this->Office_model->insert_data($data);

//             if ($insert_id) {	
//            redirect('Dashboard'); 
//             } else {
           
//                 echo 'Error inserting data into the database';
//             }
//         } else {
           
//             $error = array('error' => $this->upload->display_errors());
		
//             echo $error['error'];
//         }
//                  } 
//           else {
// 		 $data['residence_states'] = $this->Employee_model->get_residence_states();
         
//         $data['menus'] = $this->MenuModel->get_menus();
//          $data['menu_items'] = $this->MenuModel->get_menu_items();
//         $this->load->view('includes/sidebar', $data);
//         $this->load->view('addemployee',$data);
//     }
// }
public function add_office() {
    $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    $entity_id = 10;
    $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');
    echo '<script>';
    echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can add: " . ($canView ? 'true' : 'false') . "');";
    echo '</script>';
    if (!$canView) {
        $this->load->view('denied');
        echo '<script>
            if (confirm("Access Denied: You do not have permission to add data. Would you like to go to the dashboard?")) {
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
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
        $config['max_size'] = 1024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $signature_data = null;
        $stamp_data = null;

        if ($this->upload->do_upload('signature')) {
            $signature_data = $this->upload->data();
        } else {
            $signature_error = $this->upload->display_errors();
        }

        if ($this->upload->do_upload('stamp')) {
            $stamp_data = $this->upload->data();
        } else {
            $stamp_error = $this->upload->display_errors();
        }

        $data = array(
            'branch_name' => $this->input->post('branch_name'),
            'los_no' => $this->input->post('los_no'),
            'Reference_no' => $this->input->post('Reference_no'),
            'Typeofloan' => $this->input->post('Typeofloan'),
            'Mobile_no' => $this->input->post('Mobile_no'),
            'Applicantname' => $this->input->post('Applicantname'),
            'Office_Address' => $this->input->post('Office_Address'),
            'Receipt_date' => $this->input->post('Receipt_date'),
            'DateoftheReport' => $this->input->post('DateoftheReport'),
            'ExactCompany' => $this->input->post('ExactCompany'),
            "Designation" => $this->input->post('Designation'),
            "EmployeeId" => $this->input->post('EmployeeId'),
            "Personcontacted" => $this->input->post('Personcontacted'),
            "WorkingSince" => $this->input->post('WorkingSince'),
            "NetSalary" => $this->input->post('NetSalary'),
            "PersonMet" => $this->input->post('PersonMet'),
            "Designationoftheperson" => $this->input->post('Designationoftheperson'),
            "NatureofBusiness" => $this->input->post('NatureofBusiness'),
            "LandMark" => $this->input->post('LandMark'),
            "Numberofemployeesseen" => $this->input->post('Numberofemployeesseen'),
            "PersonmetatOffice" => $this->input->post('PersonmetatOffice'),
            "Indicate" => $this->input->post('Indicate'),
            "LocatingOffice" => $this->input->post('LocatingOffice'),
            "Boardsighted" => $this->input->post('Boardsighted'),
            "BusinessActivity" => $this->input->post('BusinessActivity'),
            "Equipmentsighted" => $this->input->post('Equipmentsighted'),
            "Visitingcard" => $this->input->post('Visitingcard'),
            "Office_is_in" => $this->input->post('Office_is_in'),
            "FieldExecutiveComments" => $this->input->post('FieldExecutiveComments'),
            "fieldexecutive" => $this->input->post('fieldexecutive'),
            "system_case_id" => $this->input->post('system_case_id'),
            "applicant_name" => $this->input->post('applicant_name'),
            "ref_number" => $this->input->post('ref_number')
        );

        // If signature and stamp are uploaded, add them to the data array
        if ($signature_data && $stamp_data) {
            $data['signature'] = $signature_data['file_name'];
            $data['stamp'] = $stamp_data['file_name'];
        }

        var_dump($data);
        $insert_id = $this->Office_model->insert_data($data);

        if ($insert_id) {
            redirect('Dashboard');
        } else {
            echo 'Error inserting data into the database';
        }
    } else {
        $data['residence_states'] = $this->Employee_model->get_residence_states();
        $data['menus'] = $this->MenuModel->get_menus();
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('addemployee', $data);
    }
}

public function view_office_data() {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 10;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'view');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: view, Can view: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to view data. Would you like to go to the dashboard?")) {
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
    $data['office_data'] = $this->Office_model->get_all_office_data();
    if (empty($data['office_data'])) {
        $data['no_data_message'] = 'No office data available.';
    }

        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
    $this->load->view('verification/view_office', $data);
}

public function edit_office($id) {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 10;
      $canView = $this->check_permission($role_id, $user_id, $entity_id, 'edit');
                echo '<script>';
                echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: edit, Can edit: " . ($canView ? 'true' : 'false') . "');";
                echo '</script>';
     if (!$canView) {
   
                     $this->load->view('denied');
  
                         echo '<script>
            if (confirm("Access Denied: You do not have permission to edit data. Would you like to go to the dashboard?")) {
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
        $data['office_data'] = $this->Office_model->get_office_by_id($id);
         $data['current_signature'] = $data['office_data']->signature;
         $data['current_stamp'] = $data['office_data']->stamp;
        if ($data['office_data']) {
            $this->load->view('verification/edit_office', $data);
        } else {
          
            echo 'Office record not found';
        }
    }

    public function update_office($id) {
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 10;
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
    if ($this->input->post()) {
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
        $config['max_size'] = 1024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $existing_data = $this->Office_model->get_office_by_id($id);
        $old_signature = $existing_data->signature;
        $old_stamp = $existing_data->stamp;

        $signature_data = array('file_name' => $old_signature);
        if ($this->upload->do_upload('signature')) {
            if (!empty($old_signature) && file_exists($config['upload_path'] . $old_signature)) {
                unlink($config['upload_path'] . $old_signature);
            }
            $signature_data = $this->upload->data();
        }

        $stamp_data = array('file_name' => $old_stamp);
        if ($this->upload->do_upload('stamp')) {
            if (!empty($old_stamp) && file_exists($config['upload_path'] . $old_stamp)) {
                unlink($config['upload_path'] . $old_stamp);
            }
            $stamp_data = $this->upload->data();
        }

        $data = array(
            'branch_name' => $this->input->post('branch_name'),
	   'los_no' => $this->input->post('los_no'),
       'Reference_no' => $this->input->post('Reference_no'),
        'Typeofloan' => $this->input->post('Typeofloan'),
        'Mobile_no' => $this->input->post('Mobile_no'),
        'Applicantname' => $this->input->post('Applicantname'),
        'Office_Address' => $this->input->post('Office_Address'),
        'Receipt_date' => $this->input->post('Receipt_date'),
        'DateoftheReport' => $this->input->post('DateoftheReport'),
        'ExactCompany' => $this->input->post('ExactCompany'),
		"Designation"=>$this->input->post('Designation'),
		"EmployeeId"=>$this->input->post('EmployeeId'),
		"Personcontacted"=>$this->input->post('Personcontacted'),
		"WorkingSince"=>$this->input->post('WorkingSince'),
		"NetSalary"=>$this->input->post('NetSalary'),
		"PersonMet"=>$this->input->post('PersonMet'),
		"Designationoftheperson"=>$this->input->post('Designationoftheperson'),
		"NatureofBusiness"=>$this->input->post('NatureofBusiness'),
		"LandMark"=>$this->input->post('LandMark'),
		"Numberofemployeesseen"=>$this->input->post('Numberofemployeesseen'),
		"PersonmetatOffice"=>$this->input->post('PersonmetatOffice'),
		"Indicate"=>$this->input->post('Indicate'),
		"LocatingOffice"=>$this->input->post('LocatingOffice'),
		"Boardsighted"=>$this->input->post('Boardsighted'),
		"BusinessActivity"=>$this->input->post('BusinessActivity'),
		"Equipmentsighted"=>$this->input->post('Equipmentsighted'),
		"Visitingcard"=>$this->input->post('Visitingcard'),
		"Office_is_in"=>$this->input->post('Office-is-in'),
		"FieldExecutiveComments"=>$this->input->post('FieldExecutiveComments'),
		"fieldexecutive"=>$this->input->post('fieldexecutive'),
            'signature' => isset($signature_data) ? $signature_data['file_name'] : $old_signature,
            'stamp' => isset($stamp_data) ? $stamp_data['file_name'] : $old_stamp,
            "system_case_id"=>$this->input->post('system-case-id'),
		"applicant_name"=>$this->input->post('applicant-name'),
		"ref_number"=>$this->input->post('ref-number')
        );

        $update_result = $this->Office_model->update_office_data($id, $data);

        if ($update_result) {
            redirect('Dashboard');
        } else {
            echo 'Error updating data in the database';
        }
    } else {
        $data['office_data'] = $this->Office_model->get_office_by_id($id);
        $data['current_signature'] = $data['office_data']->signature;
        $data['current_stamp'] = $data['office_data']->stamp;

        if ($data['office_data']) {
            $this->load->view('verification/edit_office', $data);
        } else {
            echo 'Office record not found';
        }
    }
}
public function delete_office($id){
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 10;
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
    $update_result = $this->Office_model->delete_office($id);

    if ($update_result) {
        redirect('verification/Office/view_office_data');
    } else {
        echo 'Error soft deleting data in the database';
    }
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