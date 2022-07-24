<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tl_member extends MY_Controller
{
    function __construct(){
        parent::__construct();
        tl_auth_check(); // check login auth
		$this->load->model('app/Tl_member_model', 'tl_member');
		$this->load->model('app/Common_model', 'common');
    }

	//-----------------------------------------------------
	function index(){

		$data['title'] = 'Team Member';
	 	$data['cssAssets'] = ['assets/plugins/datatables/css/jquery.dataTables.min.css','assets/plugins/toastr/toastr.min.css','assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'];
	    $data['jsAssets'] = ['assets/plugins/datatables/jquery.dataTables.min.js','assets/dist/js/tl_member/list.js','assets/plugins/toastr/toastr.min.js','assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'];
    loadViews('tl_member/list', $data);
	}

	public function internalList(){
			 $postData = $this->input->post();
			 $data = $this->tl_member->internalList($postData);
			 echo json_encode($data);
	}

	public function add(){
		if($this->input->post('submit')){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
			$this->form_validation->set_rules('contact', 'Contact', 'trim|required|is_unique[users.contact]');
			$this->form_validation->set_rules('aadhaar_no', 'Aadhar Number', 'trim|required|is_unique[users.aadhaar_no]');
			$this->form_validation->set_rules('pan_no', 'PAN Number', 'trim|required|is_unique[users.pan_no]');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('app/tl_member/add'),'refresh');
			}      
					$max_user_id = $this->common->get_max_user_id();
					if($max_user_id['id']!=""){
						if(strlen($max_user_id['id'] == 1)){
							if($max_user_id['id'] == "9"){
								$emp_id = "RUP10";
							} else {
								$id = (int)$max_user_id['id'] + 1;
								$emp_code = "RUP0".$id;
							}
						} else{
							   $id = (int)$max_user_id['id'] + 1;
							   $emp_code = "RUP".$id;
						}
					} else {
						$emp_code = "RUP01";
					}
					$data = array(
						'emp_code' => $emp_code,
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'alt_email' => $this->input->post('alt_email'),
						'contact' => $this->input->post('contact'),
						'alt_contact' => $this->input->post('alt_contact'),
						'gender' => $this->input->post('gender'),
						'date_of_birth' => $this->input->post('date_of_birth'),
						'aadhaar_no' => $this->input->post('aadhaar_no'),
						'pan_no' => $this->input->post('pan_no'),
						'address' => $this->input->post('address'),
						'pincode' => $this->input->post('pincode'),
						'user_role' => "TME(Tele Caller)",
						'created_by' => $this->session->userdata('tl_id'),
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'status' => "inactive",
						'register_datetime' => date('Y-m-d : h:m:s')
					);
                  $result_id = $this->tl_member->add_leaders($data);
					if($result_id){
							$this->session->set_flashdata('success', $this->input->post('firstname').' team members has been added successfully!');
							redirect(base_url('app/tl_member'));
					} else {
			          $this->session->set_flashdata('error', 'Something went wrong please try again later');
							redirect(base_url('app/tl_member/add'));
			        }	
			}
			else
			{  
				 $data['cssAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'];
				 $data['jsAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/tl_member/add_form_validate.js'];
				 $data['title'] = 'New Member Registration';
    		 loadViews('tl_member/add', $data);
			}
	}

	public function edit($id=""){

		if($this->input->post('submit')){
			
			$email = false;
			$contact = false;
			$aadhaar_no = false;
			$pan_no = false;
			

			if($this->input->post('old_email')!=$this->input->post('email')){
				$email = true;
			 $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		    }

		    if($this->input->post('old_contact')!=$this->input->post('contact')){
		    	$contact = true;
			  $this->form_validation->set_rules('contact', 'Contact', 'required|is_unique[users.contact]');
			}

			if($this->input->post('old_aadhaar_no')!=$this->input->post('aadhaar_no')){
				$aadhaar_no = true;
			  $this->form_validation->set_rules('aadhaar_no', 'Aadhar Number', 'required|is_unique[users.aadhaar_no]');
			}

			if($this->input->post('old_pan_no')!=$this->input->post('pan_no')){
				$pan_no = true;
			  $this->form_validation->set_rules('pan_no', 'PAN Number', 'required|is_unique[users.pan_no]');
			}
			

			if($email  || $contact || $aadhaar_no || $pan_no){
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('app/tl_member/edit/'.$id),'refresh');
				}
			}

				$data = array(
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'alt_email' => $this->input->post('alt_email'),
						'contact' => $this->input->post('contact'),
						'alt_contact' => $this->input->post('alt_contact'),
						'gender' => $this->input->post('gender'),
						'date_of_birth' => $this->input->post('date_of_birth'),
						'aadhaar_no' => $this->input->post('aadhaar_no'),
						'pan_no' => $this->input->post('pan_no'),
						'address' => $this->input->post('address'),
						'pincode' => $this->input->post('pincode'),
						'status' => $this->input->post('status'),
						'last_update_datetime' => date('Y-m-d : h:m:s')
				);
				if($this->input->post('password')!=""){
					$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
					
				} 
				$result_id = $this->tl_member->edit_tl($data, $id);
				if($result_id){
					$this->session->set_flashdata('success', 'Members details has been updated successfully!');
					redirect(base_url('app/tl_member'));
				} else {
					$this->session->set_flashdata('errors', 'Members has been updated successfully!');
					redirect(base_url('app/tl_member/edit/'.$id));
				}
		}
		
		else{
			$data['title'] = 'Member Details Edit';
			$data['cssAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'];
			$data['jsAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/tl_member/edit_form_validate.js'];
			$data['tl_details'] = $this->tl_member->get_tl_by_id($id);
			loadViews('tl_member/edit', $data);
		}
	}

   public function view_details($id){
   	 $data['user_details'] = $this->tl_member->get_tl_by_id($id);
   	 $data['title'] = 'View details';
   	 loadViews('tl_member/view_details', $data);
   }

   public function soft_delete($id)
	{
			 $this->tl_member->soft_delete($id);
			 $this->session->set_flashdata('success', 'User deleted successfully');
      		 redirect(base_url('app/tl_member'));
	}
   
   public function change_status()
   {
			$this->tl_member->change_status();
   }


}

?>
