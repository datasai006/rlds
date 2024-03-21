<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residence extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Residence_model');
        $this->load->library('upload');
        $this->load->model('MenuModel');
    }

    public function index() {
        
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
        $this->load->view('verification/residence');
    }

    // public function add_residence() {
    //     $positive_images = array();

    //     if ($this->input->server('REQUEST_METHOD') === 'POST') {
    //         $config['upload_path']   = './uploads/';
    //         $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //         $config['max_size'] = 0;
    //         $this->upload->initialize($config);

    //         foreach ($_FILES['positive_images']['name'] as $key => $value) {
    //             $_FILES['positive_image']['name']     = $_FILES['positive_images']['name'][$key];
    //             $_FILES['positive_image']['type']     = $_FILES['positive_images']['type'][$key];
    //             $_FILES['positive_image']['tmp_name'] = $_FILES['positive_images']['tmp_name'][$key];
    //             $_FILES['positive_image']['error']    = $_FILES['positive_images']['error'][$key];
    //             $_FILES['positive_image']['size']     = $_FILES['positive_images']['size'][$key];

    //             if ($this->upload->do_upload('positive_image')) {
    //                 $positive_images[] = $this->upload->data('file_name');
    //             } else {
    //                 echo 'Error uploading positive image: ' . $this->upload->display_errors();
    //                 return;
    //             }
    //         }
    //         if ($this->upload->do_upload('signature')) {
    //             $signature_data = $this->upload->data();
    //         } else {
    //             echo 'Error uploading signature: ' . $this->upload->display_errors();
    //             return;
    //         }
    //         if ($this->upload->do_upload('stamp')) {
    //             $stamp_data = $this->upload->data();
    //         } else {
    //             echo 'Error uploading stamp: ' . $this->upload->display_errors();
    //             return;
    //         }
    //         if (isset($signature_data) && isset($stamp_data) && !empty($positive_images)) {
    //             $positive_images_str = implode(',', $positive_images);
    //             $data = array(
    //     "branch_name"=>$this->input->post("branch_name"),
	// 	"los_no"=>$this->input->post("los_no"),
	// 	"reference_no"=>$this->input->post("reference_no"),
	// 	"typeofloan"=>$this->input->post("typeofloan"),
	// 	"Receipt_date"=>$this->input->post("Receipt_date"),	
	// 	"applicant_name"=>$this->input->post("applicant_name"),
	// 	"Address"=>$this->input->post("Address"),	
	// 	"Receipt"=>$this->input->post("Receipt"),	
	// 	"Locality"=>$this->input->post("Locality"),	
	// 	"Accessibility"=>$this->input->post("Accessibility"),	
	// 	"entrance_motorable"=>$this->input->post("entrance_motorable"),	
	// 	"Area_Sq_Ft"=>$this->input->post("Area_Sq_Ft"),
	// 	"aadhar_card"=>$this->input->post("aadhar_card"),		
	// 	"pan_card"=>$this->input->post("pan_card"),	
	// 	"Visible_Items"=>$this->input->post("Visible_Items"),	
	// 	"Land_Mark"=>$this->input->post("Land_Mark"),	
	// 	"Land_Line_No"=>$this->input->post("Land_Line_No"),	
	// 	"mobile_no"=>$this->input->post("mobile_no"),	
	// 	"mobile_no2"=>$this->input->post("mobile_no2"),	
	// 	"Within_Municipal_Limit"=>$this->input->post("Within_Municipal_Limit"),	
	// 	"Address_Confirmed"=>$this->input->post("Address_Confirmed"),	
	// 	"Relationship"=>$this->input->post("Relationship"),	
	// 	"Interior_Furniture"=>$this->input->post("Interior_Furniture"),	
	// 	"typeofroof"=>$this->input->post("typeofroof"),	
	// 	"Numberoffloors"=>$this->input->post("Numberoffloors"),	
	// 	"VechielsfoundatResidence"=>$this->input->post("VechielsfoundatResidence"),	
	// 	"Nameplatesighted"=>$this->input->post("Nameplatesighted"),	
	// 	"NeighboursVerification"=>$this->input->post("NeighboursVerification"),	
	// 	"PoliticalLink"=>$this->input->post("PoliticalLink"),	
	// 	"TypeofResidence"=>$this->input->post("TypeofResidence"),	
	// 	"NeighboursVerification1"=>$this->input->post("NeighboursVerification1"),	
	// 	"FieldExecutiveComments"=>$this->input->post("FieldExecutiveComments"),	
	// 	"Verifier_Name"=>$this->input->post("Verifier_Name"),	
	// 	"AuthoriedSignatury"=>$this->input->post("AuthoriedSignatury"),	
	// 	"ResidenceDetails"=>$this->input->post("ResidenceDetails"),	
	// 	"OwnershipResidence"=>$this->input->post("OwnershipResidence"),	
	// 	"Numberofyearsstay"=>$this->input->post("Numberofyearsstay"),
	// 	"TotalFamilyMembers"=>$this->input->post("TotalFamilyMembers"),	
	// 	"residence_permitted"=>$this->input->post("residence_permitted"),	
	// 	"NeighborsVerification2"=>$this->input->post("NeighborsVerification2"),	
	// 	"comments"=>$this->input->post("comments"),	
    //      "positive_image" => $positive_images_str,
    //      "signature" => $signature_data['file_name'],
    //      "stamp" => $stamp_data['file_name'],
    //      "system_case_id"=>$this->input->post("system_case_id"),	
	// 	"applicant_name1"=>$this->input->post("applicant_name1"),	
	// 	"ref_number"=>$this->input->post("ref_number"),		
    //             );

    //             $insert_id = $this->Residence_model->insert_data($data);

    //             if ($insert_id) {
    //                 redirect('Dashboard');
    //             } else {
    //                 echo 'Error inserting data into the database';
    //             }
    //         } else {
    //             echo 'Error uploading signature, stamp, or positive image';
    //         }
    //     }
    // }
