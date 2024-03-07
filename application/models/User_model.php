<?php
class User_model extends CI_Model
{
	  public function getUserByEmail($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_users');
        return $query->row(); // Return the user data
    }
	 public function checkUser($email,$password)
	{
		$query = $this->db->query("SELECT * from tbl_users where email='$email' AND password='$password'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	function checkCurrentPassword($currentPassword)
	{
		$userid = $this->session->userdata('LoginSession')['id'];
		$query = $this->db->query("SELECT * from tbl_users WHERE id='$userid' AND password='$currentPassword' ");
		if($query->num_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function updatePassword($password)
	{
		$userid = $this->session->userdata('LoginSession')['id'];
		$query = $this->db->query("update  tbl_user set password='$password' WHERE id='$userid' ");
		
	}

	function validateEmail($email)
	{
		$query = $this->db->query("SELECT * FROM tbl_user WHERE email='$email'");
		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	function updatePasswordhash($data,$email)
	{
		$this->db->where('email',$email);
		$this->db->update('tbl_user',$data);
	}
	
	function getHahsDetails($hash)
	{
		$query =$this->db->query("select * from tbl_user WHERE hash_key='$hash'");
		if($query->num_rows()==1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}

	}

	function validateCurrentPassword($currentPassword,$hash)
	{
		$query = $this->db->query("SELECT * FROM tbl_user WHERE password='$currentPassword' AND hash_key='$hash'");
		if($query->num_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function updateNewPassword($data,$hash)
	{
		$this->db->where('hash_key',$hash);
		$this->db->update('tbl_user',$data);
	}

	 public function user($data,$table){
        $this->db->insert($table,$data);
        return $this->db->insert_id(); 
    }
	  public function insert_user($employee_data) {
        $this->db->insert('tbl_users', $employee_data);
        return $this->db->insert_id();
    }
	public function update_user($employee_data) {
    $this->db->where('id', $employee_data['employee_id']);
    $this->db->update('tbl_users', array(
        'username' => $employee_data['last_name'],
        'email' => $employee_data['email'],
        'password' => $employee_data['password'],
    ));
}
	 public function getUserRole($user_id) {
        // Fetch user's role from the database based on user_id
        $this->db->select('role_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('tbl_role_permissions');
        
        // if ($query->num_rows() == 1) {
        //     $row = $query->row();
        //     return $row->role_id;
        // } else {
        //     // Return the default role ID
        //     return
		// 	//  self::DEFAULT_ROLE_ID;
        // }
    }
	public function get_users(){
       $this->db->select('*');
       $this->db->where('status', 'active');
       $query = $this->db->get('tbl_users');
       return $query->result_array();
	}


}