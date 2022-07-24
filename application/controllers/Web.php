<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

	public function __construct(){
		parent::__construct();	
	}


	public function home1(){
		$this->load->view('web/home/home1');
	 }

	public function home2(){
		$this->load->view('web/home/home2');
	}

	public function home3(){
		$this->load->view('web/home/home3');
	}

	public function home4(){
		$this->load->view('web/home/home4');
	}

	public function home5(){
		$this->load->view('web/home/home5');
	}

	public function home6(){
		$this->load->view('web/home/home6');
	} 

	public function home7(){
		$this->load->view('web/home/home7');
	}

	public function home8(){
		$this->load->view('web/home/home8');
	}

	public function home9(){
		$this->load->view('web/home/home9');
	}

	public function home10(){
		$this->load->view('web/home/home10');
	} 

	}  // end class
?>