public function add_residence() {
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);

        // Handle positive images upload
        $positive_images = array();
        foreach ($_FILES['positive_images']['name'] as $key => $value) {
            $_FILES['positive_image']['name']     = $_FILES['positive_images']['name'][$key];
            $_FILES['positive_image']['type']     = $_FILES['positive_images']['type'][$key];
            $_FILES['positive_image']['tmp_name'] = $_FILES['positive_images']['tmp_name'][$key];
            $_FILES['positive_image']['error']    = $_FILES['positive_images']['error'][$key];
            $_FILES['positive_image']['size']     = $_FILES['positive_images']['size'][$key];

            if ($this->upload->do_upload('positive_image')) {
                $positive_images[] = $this->upload->data('file_name');
            }
        }

        // Handle signature upload
        if ($this->upload->do_upload('signature')) {
            $signature_data = $this->upload->data();
        }

        // Handle stamp upload
        if ($this->upload->do_upload('stamp')) {
            $stamp_data = $this->upload->data();
        }

        // Prepare data for database insertion
        $data = array(
        "branch_name"=>$this->input->post("branch_name"),
		"los_no"=>$this->input->post("los_no"),
		"reference_no"=>$this->input->post("reference_no"),
		"typeofloan"=>$this->input->post("typeofloan"),
		"Receipt_date"=>$this->input->post("Receipt_date"),	
		"applicant_name"=>$this->input->post("applicant_name"),
		"Address"=>$this->input->post("Address"),	
		"Receipt"=>$this->input->post("Receipt"),	
		"Locality"=>$this->input->post("Locality"),	
		"Accessibility"=>$this->input->post("Accessibility"),	
		"entrance_motorable"=>$this->input->post("entrance_motorable"),	
		"Area_Sq_Ft"=>$this->input->post("Area_Sq_Ft"),
		"aadhar_card"=>$this->input->post("aadhar_card"),		
		"pan_card"=>$this->input->post("pan_card"),	
		"Visible_Items"=>$this->input->post("Visible_Items"),	
		"Land_Mark"=>$this->input->post("Land_Mark"),	
		"Land_Line_No"=>$this->input->post("Land_Line_No"),	
		"mobile_no"=>$this->input->post("mobile_no"),	
		"mobile_no2"=>$this->input->post("mobile_no2"),	
		"Within_Municipal_Limit"=>$this->input->post("Within_Municipal_Limit"),	
		"Address_Confirmed"=>$this->input->post("Address_Confirmed"),	
		"Relationship"=>$this->input->post("Relationship"),	
		"Interior_Furniture"=>$this->input->post("Interior_Furniture"),	
		"typeofroof"=>$this->input->post("typeofroof"),	
		"Numberoffloors"=>$this->input->post("Numberoffloors"),	
		"VechielsfoundatResidence"=>$this->input->post("VechielsfoundatResidence"),	
		"Nameplatesighted"=>$this->input->post("Nameplatesighted"),	
		"NeighboursVerification"=>$this->input->post("NeighboursVerification"),	
		"PoliticalLink"=>$this->input->post("PoliticalLink"),	
		"TypeofResidence"=>$this->input->post("TypeofResidence"),	
		"NeighboursVerification1"=>$this->input->post("NeighboursVerification1"),	
		"FieldExecutiveComments"=>$this->input->post("FieldExecutiveComments"),	
		"Verifier_Name"=>$this->input->post("Verifier_Name"),	
		"AuthoriedSignatury"=>$this->input->post("AuthoriedSignatury"),	
		"ResidenceDetails"=>$this->input->post("ResidenceDetails"),	
		"OwnershipResidence"=>$this->input->post("OwnershipResidence"),	
		"Numberofyearsstay"=>$this->input->post("Numberofyearsstay"),
		"TotalFamilyMembers"=>$this->input->post("TotalFamilyMembers"),	
		"residence_permitted"=>$this->input->post("residence_permitted"),	
		"NeighborsVerification2"=>$this->input->post("NeighborsVerification2"),	
		"comments"=>$this->input->post("comments"),	
         "positive_image" => $positive_images_str,
         "signature" => $signature_data['file_name'],
         "stamp" => $stamp_data['file_name'],
         "system_case_id"=>$this->input->post("system_case_id"),	
		"applicant_name1"=>$this->input->post("applicant_name1"),	
		"ref_number"=>$this->input->post("ref_number"),		
                );

       
        $insert_id = $this->Residence_model->insert_data($data);

        if ($insert_id) {
            redirect('Dashboard');
        } else {
            echo 'Error inserting data into the database';
        }
    } else {
      
        $this->load->view('add_residence_view');
    }
}

    
    public function view_residence_data() {
    $this->load->model('Residence_model');
    $data['residence_data'] = $this->Residence_model->get_residence_data();
    
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
    $this->load->view('verification/view_residence', $data);
}


