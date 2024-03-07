<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->form_validation->set_rules("email", 'Email', 'required');
        $this->form_validation->set_rules("password", 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('User_model');
            $status = $this->User_model->checkUser($email, $password);

            if ($status != false) {
                $data = array(
                    'username' => $status->user_name,
                    'email' => $status->email,
                    'id' => $status->id,
                );

                // Move session_start to the top
                session_start();

                $this->session->set_userdata('LoginSession', $data);
                redirect(base_url('Dashboard'));
            } else {
                $this->session->set_flashdata('error', 'Email Id or Password is Wrong');
                redirect(base_url('login/index'));
            }
        } else {
            // Move session_start to the top
            session_start();
            $this->load->view('login');
        }
    } else {
        // Move session_start to the top
        // session_start();
        $this->load->view('login');
    }
}


	function logout()
	{
		session_unset();
		session_destroy();
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


	/*user this email sending code */

	public function sendEmail($email,$subject,$message)
    {

    	/* use this on server */

    	/* $config = Array(
		      'mailtype' => 'html',
		      'charset' => 'iso-8859-1',
		      'wordwrap' => TRUE
	    	);
    	 */

    	
    	/*This email configuration for sending email by Google Email(Gmail Acccount) from localhost */
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
     function common_data()
	{
		if($this->session->userdata("employee_session_id")=="" || $this->session->userdata("employee_session_id")==null){
			redirect("auth");
		}

		$data['employee_session_id']= $this->session->userdata("employee_session_id");
		$data['employee_session_name']= $this->session->userdata("employee_session_name");
		$data['employee_session_email']= $this->session->userdata("employee_session_email");
		$data['employee_session_mobile']= $this->session->userdata("employee_session_mobile");
		$data['employee_session_versity_id']= $this->session->userdata("employee_session_versity_id");

		return $data;
	}

   
    }