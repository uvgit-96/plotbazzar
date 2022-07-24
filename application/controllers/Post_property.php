<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Post_property extends MY_Controller {

	public function __construct(){
		parent::__construct();	
	}

	public function index(){
		$this->load->view('web/home/page-dashboard-new-property');
	}

	

 }
?>