public function edit_residence($id) {
    $this->load->model('Residence_model');

   
    $data['residence_data'] = $this->Residence_model->get_residence_data_by_id($id);

  $data['localities'] = ['CHAWL AREA', 'RESIDENTIAL BUILDING', 'BIG HOUSING COMPLEX'];
  $data['accessibilities'] = ['EASY TO LOCATE AND ACCESS', 'UNTRACEABLE'];
   $data['relationship_options'] = ['Applicant', 'Co-Applicant', 'Guarantor', 'Husband', 'Wife', 'Son', 'Daughter', 'Parents', 'Father in law', 'Mother in law'];
$data['interior_furniture_options'] = ['Semi-Furnished', 'Fully Furnished'];
$data['NeighboursVerification'] = ['POSITIVE', 'NEGATIVE'];
  $data['verifier_options'] = [
        'A.Md.Imran-7780661680' => 'A.Md.Imran-7780661680',
        'venkat-7702826006' => 'venkat-7702826006',
    ];
$data['TypeofResidenc'] = ['Independent', 'Apartment','Row House','Quarters'];
 $data['roof_types'] = ['R.C.C Roof', 'Aspestos','Tiles','Thatched'];
 $data['OwnershipResidenc'] = [ 'Own','Rented','Quaters'];
  $data['number_of_years_options'] = [
        '6_Months', '1_Year', '2_Years', '3_Years', '4_Years', '5_Years', '6_Years', '7_Years', '8_Years',
        '9_Years', '10_Years', '11_Years', '12_Years', '13_Years', '14_Years', '15_Years', '16_Years',
        '17_Years', '18_Years', '19_Years', '20_Years', '21_Years', '22_Years', '23_Years', '24_Years', '25_Years',
    ];
$data['neighbors_verification_options'] = array('POSITIVE', 'NEGATIVE');
 $data['current_signature'] = $data['residence_data']->signature;
        $data['current_stamp'] = $data['residence_data']->stamp;
        $data['current_positive'] = $data['residence_data']->positive_image;
     $data['total_family_members_options'] = range(1, 12);
 $data['VechielsfoundatResidence'] = ['Two Wheeler', 'Four Wheeler','Three wheeler','NA'];
  $data['Numberoffloor'] = ['SINGLE FLOOR', 'Ground + One Floor','Ground + Two Floors','Ground + Three Floors','Ground + Four Floors'];
  
         $data['menus'] = $this->MenuModel->get_menus_by_role_id($role_id);
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
   $this->load->view('verification/edit_residence_view', $data);
}


