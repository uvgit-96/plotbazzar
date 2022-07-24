<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

	public function __construct(){
		parent::__construct();
		auth_check(); // check login auth
		$this->load->model('app/dashboard_model', 'dashboard_model');
	}

	public function index(){
		$data['title'] = 'Dashboard';
		loadViews('dashboard/index', $data);
	}
}

?>
