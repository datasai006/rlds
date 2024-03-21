<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Income extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Income_model');
        $this->load->model('MenuModel');
        $this->load->library('upload');
    }
    public function index()
    {
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 9;
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
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('verification/income');
    }
    // public function add_income() {
    //      $loginSession = $this->session->userdata('LoginSession');
    //      $role_id = $loginSession['role_id'];
    //           $user_id = $loginSession['id'];

    
    //         $entity_id = 9;
    //               $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');
    //             echo '<script>';
    //             echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can add: " . ($canView ? 'true' : 'false') . "');";
    //             echo '</script>';
    //          if (!$canView) {
   
    //                  $this->load->view('denied');
  
    //                      echo '<script>
    //         if (confirm("Access Denied: You do not have permission to add data. Would you like to go to the dashboard?")) {
    //             window.location.href = "' . base_url('dashboard') . '";
    //         } else {
    //             // Handle the case where the user chooses to stay on the current page
    //             // Redirect to the dashboard after a delay
    //             setTimeout(function() {
    //                 window.location.href = "' . base_url('dashboard') . '";
    //             }, 1000); 
    //         }
    //       </script>';
   
    //           exit();
    //             }
    //     if ($this->input->post()) {
    //         $config['upload_path'] = './assets/uploads/';
    //         echo $config['upload_path'];
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
    //         $config['max_size'] = 1024;

    //         $this->load->library('upload', $config);
    //         $this->upload->initialize($config);
    //         if ($this->upload->do_upload('signature')) {
    //             $signature_data = $this->upload->data();
    //         } else {
    //             $signature_error = $this->upload->display_errors();
    //         }
    //         if ($this->upload->do_upload('stamp')) {
    //             $stamp_data = $this->upload->data();
    //         } else {
    //             $stamp_error = $this->upload->display_errors();
    //         }
    //         if (isset($signature_data) && isset($stamp_data)) {
    //             $data = array(
    //                 'application_name' => $this->input->post('application-name'),
    //                 'los_no' => $this->input->post('los-no'),
    //                 'branch_name' => $this->input->post('branch-name'),
    //                 'income_type' => $this->input->post('income-type'),
    //                 'yearly_income' => $this->input->post('yearly-income'),
    //                 'assessment_year' => $this->input->post('Assessment_Year'),
    //                 'verifying_income_proof' => $this->input->post('verifing-income-proof'),
    //                 'pan_no' => $this->input->post('pan-no'),
    //                 'proof_submitted' => $this->input->post('proof-submitted'),
    //                 'acknowledgement_number' => $this->input->post('acknowledement-number'),
    //                 "Submission_date" => $this->input->post('Submission-date'),
    //                 "gross_income" => $this->input->post('gross-income'),
    //                 "auditor_name" => $this->input->post('auditor-name'),
    //                 "office_address" => $this->input->post('office_address'),
    //                 "status_type" => $this->input->post('status-type'),
    //                 "itr" => $this->input->post('itr'),
    //                 "executive_name" => $this->input->post('executive-name'),
    //                 "signature" => $signature_data['file_name'],
    //                 "stamp" => $stamp_data['file_name'],
    //                 "system_case_id" => $this->input->post('system-case-id'),
    //                 "applicant_name" => $this->input->post('applicant-name'),
    //                 "ref_number" => $this->input->post('ref-number')
    //             );
    //             $this->db->set($data);
    //             $insert_id = $this->Income_model->insert_data($data);
                    
    //             if ($insert_id) {
    //                 redirect('Dashboard');
    //             } else {

    //                 echo 'Error inserting data into the database';
    //             }
    //         } else {
    //             $error = array('error' => $this->upload->display_errors());
    //             echo $error['error'];
    //         }
    //     } else {
    //         // $data['residence_states'] = $this->Employee_model->get_residence_states();
            
    //      $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
    //      $data['menu_items'] = $this->MenuModel->get_menu_items();
    //     $this->load->view('includes/sidebar', $data);
    //         $this->load->view('addemployee', $data);
    //     }
    // }
//     public function add_income() {
//                   $loginSession = $this->session->userdata('LoginSession');
//                  $role_id = $loginSession['role_id'];
//                  $user_id = $loginSession['id'];

//                   $entity_id = 9;
//                   $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');
//                  echo '<script>';
//                   echo "console.log('Role ID: $role_id, user_id: $user_id, Entity ID: $entity_id, Action: add, Can add: " . ($canView ? 'true' : 'false') . "');";
//              echo '</script>';
//                  if (!$canView) {
//                   $this->load->view('denied');
//                   echo '<script>
//                   if (confirm("Access Denied: You do not have permission to add data. Would you like to go to the dashboard?")) {
//                   window.location.href = "' . base_url('dashboard') . '";
//                   } else {
//             // Handle the case where the user chooses to stay on the current page
//             // Redirect to the dashboard after a delay
//             setTimeout(function() {
//                 window.location.href = "' . base_url('dashboard') . '";
//             }, 1000); 
//                   }
//                   </script>';