public function update_residence($id) {
    $this->load->model('Residence_model');
        if ($_FILES['signature']['name']) {
        $this->load->library('upload');
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 0; 
        $this->upload->initialize($config);

        if ($this->upload->do_upload('signature')) {
            $updated_data['signature'] = $this->upload->data('file_name');

           
            unlink('./uploads/' . $existing_images->signature);
        } else {
            echo 'Error uploading new signature image: ' . $this->upload->display_errors();
            return;
        }
    }
    
if ($_FILES['stamp']['name']) {
    $this->load->library('upload');
    $config['upload_path']   = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']      = 1024;
    $this->upload->initialize($config);

    if ($this->upload->do_upload('stamp')) {
        $updated_data['stamp'] = $this->upload->data('file_name');

        if (!empty($existing_images->stamp) && file_exists('./assets/uploads/' . $existing_images->stamp)) {
            unlink('./assets/uploads/' . $existing_images->stamp);
        }
    } else {
        echo 'Error uploading new stamp image: ' . $this->upload->display_errors();
        return;
    }
}


if (!empty($_FILES['new_positive_images']['name'][0])) {
    $this->load->library('upload');
    $config['upload_path']   = './assets/uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']      = 1024; 
    $this->upload->initialize($config);

    $new_positive_images = array();
    foreach ($_FILES['new_positive_images']['name'] as $key => $value) {
        $_FILES['positive_images[]']['name']     = $_FILES['new_positive_images']['name'][$key];
        $_FILES['positive_images[]']['type']     = $_FILES['new_positive_images']['type'][$key];
        $_FILES['positive_images[]']['tmp_name'] = $_FILES['new_positive_images']['tmp_name'][$key];
        $_FILES['positive_images[]']['error']    = $_FILES['new_positive_images']['error'][$key];
        $_FILES['positive_images[]']['size']     = $_FILES['new_positive_images']['size'][$key];

        if ($this->upload->do_upload('positive_images[]')) {
            $new_positive_images[] = $this->upload->data('file_name');
        } else {
            echo 'Error uploading new positive image: ' . $this->upload->display_errors();
            return;
        }
    }

   
    foreach ($existing_images->positive_images as $existing_positive_image) {
        if (!empty($existing_positive_image) && file_exists('./assets/uploads/' . $existing_positive_image)) {
            unlink('./assets/uploads/' . $existing_positive_image);
        }
    }

    $updated_data['positive_images'] = implode(',', $new_positive_images);
}
    // Fetch existing image filenames
    $existing_images = $this->Residence_model->get_residence_data_by_id($id);

    // Assuming you have received updated data from a form
    $data = array(
        "branch_name"=>$this->input->post("branch_name"),
		"los_no"=>$this->input->post("los_no"),
		"reference_no"=>$this->input->post("reference_no"),
		"typeofloan"=>$this->input->post("typeofloan"),
		"Receipt_date"=>$this->input->post("Receipt_date"),	
		"applicant_name"=>$this->input->post("applicant_name"),
		"Address"=>$this->input->post("Address"),	
		"Receipt"=>$this->input->post("Receipt"),	
		"Locality"=>$this->input->post("Locality"),	
		"Accessibility"=>$this->input->post("Accessibility"),	
		"entrance_motorable"=>$this->input->post("entrance_motorable"),	
		"Area_Sq_Ft"=>$this->input->post("Area_Sq_Ft"),
		"aadhar_card"=>$this->input->post("aadhar_card"),		
		"pan_card"=>$this->input->post("pan_card"),	
		"Visible_Items"=>$this->input->post("Visible_Items"),	
		"Land_Mark"=>$this->input->post("Land_Mark"),	
		"Land_Line_No"=>$this->input->post("Land_Line_No"),	
		"mobile_no"=>$this->input->post("mobile_no"),	
		"mobile_no2"=>$this->input->post("mobile_no2"),	
		"Within_Municipal_Limit"=>$this->input->post("Within_Municipal_Limit"),	
		"Address_Confirmed"=>$this->input->post("Address_Confirmed"),	
		"Relationship"=>$this->input->post("Relationship"),	
		"Interior_Furniture"=>$this->input->post("Interior_Furniture"),	
		"typeofroof"=>$this->input->post("typeofroof"),	
		"Numberoffloors"=>$this->input->post("Numberoffloors"),	
		"VechielsfoundatResidence"=>$this->input->post("VechielsfoundatResidence"),	
		"Nameplatesighted"=>$this->input->post("Nameplatesighted"),	
		"NeighboursVerification"=>$this->input->post("NeighboursVerification"),	
		"PoliticalLink"=>$this->input->post("PoliticalLink"),	
		"TypeofResidence"=>$this->input->post("TypeofResidence"),	
		"NeighboursVerification1"=>$this->input->post("NeighboursVerification1"),	
		"FieldExecutiveComments"=>$this->input->post("FieldExecutiveComments"),	
		"Verifier_Name"=>$this->input->post("Verifier_Name"),	
		"AuthoriedSignatury"=>$this->input->post("AuthoriedSignatury"),	
		"ResidenceDetails"=>$this->input->post("ResidenceDetails"),	
		"OwnershipResidence"=>$this->input->post("OwnershipResidence"),	
		"Numberofyearsstay"=>$this->input->post("Numberofyearsstay"),
		"TotalFamilyMembers"=>$this->input->post("TotalFamilyMembers"),	
		"residence_permitted"=>$this->input->post("residence_permitted"),	
		"NeighborsVerification2"=>$this->input->post("NeighborsVerification2"),	
		"comments"=>$this->input->post("comments"),	
         "system_case_id"=>$this->input->post("system_case_id"),	
		"applicant_name1"=>$this->input->post("applicant_name1"),	
		"ref_number"=>$this->input->post("ref_number"),	
        
    );
   



    $rows_affected = $this->Residence_model->update_residence_data($id, $data);

    if ($rows_affected > 0) {
         redirect('Dashboard');
    } else {
        echo 'No changes made or error occurred during the update.';
    }
}


public function delete_residence($id)
{
    $update_result = $this->Residence_model->delete_residence($id);

    if ($update_result) {
        redirect('verification/Residence/view_residence_data');
    } else {
        echo 'Error soft deleting data in the database';
    }
}


}
?>