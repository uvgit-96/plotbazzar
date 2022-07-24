<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends My_Controller {

	public function __construct(){
		parent::__construct();
		auth_check(); // check login auth
		$this->load->model('app/Locations_model', 'locations_model');
	}

	//-----------------------------------------------------
	function index(){

		$data['title'] = 'Manage Testimonials';
	 	$data['cssAssets'] = ['assets/plugins/datatables/css/jquery.dataTables.min.css','assets/plugins/toastr/toastr.min.css','assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'];
	    $data['jsAssets'] = ['assets/plugins/datatables/jquery.dataTables.min.js','assets/dist/js/agents/list.js','assets/plugins/toastr/toastr.min.js','assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'];
       loadViews('agents/list', $data);
	}

	public function testitList(){
			 $postData = $this->input->post();
			 $data = $this->locations_model->districtList($postData);
			 echo json_encode($data);
	}
	
	public function add_testi(){
	    if($this->input->post('submit')){
			
			$data = array(
			    'state_id' => 1,
			    'name' => $this->input->post('district'),
			    'created_at' => date('Y-m-d h:i:s')
			    );
			$result = $this->locations_model->add_district($data);
			if($result){
				$this->session->set_flashdata('success', 'District is addedd successfully!');
				redirect(base_url('app/locations/district'));
			}else {
				$this->session->set_flashdata('error', 'Something went wrong! please try again later');
				redirect(base_url('app/locations/add_district'));
			}
	    } else {
    	   $data['title'] = 'Add District';
    	   loadViews('locations/add_district', $data);
	    }
	}
	
	
	
	public function edit_testi($id){
	    if($this->input->post('submit')){
			
			$data = array(
			    'district_id' => $this->input->post('district'),
			    'name' => $this->input->post('name'),
			    );
			$result = $this->locations_model->edit_taluka($data,$id);
			if($result){
				$this->session->set_flashdata('success', 'Taluka is edit successfully!');
				redirect(base_url('app/locations/taluka'));
			}else {
				$this->session->set_flashdata('error', 'Something went wrong! please try again later');
				redirect(base_url('app/locations/edit_taluka/'.$id));
			}
	    } else {
    	   $data['title'] = 'Edit Taluka';
    	   $data['dist_list'] = $this->locations_model->get_all_district();
    	   $data['data'] = $this->locations_model->get_taluka_details($id);
    	   loadViews('locations/edit_taluka', $data);
	    }
	}
		
	public function talukaList(){
			 $postData = $this->input->post();
			 $data = $this->locations_model->talukaList($postData);
			 echo json_encode($data);
	}
}

?>