//                   exit();
//                       }

//                     if ($this->input->post()) {
//                   $config['upload_path'] = './assets/uploads/';
//                   $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
//                       $config['max_size'] = 1024;

//                   $this->load->library('upload', $config);
//                   $this->upload->initialize($config);

//         // Check if signature and stamp are uploaded
//                    $signature_data = null;
//                    $stamp_data = null;
//                  if ($this->upload->do_upload('signature')) {
//             $signature_data = $this->upload->data();
//                   }

//               if ($this->upload->do_upload('stamp')) {
//             $stamp_data = $this->upload->data();
//               }

//               // Construct data array
//               $data = array(
//             'application_name' => $this->input->post('application_name'),
//             'los_no' => $this->input->post('los_no'),
//             'branch_name' => $this->input->post('branch_name'),
//             'income_type' => $this->input->post('income_type'),
//             'yearly_income' => $this->input->post('yearly_income'),
//             'assessment_year' => $this->input->post('Assessment_Year'),
//             'verifying_income_proof' => $this->input->post('verifing_income_proof'),
//             'pan_no' => $this->input->post('pan_no'),
//             'proof_submitted' => $this->input->post('proof_submitted'),
//             'acknowledgement_number' => $this->input->post('acknowledement_number'),
//             "Submission_date" => $this->input->post('Submission_date'),
//             "gross_income" => $this->input->post('gross_income'),
//             "auditor_name" => $this->input->post('auditor_name'),
//             "office_address" => $this->input->post('office_address'),
//             "status_type" => $this->input->post('status_type'),
//             "itr" => $this->input->post('itr'),
//             "executive_name" => $this->input->post('executive_name'),
//             "system_case_id" => $this->input->post('system_case_id'),
//             "applicant_name" => $this->input->post('applicant_name'),
//             "ref_number" => $this->input->post('ref_number')
//         );

//         // Add signature and stamp data to the data array if uploaded
//         if ($signature_data) {
//             $data['signature'] = $signature_data['file_name'];
//         }

//         if ($stamp_data) {
//             $data['stamp'] = $stamp_data['file_name'];
//         }

//         $insert_id = $this->Income_model->insert_data($data);

//         if ($insert_id) {
//             redirect('Dashboard');
//         } else {
//             echo"error in to insert data";
          
