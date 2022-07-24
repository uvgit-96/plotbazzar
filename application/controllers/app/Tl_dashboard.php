<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tl_dashboard extends My_Controller {

	public function __construct(){
		parent::__construct();
		tl_auth_check(); // check login auth
		$this->load->model('app/dashboard_model', 'dashboard_model');
	}

	public function index(){
		$data['title'] = 'Dashboard';
		loadViews('team_leaders/dashboard', $data);
	}
}

?>
