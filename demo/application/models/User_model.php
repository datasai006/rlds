<?php
class User_model extends CI_Model
{
	function checkUser($email,$password)
	{
		$query = $this->db->query("SELECT * from tbl_user where email='$email' AND password='$password'");
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
		$query = $this->db->query("SELECT * from tbl_user WHERE id='$userid' AND password='$currentPassword' ");
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

}