//         }
//           } else {
//         // $data['residence_states'] = $this->Employee_model->get_residence_states();
//          $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
//         $data['menu_items'] = $this->MenuModel->get_menu_items();
//         $this->load->view('includes/sidebar', $data);
//         $this->load->view('addemployee', $data);
//     }
// }
public function add_income() {
    $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    $entity_id = 9;
    $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');
    if (!$canView) {
        $this->load->view('denied');
        echo '<script>
            if (confirm("Access Denied: You do not have permission to add data. Would you like to go to the dashboard?")) {
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
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Check if signature and stamp are uploaded
        $signature_data = $this->upload->do_upload('signature') ? $this->upload->data() : null;
        $stamp_data = $this->upload->do_upload('stamp') ? $this->upload->data() : null;

        // Construct data array
        $data = array(
            'application_name' => $this->input->post('application_name'),
            'los_no' => $this->input->post('los_no'),
            'branch_name' => $this->input->post('branch_name'),
            'income_type' => $this->input->post('income_type'),
            'yearly_income' => $this->input->post('yearly_income'),
            'assessment_year' => $this->input->post('Assessment_Year'),
            'verifying_income_proof' => $this->input->post('verifing_income_proof'),
            'pan_no' => $this->input->post('pan-no'),
            'proof_submitted' => $this->input->post('proof_submitted'),
            'acknowledgement_number' => $this->input->post('acknowledement_number'),
            "Submission_date" => $this->input->post('Submission_date'),
            "gross_income" => $this->input->post('gross_income'),
            "auditor_name" => $this->input->post('auditor_name'),
            "office_address" => $this->input->post('office_address'),
            "status_type" => $this->input->post('status_type'),
            "itr" => $this->input->post('itr'),
            "executive_name" => $this->input->post('executive_name'),
            "system_case_id" => $this->input->post('system_case_id'),
            "applicant_name" => $this->input->post('applicant_name'),
            "ref_number" => $this->input->post('ref_number')
        );

        // Add signature and stamp data to the data array if uploaded
        if ($signature_data) {
            $data['signature'] = $signature_data['file_name'];
        }

        if ($stamp_data) {
            $data['stamp'] = $stamp_data['file_name'];
        }

   $insert_id = $this->Income_model->insert_data($data);

if ($insert_id) {
    // Return the insert ID as JSON response
    echo json_encode(array('insert_id' => $insert_id));
} else {
    // Handle the error
    echo json_encode(array('error' => 'Error in inserting data'));
}

    } else {
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
        $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('addemployee', $data);
    }
}
// public function add_income() {
//     // Check user permissions
//     $loginSession = $this->session->userdata('LoginSession');
//     $role_id = $loginSession['role_id'];
//     $user_id = $loginSession['id'];
//     $entity_id = 9;
//     $canView = $this->check_permission($role_id, $user_id, $entity_id, 'add');

//     if (!$canView) {
//         $this->load->view('denied');
//         echo '<script>
//             if (confirm("Access Denied: You do not have permission to add data. Would you like to go to the dashboard?")) {
//                 window.location.href = "' . base_url('dashboard') . '";
//             } else {
//                 setTimeout(function() {
//                     window.location.href = "' . base_url('dashboard') . '";
//                 }, 1000); 
//             }
//         </script>';
//         exit();
//            }

//            if ($this->input->post()) {
//         // Configure upload settings
//         $config['upload_path'] = './assets/uploads/';
//         $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
//         $config['max_size'] = 1024;

//         $this->load->library('upload', $config);
//         $this->upload->initialize($config);

//         // Check if signature and stamp are uploaded
//         $signature_data = $this->upload->do_upload('signature') ? $this->upload->data() : null;
//         $stamp_data = $this->upload->do_upload('stamp') ? $this->upload->data() : null;

//         // Construct data array
//         $data = array(
//              'application_name' => $this->input->post('application_name'),
//              'los_no' => $this->input->post('los_no'),
//              'branch_name' => $this->input->post('branch_name'),
//              'income_type' => $this->input->post('income_type'),
//              'yearly_income' => $this->input->post('yearly_income'),
//              'assessment_year' => $this->input->post('Assessment_Year'),
//             'verifying_income_proof' => $this->input->post('verifing_income_proof'),
//              'pan_no' => $this->input->post('pan-no'),
//              'proof_submitted' => $this->input->post('proof_submitted'),
//              'acknowledgement_number' => $this->input->post('acknowledement_number'),
//              "Submission_date" => $this->input->post('Submission_date'),
//              "gross_income" => $this->input->post('gross_income'),
//              "auditor_name" => $this->input->post('auditor_name'),
//              "office_address" => $this->input->post('office_address'),
//              "status_type" => $this->input->post('status_type'),
//              "itr" => $this->input->post('itr'),
//              "executive_name" => $this->input->post('executive_name'),
//              "system_case_id" => $this->input->post('system_case_id'),
//              "applicant_name" => $this->input->post('applicant_name'),
//              "ref_number" => $this->input->post('ref_number')
//               );

//         // Add signature and stamp data to the data array if uploaded
//               if ($signature_data) {
//             $data['signature'] = $signature_data['file_name'];
//         }

//         if ($stamp_data) {
//             $data['stamp'] = $stamp_data['file_name'];
//         }

//         // Insert data into database
//         $insert_id = $this->Income_model->insert_data($data);

//                   if ($insert_id) {
//              // Echo the insert ID back as the response
//          echo $insert_id;
              
//             } else {
//              // Database error occurred
//                     $error = $this->db->error();
//                 log_message('error', 'Database Error: ' . $error['message']);
//                 echo "Error in inserting data: " . $error['message'];
//              exit;
//       }

//              } else {
//         // Load view for adding income
//          $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
//         $data['menu_items'] = $this->MenuModel->get_menu_items();
//         $this->load->view('includes/sidebar', $data);
//         $this->load->view('addemployee', $data);
//               }
// }


      public function view_income_data() {
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 9;
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
        $data['income_data'] = $this->Income_model->get_all_income_data();
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('verification/view_income_data', $data); 
    }
     public function edit_income($IncomeTaxID) {
         $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 9;
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
        $data['income_data'] = $this->Income_model->get_income_data_by_id($IncomeTaxID);
         $data['proof_options'] = array('YES', 'NO');
          $data['status_types'] = array(
            'companies and firms' => 'Companies and Firms',
            'Form-16' => 'Form-16'
        );
        $data['itr_types'] = array(
            'ITR-2' => 'ITR-2',
            'ITR-2A' => 'ITR-2A',
            'ITR-3' => 'ITR-3',
            'ITR-4' => 'ITR-4',
            'ITR-4S' => 'ITR-4S',
            'ITR-5' => 'ITR-5',
            'ITR-6' => 'ITR-6',
            'ITR-7' => 'ITR-7'
        );
    //      $data['current_signature'] = $data['income_data']->signature;
    // $data['current_stamp'] = $data['income_data']->stamp;

         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('verification/edit_income', $data); 
    }
public function update_income($IncomeTaxID) {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 9;
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
        $existing_data = $this->Income_model->get_income_data_by_id($IncomeTaxID);
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
                    'application_name' => $this->input->post('application-name'),
                    'los_no' => $this->input->post('los-no'),
                    'branch_name' => $this->input->post('branch-name'),
                    'income_type' => $this->input->post('income-type'),
                    'yearly_income' => $this->input->post('yearly-income'),
                    'assessment_year' => $this->input->post('Assessment_Year'),
                    'verifying_income_proof' => $this->input->post('verifing-income-proof'),
                    'pan_no' => $this->input->post('pan-no'),
                    'proof_submitted' => $this->input->post('proof-submitted'),
                    'acknowledgement_number' => $this->input->post('acknowledement-number'),
                    "Submission_date" => $this->input->post('Submission-date'),
                    "gross_income" => $this->input->post('gross-income'),
                    "auditor_name" => $this->input->post('auditor-name'),
                    "office_address" => $this->input->post('office_address'),
                    "status_type" => $this->input->post('status-type'),
                    "itr" => $this->input->post('itr'),
                    "executive_name" => $this->input->post('executive-name'),
                    "signature" => $signature_data['file_name'],
                    "stamp" => $stamp_data['file_name'],
                    "system_case_id" => $this->input->post('system-case-id'),
                    "applicant_name" => $this->input->post('applicant-name'),
                    "ref_number" => $this->input->post('ref-number')
                );

        $update_result = $this->Income_model->update_income_data($IncomeTaxID, $data);

        if ($update_result) {
            redirect('Dashboard');
        } else {
            echo 'Error updating data in the database';
        }
    }
}

