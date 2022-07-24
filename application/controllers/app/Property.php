<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends MY_Controller
{
    function __construct(){
        parent::__construct();
        auth_check(); // check login auth
		$this->load->model('app/Property_model', 'property');
		$this->load->model('app/Agents_model', 'agents');
		$this->load->model('app/Locations_model', 'locations_model');
    }

	//-----------------------------------------------------
	function index(){

		$data['title'] = 'Property Listing';
	 	$data['cssAssets'] = ['assets/plugins/datatables/css/jquery.dataTables.min.css','assets/plugins/toastr/toastr.min.css','assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'];
	    $data['jsAssets'] = ['assets/plugins/datatables/jquery.dataTables.min.js','assets/dist/js/property/list.js','assets/plugins/toastr/toastr.min.js','assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'];
	    $data['agent_list'] = $this->property->get_agent_list();
	    $data['state_list'] = $this->agents->get_state();
	    $data['dist_list'] = $this->locations_model->get_all_district();
        loadViews('property/list', $data);
	}

	public function propertyList(){
			 $postData = $this->input->post();
			 $data = $this->property->propertyList($postData);
			 echo json_encode($data);
	}



}

?>
