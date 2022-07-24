<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends MY_Controller
{
    function __construct(){
        parent::__construct();
        auth_check(); // check login auth
		$this->load->model('app/Agents_model', 'agents');
		$this->load->model('app/Common_model', 'common');
		$this->load->model('app/Locations_model', 'locations_model');
    }

	//-----------------------------------------------------
	function index(){

		$data['title'] = 'Agents Manage';
	 	$data['cssAssets'] = ['assets/plugins/datatables/css/jquery.dataTables.min.css','assets/plugins/toastr/toastr.min.css','assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'];
	    $data['jsAssets'] = ['assets/plugins/datatables/jquery.dataTables.min.js','assets/dist/js/agents/list.js','assets/plugins/toastr/toastr.min.js','assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'];
       loadViews('agents/list', $data);
	}

	public function internalList(){
			 $postData = $this->input->post();
			 $data = $this->agents->internalList($postData);
			 echo json_encode($data);
	}

	public function add(){
		if($this->input->post('submit')){
    			$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
    			$this->form_validation->set_rules('contact', 'Contact', 'trim|required|is_unique[users.contact]');
    			if ($this->form_validation->run() == FALSE) {
    				$data = array(
    					'errors' => validation_errors()
    				);
    				$this->session->set_flashdata('errors', $data['errors']);
    				redirect(base_url('app/agents/add'),'refresh');
    			}	
				   
			    $fd=$_FILES;
                $path = "uploads/profile_photos/";
                $file_name = "profle_img";
                $dname = explode(".", $fd['profle_img']['name']);
                $ext = end($dname);
                $new_name = "profle_img". time().".".$ext;
                $doc = docupload($file_name, $path, $new_name);
				$data = array(
					    'profle_img' => $new_name,
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'contact' => $this->input->post('contact'),
						'fb_link' => $this->input->post('fb_link'),
						'twt_link' => $this->input->post('twt_link'),
						'insta_link' => $this->input->post('insta_link'),
						'lnk_link' => $this->input->post('lnk_link'),
						'created_by' => "superadmin",
						'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'status' => "inactive",
						'register_datetime' => date('Y-m-d : h:m:s')
					);
                  $result_id = $this->agents->add_leaders($data);
					if($result_id){
							$this->session->set_flashdata('success', $this->input->post('firstname').' Agents registration has been done successfully!');
							redirect(base_url('app/agents'));
					} else {
			          $this->session->set_flashdata('error', 'Something went wrong please try again later');
							redirect(base_url('app/agents/add'));
			        }	
			}
			else
			{  
				 $data['cssAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'];
				 $data['jsAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/agents/add_form_validate.js'];
				 $data['title'] = 'Agents Registration';
    		 loadViews('agents/add', $data);
			}
	}

	public function edit($id=""){

		if($this->input->post('submit')){
			$email = false;
			$contact = false;
			if($this->input->post('old_email')!=$this->input->post('email')){
				$email = true;
			 $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		    }
		    if($this->input->post('old_contact')!=$this->input->post('contact')){
		    	$contact = true;
			  $this->form_validation->set_rules('contact', 'Contact', 'required|is_unique[users.contact]');
			}
			if($email || $contact){
				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('errors', $data['errors']);
					redirect(base_url('app/agents/edit/'.$id),'refresh');
				}
			}   
			    $fd=$_FILES;
			    if($fd['profle_img']['size']!=0){
    			    $old_path = DOCUMENT_ROOT_PATH.'uploads/profile_photos/'.$this->input->post('old_profle_img'); 
                    unlink($old_path);
                    $path = "uploads/profile_photos/";
                    $file_name = "profle_img";
                    $dname = explode(".", $fd['profle_img']['name']);
                    $ext = end($dname);
                    $new_name = "profle_img_". time().".".$ext;
                    $doc = docupload($file_name, $path, $new_name);
			    } else {
			        $new_name = $this->input->post('old_profle_img');
			    }
				$data = array(
						'profle_img' => $new_name,
						'name' => $this->input->post('name'),
						'email' => $this->input->post('email'),
						'contact' => $this->input->post('contact'),
						'fb_link' => $this->input->post('fb_link'),
						'twt_link' => $this->input->post('twt_link'),
						'insta_link' => $this->input->post('insta_link'),
						'lnk_link' => $this->input->post('lnk_link'),
						'status' => $this->input->post('status'),
						'last_update_datetime' => date('Y-m-d : h:m:s')
					);

				if($this->input->post('password')!=""){
					$data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
				} 
				$result_id = $this->agents->edit_tl($data, $id);

				if($result_id){
					$this->session->set_flashdata('success', 'Agents has been updated successfully!');
					redirect(base_url('app/agents'));
				} else {
					$this->session->set_flashdata('errors', 'Agents  has been updated successfully!');
					redirect(base_url('app/agents/edit/'.$id));
				}
		}
		
		else{
			$data['title'] = 'Agents Details Edit';
			$data['cssAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css'];
			$data['jsAssets'] = ['assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/agents/edit_form_validate.js'];
			$data['tl_details'] = $this->agents->get_tl_by_id($id);
			loadViews('agents/edit', $data);
		}
	}

   public function view_details($id){
   	 $data['user_details'] = $this->agents->get_tl_by_id($id);
   	 $data['title'] = 'View details';
   	 loadViews('agents/view_details', $data);
   }	
	
   public function soft_delete($id)
	{
			 $this->agents->soft_delete($id);
			 $this->session->set_flashdata('success', 'User deleted successfully');
      		 redirect(base_url('app/agents'));
	}
   
   public function change_status()
   {
			$this->agents->change_status();
   }
   
   public function post_property($agent_id){
       if($this->input->post()){
           $fd=$_FILES;
           $path = "uploads/property_gallery/".$agent_id."/";
           $file_name = "cover_photo";
           if(!file_exists($path)){mkdir($path, 0777, true);}
           $dname = explode(".", $fd['cover_photo']['name']);
           $ext = end($dname);
           $new_name = "cover_photo". time().".".$ext;
           $doc = docupload($file_name, $path, $new_name);
           $data = array(
                    'user_id' => $agent_id,
					'state_id' => 1,
					'district_id' => $this->input->post('district'),
					'taluka_id' => $this->input->post('taluka'),
					'pincode' => $this->input->post('pincode'),
					'ownership_type' => $this->input->post('ownership_type'),
					'description' => $this->input->post('description'),
					'property_type' => $this->input->post('property_type'),
					'plot_length' => $this->input->post('plot_length'),
					'plot_breadth' => $this->input->post('plot_breadth'),
					'cover_photo' => $new_name,
					'price_details' => $this->input->post('price_details'),
					'sq_price' => $this->input->post('sq_price'),
					'price_negotiable' => $this->input->post('price_negotiable'),
					'added_by' => 'superadmin',
					'added_datetime' => date('Y-m-d : h:m:s')
				);
		 $resp =$this->agents->post_property($data);
		 if($resp){
			$this->session->set_flashdata('success', 'Property has been added successfully!');
			redirect(base_url('app/agents/edit_post_property/'.$agent_id));
		 } else {
			$this->session->set_flashdata('errors', 'Something went wrong please try again in sometimes later!');
			redirect(base_url('app/agents/post_property/'.$agent_id));
		 }
       } else {
           $table = "properties";
           $field = "property_type";
           $field2 = "ownership_type";
    	   $data['property_list'] = $this->common->get_enum_values($table,$field);
    	   $data['ownership_type'] = $this->common->get_enum_values($table,$field2);
           $data['user_details'] = $this->agents->get_tl_by_id($agent_id);
           $data['dist_list'] = $this->locations_model->get_all_district();
           $data['state_list'] = $this->agents->get_state();
       	   $data['title'] = 'Post Property';
       	   $data['jsAssets'] = ['assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/agents/edit_post_property.js'];
       	   loadViews('agents/post_property', $data);
       }
   }
   public function edit_post_property($property_id){
       if($this->input->post()){
           $agent_id = $this->input->post('user_id');
           $fd=$_FILES;
           if($fd['cover_photo']['size']!=0){
               $path = "uploads/property_gallery/".$agent_id."/";
               $old_path = DOCUMENT_ROOT_PATH.'uploads/property_gallery/'.$agent_id."/".$this->input->post('old_cover_photo'); 
               unlink($old_path);
               $file_name = "cover_photo";
               if(!file_exists($path)){mkdir($path, 0777, true);}
               $dname = explode(".", $fd['cover_photo']['name']);
               $ext = end($dname);
               $cover_photo_name = "cover_photo".time().".".$ext;
               $doc = docupload($file_name, $path, $cover_photo_name);
           } else {
               $cover_photo_name = $this->input->post('old_cover_photo');
           }
           $data = array(
					'district_id' => $this->input->post('district'),
					'taluka_id' => $this->input->post('taluka'),
					'pincode' => $this->input->post('pincode'),
					'ownership_type' => $this->input->post('ownership_type'),
					'description' => $this->input->post('description'),
					'property_type' => $this->input->post('property_type'),
					'plot_length' => $this->input->post('plot_length'),
					'plot_breadth' => $this->input->post('plot_breadth'),
					'cover_photo' => $cover_photo_name,
					'price_details' => $this->input->post('price_details'),
					'status' => $this->input->post('status'),
					'sq_price' => $this->input->post('sq_price'),
					'price_negotiable' => $this->input->post('price_negotiable'),
					'added_by' => 'superadmin',
					'added_datetime' => date('Y-m-d : h:m:s')
				);
		 $resp =$this->agents->edit_post_property($data,$property_id);
		 if($resp){
			$this->session->set_flashdata('success', 'Property details has been updated successfully!');
			redirect(base_url('app/agents/edit_post_property/'.$property_id));
		 } else {
			$this->session->set_flashdata('errors', 'Something went wrong please try again in sometimes later!');
			redirect(base_url('app/agents/edit_post_property/'.$property_id));
		 }
       } else {
           $table = "properties";
           $field = "property_type";
           $field2 = "ownership_type";
    	   $data['property_list'] = $this->common->get_enum_values($table,$field);
    	   $data['ownership_type'] = $this->common->get_enum_values($table,$field2);
           $data['p_details'] = $this->agents->get_properties($property_id);
           $data['dist_list'] = $this->locations_model->get_all_district();
           $data['user_details'] = $this->agents->get_tl_by_id($data['p_details']['user_id']);
           $data['taluka_list'] = $this->agents->get_taluka($data['p_details']['district_id']);
           $data['state_list'] = $this->agents->get_state();
       	   $data['title'] = 'Edit Posted Property';
       	   $data['cssAssets'] = ['assets/plugins/toastr/toastr.min.css'];
       	   $data['jsAssets'] = ['assets/plugins/toastr/toastr.min.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/agents/edit_post_property.js'];
       	   loadViews('agents/edit_post_property', $data);
       }
   }
   
   public function post_property_image($property_id){
       if($this->input->post()){
           $fd=$_FILES;
           $path = "uploads/property_gallery/".$this->input->post('user_id')."/";
            if($this->input->post('old_photo')!=""){
                $old_path = DOCUMENT_ROOT_PATH.'uploads/property_gallery/'.$this->input->post('user_id')."/".$this->input->post('old_photo'); 
                unlink($old_path);
           }
           $file_name = "property_img";
           $dname = explode(".", $fd['property_img']['name']);
           $ext = end($dname);
           $new_name = $this->input->post('property_name').'_'.time().".".$ext;
           $doc = docupload($file_name, $path, $new_name);
           
           $data = array(
                    'property_id' => $property_id,
					'number' => $this->input->post('property_name'),
					'file_name' => $new_name,
					'uploaded_by' => 'superadmin',
					'upload_datetime' => date('Y-m-d : h:m:s')
				);
				
				  $this->agents->delete_post_property_image($property_id,$this->input->post('property_name'));
		  $resp = $this->agents->post_property_image($data);
		  
		   if($resp){
		     	$this->session->set_flashdata('success', 'Property photo has been uploaded successfully!');
			   redirect(base_url('app/agents/post_property_image/'.$property_id));
    		} else {
    			$this->session->set_flashdata('errors', 'Something went wrong please try again in sometimes later!');
    			redirect(base_url('app/agents/post_property_image/'.$property_id));
    		}
       } else {
           $table = "properties_gallery";
           $field = "number";
           $data['title'] = 'Post Property Image';
           $data['property_list_no'] = $this->common->get_enum_values($table,$field);
           $data['p_details'] = $this->agents->get_properties($property_id);
           $data['user_details'] = $this->agents->get_tl_by_id($data['p_details']['user_id']);
       	   $data['cssAssets'] = ['assets/plugins/toastr/toastr.min.css'];
       	   $data['jsAssets'] = ['assets/plugins/toastr/toastr.min.js','assets/plugins/jquery-validation/jquery.validate.min.js','assets/plugins/jquery-validation/additional-methods.min.js','assets/dist/js/agents/post_property_image.js'];
       	   loadViews('agents/post_property_image', $data);
       }
   }
   
   public function get_taluka(){
		$district_id = $this->input->post('district_id');
		$res = $this->agents->get_taluka($district_id);
		$html = '<option value="" selected disabled hidden>Choose here</option>';
        foreach($res as $states_val) {
          $html.='<option value="'.$states_val['id'].'">'.$states_val['name'].'</option>';
        } 
        echo $html;
	}

}

?>
