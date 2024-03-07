<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('User_model');
		 $this->load->library('permission_lib');
	}
public function index() {
	$this->load->library('session');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->form_validation->set_rules("email", 'Email', 'required');
        $this->form_validation->set_rules("password", 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('User_model');

            $user = $this->User_model->getUserByEmail($email);
			 var_dump($user);
            if ($user && password_verify($password, $user->password)) {
                $data = array(
                    'username' => $user->username,
                    'email' => $user->email,
                    'id' => $user->id,
                    'role_id' => $user->role_id 
                );

                $this->session->set_userdata('LoginSession', $data);
                redirect(base_url('Dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Email Id or Password is Wrong');
                redirect(base_url('login/index'));
            }
        } else {
            $this->load->view('login');
        }
    } else {
        $this->load->view('login');
    }
}




	function logout()
	{
		session_unset();
		session_destroy();
		setcookie('ci_session', '', time() - 1000, '/');
		redirect(base_url('login/index'));
	}

	
	function forgotPassword()
	{
		$this->load->model('user_model');
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			if($this->form_validation->run()==TRUE)
			{
				$email  = $this->input->post('email');
				$validateEmail = $this->user_model->validateEmail($email);
				if($validateEmail!=false)
				{
					$row = $validateEmail;
					$user_id = $row->id;

					$string = time().$user_id.$email;
					$hash_string = hash('sha256',$string);
					$currentDate = date('Y-m-d H:i');
					$hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' + 1 days'));
					$data = array(
						'hash_key'=>$hash_string,
						'hash_expiry'=>$hash_expiry,
					);

					
					$resetLink = base_url().'reset/password?hash='.$hash_string;
   	   		 $otp=rand(000000,999999);
					$message = '<p>Your reset password Link is here:</p>'.$resetLink 
					.'<br><p>Your reset otp:</p>'.$otp;
				  $subject="verify-account-otp";
					$sentStatus = $this->sendEmail($email,$subject,$message);
					if($sentStatus==true)
					{
						$this->user_model->updatePasswordhash($data,$email);
						$this->session->set_flashdata('success','Reset password link successfully sent');
						redirect(base_url('login/forgotPassword'));
					}
					else
					{
						$this->session->set_flashdata('error','Email sending error');
						$this->load->view('forgot_password');	
					}

				}	
				else
				{
					$this->session->set_flashdata('error','invalid email id');
					$this->load->view('forgot_password');	
				}

			}
			else
			{
				$this->load->view('forgot_password');	
			}
		}
		else
		{
			$this->load->view('forgot_password');	
		}
		
	}
	public function sendEmail($email,$subject,$message)
    {
	    $config = Array(
	      'protocol' => 'smtp',
 			 'smtp_host' => 'sandbox.smtp.mailtrap.io',
 			 'smtp_port' => 2525,
 			 'smtp_user' => '3f6d549b1275d6',
 			 'smtp_pass' => '********8859',
  			 'crlf' => "\r\n",
  			 'newline' => "\r\n"
	    	);



          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('noreply');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);
          
          if($this->email->send())
         {
           return true;
         }
         else
         {
         	return false;
         }
    }
     }