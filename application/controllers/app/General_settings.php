<?php defined('BASEPATH') OR exit('No direct script access allowed');

class General_settings extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		auth_check(); // check login auth
		$this->rbac->check_module_access();

		$this->load->model('app/setting_model', 'setting_model');
	}

	//-------------------------------------------------------------------------
	// General Setting View
	public function index()
	{

		$data['general_settings'] = $this->setting_model->get_general_settings();

		$data['title'] = 'General Setting';

		// $this->load->view('app/includes/_header', $data);
		// $this->load->view('app/general_settings/setting', $data);
		// $this->load->view('app/includes/_footer');

    loadViews('general_settings/setting', $data);

	}

	//-------------------------------------------------------------------------
	public function add()
	{
		$this->rbac->check_operation_access(); // check opration permission

		$data = array(
			'application_name' => $this->input->post('application_name'),
			'timezone' => $this->input->post('timezone'),
			'currency' => $this->input->post('currency'),
			'copyright' => $this->input->post('copyright'),
			'email_from' => $this->input->post('email_from'),
			'smtp_host' => $this->input->post('smtp_host'),
			'smtp_port' => $this->input->post('smtp_port'),
			'smtp_user' => $this->input->post('smtp_user'),
			'smtp_pass' => $this->input->post('smtp_pass'),
			'facebook_link' => $this->input->post('facebook_link'),
			'twitter_link' => $this->input->post('twitter_link'),
			'google_link' => $this->input->post('google_link'),
			'youtube_link' => $this->input->post('youtube_link'),
			'linkedin_link' => $this->input->post('linkedin_link'),
			'instagram_link' => $this->input->post('instagram_link'),
			'recaptcha_secret_key' => $this->input->post('recaptcha_secret_key'),
			'recaptcha_site_key' => $this->input->post('recaptcha_site_key'),
			'recaptcha_lang' => $this->input->post('recaptcha_lang'),
			'created_date' => date('Y-m-d : h:m:s'),
			'updated_date' => date('Y-m-d : h:m:s'),
		);

		$old_logo = $this->input->post('old_logo');
		$old_favicon = $this->input->post('old_favicon');

		$path="assets/img/";

		if(!empty($_FILES['logo']['name']))
		{
			$this->functions->delete_file($old_logo);

			$result = $this->functions->file_insert($path, 'logo', 'image', '9097152');
			if($result['status'] == 1){
				$data['logo'] = $path.$result['msg'];
			}
			else{
				$this->session->set_flashdata('error', $result['msg']);
				redirect(base_url('app/general_settings'), 'refresh');
			}
		}

		// favicon
		if(!empty($_FILES['favicon']['name']))
		{
			$this->functions->delete_file($old_favicon);

			$result = $this->functions->file_insert($path, 'favicon', 'image', '197152');
			if($result['status'] == 1){
				$data['favicon'] = $path.$result['msg'];
			}
			else{
				$this->session->set_flashdata('error', $result['msg']);
				redirect(base_url('app/general_settings'), 'refresh');
			}
		}

		$data = $this->security->xss_clean($data);
		$result = $this->setting_model->update_general_setting($data);
		if($result){
			$this->session->set_flashdata('success', 'Setting has been changed Successfully!');
			redirect(base_url('app/general_settings'), 'refresh');
		}
	}

}

?>
