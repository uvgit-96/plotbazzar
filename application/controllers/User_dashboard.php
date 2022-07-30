<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();	
	}

	function index(){
		$data['title'] = "Dashboard";
		$this->load->view('web/user_dashboard/dashboard',$data);
	}

	public function Post_property(){
		$data['title'] = "Add New Property";
		$this->load->view('web/user_dashboard/post-property',$data);
	}

	public function Profile(){
		$data['title'] = "Profile";
		$this->load->view('web/user_dashboard/profile',$data);
	}

	public function Property_list(){
		$data['title'] = "Property List";
		$this->load->view('web/user_dashboard/property_list',$data);
	}

	public function Invoice(){
		$data['title'] = "Invoice";
		$this->load->view('web/user_dashboard/invoice',$data);
	}

	

 }
?>
