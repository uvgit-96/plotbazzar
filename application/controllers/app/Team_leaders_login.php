<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Team_leaders_login extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('app/Team_leaders_model', 'tl_model');
	}

	public function login(){
		if($this->input->post('submit')){
			if ($this->form_validation->run('login') == FALSE) {
				$data['errors'] = $this->form_validation->error_array();
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('tl_login'),'refresh');
			}
			else {
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$result = $this->tl_model->verify_tl_login($data['username'],$data['password']);
				if($result){
						if($result['status'] !='active'){
							$this->session->set_flashdata('error', 'Account is disabled by Admin!');
							redirect(base_url('tl_login'));
							exit();
						}
						if($result['user_role'] !='Team Leader'){
							$this->session->set_flashdata('error', 'Team member is not allowed to login as TL');
							redirect(base_url('tl_login'));
							exit();
						}
						$admin_data = array(
							'tl_id' => $result['id'],
							'is_tl_login' => TRUE
						);
						$this->session->set_userdata($admin_data);
						redirect(base_url('app/tl_dashboard'), 'refresh');	
					}
					else{
						$this->session->set_flashdata('error', 'Invalid Username or Password!');
						redirect(base_url('tl_login'));
					}
				}
			}
			else{
				$this->load->view('app/team_leaders_login/login');
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect(base_url('tl_login'), 'refresh');
		}

	}  // end class
?>
