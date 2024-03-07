<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// application/controllers/Entities.php

class Entities extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tbl_entities_model');
        $this->load->model('MenuModel');
    }

    public function index() {
        $data['entities'] = $this->tbl_entities_model->get_entities();
        // Your code to load a view with the entities data
    }

    public function create() {
        $data=array(
			
			"name"=>$this->input->post("name"),
            "table_name "=>$this->input->post("table_name "),
    
		);
		 $this->load->model('tbl_entities_model');
		 $insert_id = $this->tbl_entities_model->create_entity($data);
    }
    

 public function edit($id) {
    $data['entity'] = $this->tbl_entities_model->get_entity_by_id($id);
    
        $data['menus'] = $this->MenuModel->get_menus();
         $data['menu_items'] = $this->MenuModel->get_menu_items();
        $this->load->view('includes/sidebar', $data);
    $this->load->view('edit_entity', $data);
}

public function update($id) {
    $data = array(
        "name" => $this->input->post("name"),
        "table_name" => $this->input->post("table_name")
    );

    $this->tbl_entities_model->update_entity($id, $data);

   
   redirect('entities');
}


  public function delete($id) {
    $this->tbl_entities_model->delete_entity($id);

    
     redirect('entities');
}

}