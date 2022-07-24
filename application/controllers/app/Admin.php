<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
    function __construct(){
        parent::__construct();
        auth_check(); // check login auth
		    $this->load->model('app/admin_model', 'admin');
    }

	//-----------------------------------------------------
	function index(){

		$data['title'] = 'Internal Users List';
		$data['admin_roles'] = $this->admin->get_admin_roles();
	 	$data['cssAssets'] = ['assets/plugins/datatables/css/jquery.dataTables.min.css','assets/plugins/toastr/toastr.min.css','assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'];
	    $data['jsAssets'] = ['assets/plugins/datatables/jquery.dataTables.min.js','assets/dist/js/admin/list.js','assets/plugins/toastr/toastr.min.js','assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'];
    loadViews('admin_new/list', $data);
	}

	public function internalList(){
			 $postData = $this->input->post();
			 $data = $this->admin->internalList($postData);
			 echo json_encode($data);
	}

	public function add(){
    $data['jsAssets'] = [ 'assets/dist/js/admin/admin.js' ];
		$data['admin_roles']=$this->admin->get_admin_roles();
		if($this->input->post('submit')){

				$this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric|is_unique[ci_admin.username]|required');
				$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[ci_admin.email]');
				$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required|is_unique[ci_admin.mobile_no]');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('role', 'Role', 'trim|required');
        
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('app/admin/add'),'refresh');
				}
				else{
					$data = array(
						'admin_role_id' => $this->input->post('role'),
						'username' => $this->input->post('username'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_active' => 1,
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);

          $data = $this->security->xss_clean($data);
          $result_id = $this->admin->add_admin($data);

          if($this->input->post('master_admin_id') != NULL){
            $data_group = [
              'admin_role_id'              => $result_id,
              'master_admin_id'            => $this->input->post('master_admin_id'),
              'master_admin_group_role_id' => $this->input->post('master_admin_group_role_id'),
              'created_on'                 => date('Y-m-d : h:m:s')
            ];
            $data_group = $this->security->xss_clean($data_group);
            $result =  $this->admin->add_admin_role_group($data_group);
          }


			if($result_id){
				$this->session->set_flashdata('success', 'Admin has been added successfully!');
				redirect(base_url('app/admin'));
			}else {
	        	$this->session->set_flashdata('warning', 'User adding fail!');
	      	}
      if(isset($result)){
        $this->session->set_flashdata('success', 'Admin Role has been added Successfully successfully!');
      }

			}
			}
			else
			{
				 $data['jsAssets'] = ['assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/admin/add_form_validate.js'];
				 $data['title'] = 'Internal User Registration';
    		 loadViews('admin_new/add', $data);
			}
	}

	public function edit($id=""){
		$data['admin_roles'] = $this->admin->get_admin_roles();


		if($this->input->post('submit')){
			// pre($_POST); die;
			$this->form_validation->set_rules('username', 'Username', 'trim|alpha_numeric|required');
			$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
			$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
			if($this->input->post('old_email')!=$this->input->post('email')){
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[ci_admin.email]');
			}
			if($this->input->post('old_mobile_no')!=$this->input->post('mobile_no')){
			$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required|is_unique[ci_admin.mobile_no]');
		  }
			$this->form_validation->set_rules('role', 'Role', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				$this->session->set_flashdata('errors', $data['errors']);
				redirect(base_url('app/admin/edit/'.$id),'refresh');
			}
			else{
				$data = array(
					'admin_role_id' => $this->input->post('role'),
					'username' => $this->input->post('username'),
					'firstname' => $this->input->post('firstname'),
					'lastname' => $this->input->post('lastname'),
					'email' => $this->input->post('email'),
					'mobile_no' => $this->input->post('mobile_no'),
					'is_active' => 1,
					'updated_at' => date('Y-m-d : h:m:s'),
				);

				$data = $this->security->xss_clean($data);
				$result_id = $this->admin->edit_admin($data, $id);


        if($this->input->post('master_admin_id') != NULL){
          $data_group = [
            'admin_role_id'              => $result_id,
            'master_admin_id'            => $this->input->post('master_admin_id'),
            'master_admin_group_role_id' => $this->input->post('master_admin_group_role_id'),
          ];
          $data_group = $this->security->xss_clean($data_group);
          $result =  $this->admin->edit_admin_role_group($data_group, $result_id);
        } else {

            $result =  $this->admin->delet_admin_role_group($result_id);
            if($result){
      					$this->session->set_flashdata('success', 'Admin has Role updated successfully!');
      					redirect(base_url('app/admin'));
      				}
        }

				if($result){
					$this->session->set_flashdata('success', 'Admin has been updated successfully!');
					redirect(base_url('app/admin'));
				}

			}
		}
		elseif($id==""){
			redirect('app/admin');
		}
		else{
			$data['title'] = 'Internal User Edit Details';
			$data['jsAssets'] = ['assets/dist/js/admin/admin.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/admin/edit_form_validate.js'];
			$data['admin'] = $this->admin->get_admin_by_id($id);
			$data['admin_group'] = $this->admin->get_admin_by_group_id($id);
      if(!empty($data['admin_group'])){
        $data['master_details'] =   $this->admin->get_admin_by_id($data['admin_group']['master_admin_id']);
        $data['master_users'] = $this->admin->get_user_by_role(($data['admin_group']['master_admin_group_role_id']));
      }
			loadViews('admin_new/edit', $data);
		}
	}
	
	 public function getUserListByRole($id=0){

    $role_id   = $this->input->post('roleID');
    $role_name = $this->input->post('roleName');

    if($role_id == 4){
        $sub_users = $this->admin->get_user_by_role(3);
        $role_id = 3;
    } elseif ($role_id == 6) {
        $sub_users = $this->admin->get_user_by_role(5);
        $role_id = 5;
    } elseif ($role_id == 7) {
        $sub_users = $this->admin->get_user_by_role(6);
        $role_id = 6;
    } else {
        $sub_users = NULL;
    }

    if($sub_users != NULL){
      $html = '<select name="master_admin_id" class="form-control">';
      // $html .=  '<option value="">- Select - </option>';
        foreach ($sub_users as $usr) {
          $html .=  '<option value="'.$usr['admin_id'].'">'.$usr['firstname']." ".$usr['lastname'].'</option>';
        }
      $html .=  '</select>';
      $html .=  '<input type="hidden" class="form-control" id="role_id" name="master_admin_group_role_id" value="'.$role_id.'">';
      } else{
          $html = null;
      }

    echo json_encode($html);
  }

   public function change_status()
	 {
			 $this->admin->change_status();
	 }


}

?>
