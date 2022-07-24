<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(){
		parent::__construct();	
	}

	public function index(){
		$this->load->view('web/home/home1');
	}
	
	public function about_us(){
		$this->load->view('web/home/about_us');
	}
	
	public function contact(){
		$this->load->view('web/home/contact');
	}
	 
	public function agent_listing(){
		$this->load->view('web/home/agent_list');
	}
	 
	public function property_listing(){
		$this->load->view('web/home/property_listing');
	}
	
	public function agent_details(){
		$this->load->view('web/home/agent_details');
	}
	
	public function property_details(){
		$this->load->view('web/home/property_details');
	}
	
	public function login(){
		$this->load->view('web/home/login_register');
	}


	

 }
?>
