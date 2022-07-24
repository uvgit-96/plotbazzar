<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(){
		parent::__construct();	
		$this->load->model('Web_model', 'web');
	}

	public function index(){
		$data['agents_list'] = $this->web->get_agents_list();
		$data['property_list'] = $this->web->get_properties_list();
		//pre($data['property_list']);
		$this->load->view('web/home/home1',$data);
	}
	
	public function about_us(){
		$this->load->view('web/home/about_us');
	}
	
	public function contact(){
		$this->load->view('web/home/contact');
	}
	 
	public function agent_listing(){
		$data['agents_list'] = $this->web->get_agents_list();
		$this->load->view('web/home/agent_list',$data);
	}
	 
	public function property_listing(){
		$data['property_list'] = $this->web->get_properties_list();
		$this->load->view('web/home/property_listing',$data);
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