public function delete_income($IncomeTaxID){
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 9;
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
    $update_result = $this->Income_model->delete_income($IncomeTaxID);

    if ($update_result) {
        redirect('verification/Income/view_income_data');
    } else {
        echo 'Error soft deleting data in the database';
    }
}

public function save_data_controller() {
     $loginSession = $this->session->userdata('LoginSession');
    $role_id = $loginSession['role_id'];
    $user_id = $loginSession['id'];

    
    $entity_id = 9;
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
            echo $config['upload_path'];
            $config['allowed_types'] = 'gif|jpg|png|jpeg|avi|mpg|mpeg|wmv|mp4';
            $config['max_size'] = 1024;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
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
            if (isset($signature_data) && isset($stamp_data)) {
                $data = array(
                    'application_name' => $this->input->post('application-name'),
                    'los_no' => $this->input->post('los-no'),
                    'branch_name' => $this->input->post('branch-name'),
                    'income_type' => $this->input->post('income-type'),
                    'yearly_income' => $this->input->post('yearly-income'),
                    'assessment_year' => $this->input->post('assessment_year'),
                    'verifying_income_proof' => $this->input->post('verifying_income_proof'),
                    'pan_no' => $this->input->post('pan_no'),
                    'proof_submitted' => $this->input->post('proof-submitted'),
                    'acknowledgement_number' => $this->input->post('acknowledgement_number'),
                    "Submission_date" => $this->input->post('Submission-date'),
                    "gross_income" => $this->input->post('gross-income'),
                    "auditor_name" => $this->input->post('auditor-name'),
                    "office_address" => $this->input->post('office_address'),
                    "status_type" => $this->input->post('status-type'),
                    "itr" => $this->input->post('itr'),
                    "executive_name" => $this->input->post('executive-name'),
                    "signature" => $signature_data['file_name'],
                    "stamp" => $stamp_data['file_name'],
                    "system_case_id" => $this->input->post('system-case-id'),
                    "applicant_name" => $this->input->post('applicant-name'),
                    "ref_number" => $this->input->post('ref-number')
                );
                 $id = null;
                $this->db->set($data);
                 $result = $this->Income_model->save_data($data, $id);
             
                    if ($result) {
                        echo json_encode(['status' => 'success']);
                    } else {
                    echo json_encode(['status' => 'error', 'message' => 'Error inserting data into the database']);
                    }
                if ($result) {
                    redirect('Dashboard');
                } else {

                    echo 'Error inserting data into the database';
                }
            } else {
                $error = array('error' => $this->upload->display_errors());
                echo $error['error'];
            }
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
?>