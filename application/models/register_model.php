<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model{
    
    public function register($data,$table ){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
}