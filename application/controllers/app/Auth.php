<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('mailer');
		$this->load->model('app/auth_model', 'auth_model');
	}

	//--------------------------------------------------------------
	public function index(){

		if($this->session->has_userdata('is_admin_login')){
			redirect('app/dashboard');
		}
		else{
			redirect('app/auth/login');
		}
	}

	//--------------------------------------------------------------
	public function login(){

		if($this->input->post('submit')){

			if ($this->form_validation->run('login') == FALSE) {
				$data['errors'] = $this->form_validation->error_array();
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('app/auth/login'),'refresh');
			}
			else {
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$result = $this->auth_model->login($data);
				if($result){
				
					if($result['is_active'] == 0){
						$this->session->set_flashdata('error', 'Account is disabled by Admin!');
						redirect(base_url('app/auth/login'));
						exit();
					}
					if($result['is_admin'] == 1){
						$admin_data = array(
							'is_admin_login' => TRUE
						);
						$this->session->set_userdata($admin_data);
						redirect(base_url('app/dashboard'), 'refresh');
						}
					}
					else{
						$this->session->set_flashdata('error', 'Invalid Username or Password!');
						redirect(base_url('app/auth/login'));
					}
				}
			}
			else{
				$this->load->view('app/auth/login' );
			}
		}

		//-------------------------------------------------------------------------
		public function register(){

			if($this->input->post('submit')){

				// pre($_POST); exit();
				// for google recaptcha
				if ($this->recaptcha_status == true) {
		            if (!$this->recaptcha_verify_request()) {
		                $this->session->set_flashdata('form_data', $this->input->post());
		                $this->session->set_flashdata('reCaptcha', 'reCaptcha Error');
		                redirect(base_url('app/auth/register'));
		                exit();
		            }
		        }

				if ($this->form_validation->run('register') == FALSE) {

					$data['errors'] = $this->form_validation->error_array();
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('app/auth/register'),'refresh');
					// redirect(base_url('app/auth/register'),'refresh');
				}
				else{
					$data = array(
						'username' 			=> $this->input->post('username'),
						'firstname' 		=> $this->input->post('firstname'),
						'lastname' 			=> $this->input->post('lastname'),
						'admin_role_id' => 2, // By default i putt role is 2 for registraiton
						'email' 				=> $this->input->post('email'),
						'password' 			=>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_active' 		=> 1,
						'is_verify' 		=> 0,
						'token' 				=> md5(rand(0,1000)),
						'last_ip' 		  => '',
						'created_at' 		=> date('Y-m-d : h:m:s'),
						'updated_at' 		=> date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->auth_model->register($data);
					if($result){
						//sending welcome email to user
						$this->load->helper('email_helper');

						$name = $data['firstname'].' '.$data['lastname'];
						$email_verification_link = base_url('app/auth/verify/').'/'.$data['token'];
						$body = $this->mailer->registration_email($name, $email_verification_link);
						$to = $data['email'];
						$subject = 'Activate your account';
						$message =  $body ;

						$email = send_email($to, $subject, $message, $file = '' , $cc = '');

						if($email){
							$this->session->set_flashdata('success', 'Your Account has been made, please verify it by clicking the activation link that has been send to your email.');
							redirect(base_url('app/auth/login'));
						}
						else{
							echo 'Email Error';
						}
					}
				}
			}
			else{
				$data['title'] = 'Create an Account';
				$data['navbar'] = false;
				$data['sidebar'] = false;
				$data['footer'] = false;
				$this->load->view('app/auth/register' , $data);
			}
		}

		//----------------------------------------------------------
		public function verify(){

			$verification_id = $this->uri->segment(4);
			$result = $this->auth_model->email_verification($verification_id);
			if($result){
				$this->session->set_flashdata('success', 'Your email has been verified, you can now login.');
				redirect(base_url('app/auth/login'));
			}
			else{
				$this->session->set_flashdata('success', 'The url is either invalid or you already have activated your account.');
				redirect(base_url('app/auth/login'));
			}
		}

		//--------------------------------------------------
		public function forgot_password(){

			if($this->input->post('submit')){
				//checking server side validation
				$this->form_validation->set_rules('email', 'Email', 'valid_email|trim|required');
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('app/auth/forget_password'),'refresh');
				}

				$email = $this->input->post('email');
				$response = $this->auth_model->check_user_mail($email);

				if($response){

					$rand_no = rand(0,1000);
					$pwd_reset_code = md5($rand_no.$response['admin_id']);
					$this->auth_model->update_reset_code($pwd_reset_code, $response['admin_id']);

					// --- sending email
					$this->load->helper('email_helper');
					$name = $response['firstname'].' '.$response['lastname'];
					$email = $response['email'];
					$reset_link = base_url('app/auth/reset_password/'.$pwd_reset_code);
					$body = $this->mailer->pwd_reset_email($name,$reset_link);
					$to = $email;
					$subject = 'Reset your password';
					$message =  $body ;
					$email = send_email($to, $subject, $message, $file = '' , $cc = '');

					if($email){
						$this->session->set_flashdata('success', 'We have sent instructions for resetting your password to your email');

						redirect(base_url('app/auth/forgot_password'));
					}
					else{
						$this->session->set_flashdata('error', 'There is the problem on your email');
						redirect(base_url('app/auth/forgot_password'));
					}
				}
				else{
					$this->session->set_flashdata('error', 'The Email that you provided are invalid');
					redirect(base_url('app/auth/forgot_password'));
				}
			}
			else{

				$data['title'] = 'Forget Password';
				$data['navbar'] = false;
				$data['sidebar'] = false;
				$data['footer'] = false;

				// $this->load->view('app/includes/_header', $data);
				// $this->load->view('app/auth/forget_password');
				// $this->load->view('app/includes/_footer', $data);

				// $this->load->view('app/auth/forget_password');
				$this->load->view('app/auth/forget_password' , $data);
			}
		}

		//----------------------------------------------------------------
		public function reset_password($id=0){

			// check the activation code in database
			if($this->input->post('submit')){
				$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
				$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);

					$this->session->set_flashdata('reset_code', $id);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect($_SERVER['HTTP_REFERER'], 'refresh');
				}

				else{
					$new_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
					$this->auth_model->reset_password($id, $new_password);
					$this->session->set_flashdata('success','New password has been Updated successfully.Please login below');
					redirect(base_url('app/auth/login'));
				}
			}
			else{
				$result = $this->auth_model->check_password_reset_code($id);

				if($result){

					$data['title'] = 'Reseat Password';
					$data['reset_code'] = $id;
					$data['navbar'] = false;
					$data['sidebar'] = false;
					$data['footer'] = false;

					$this->load->view('app/includes/_header', $data);
					$this->load->view('app/auth/reset_password');
					$this->load->view('app/includes/_footer', $data);

				}
				else{
					$this->session->set_flashdata('error','Password Reset Code is either invalid or expired.');
					redirect(base_url('app/auth/forgot_password'));
				}
			}
		}

		//-----------------------------------------------------------------------
		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('admin'), 'refresh');
		}

	}  // end class


?>
