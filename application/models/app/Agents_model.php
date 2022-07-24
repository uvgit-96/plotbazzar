<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agents_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function verify_tl_login($username,$password){
    	$this->db->from('users');
		$this->db->where('email',$username);

		$query = $this->db->get();
		if ($query->num_rows() == 0){
			return false;
		}
		else{
			$result = $query->row_array();
		    $validPassword = password_verify($password, $result['password']);
		    if($validPassword){
		        return $result = $query->row_array();
		    }
		}
    } 

	public function internalList($postData=null){

		      $response = array();

		      ## Read value
		      $draw = $postData['draw'];
		      $start = $postData['start'];
		      $rowperpage = $postData['length']; // Rows display per page
		      $columnIndex = $postData['order'][0]['column']; // Column index
		      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
		      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
		      $searchValue = $postData['search']['value']; // Search value
		      // Custom search filter
		    
		      $searchStatus = $postData['searchStatus'];
		      $searchbyValue = $postData['searchbyValue'];

		      ## Search
		      $search_arr = array();
		      $searchQuery = "";
	
		      
		      if($searchStatus != ''){
		          $search_arr[] = "status ='".$searchStatus."' ";
		      }

		      if($searchbyValue != ''){
		          $search_arr[] = " (
		                  mame like '%".$searchbyValue."%' or
		                  email like '%".$searchbyValue."%' or
		                  contact like '%".$searchbyValue."%' ) ";
		      }

		      $search_arr[] = "status !='delete'";

		      if(count($search_arr) > 0){
		          $searchQuery = implode(" and ",$search_arr);
		      }

		      ## Total number of records without filtering
		      $this->db->select('count(*) as allcount');
		      $records = $this->db->get('ci_admin as ca')->result();
		      $totalRecords = $records[0]->allcount;

		      ## Total number of record with filtering
		      $this->db->select('count(id) as allcount');
			  $this->db->from('users');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $records = $this->db->get()->result();
		      $totalRecordwithFilter = $records[0]->allcount;

			 // select required fields
	         $SQL = 'id as id,
					 name as name,
					 email as email,
					 contact as contact,
					 profle_img as profle_img,
					 status as status';
		      ## Fetch records
		      $this->db->select($SQL);
		      $this->db->from('users');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      //$this->db->order_by($columnName, $columnSortOrder);
		      $this->db->order_by('id', 'desc');
		      $this->db->limit($rowperpage, $start);
		      $records = $this->db->get()->result();
		      $data = array();
              
              $sr = 1;     
		      foreach($records as $record ){
		          $profile_img_link = base_url().'uploads/profile_photos/'.$record->profle_img;
		          $data[] = array(
		                      "sr" => $sr,
					          "id"=>$record->id,
				              "name"=>$record->name,
				              "email"	=>$record->email,
				              "contact"=>$record->contact,
				              "profle_img"=>'<a href="'.$profile_img_link.'" target="_blank"><img style="display: flex;margin: auto;" src="'.$profile_img_link.'" id="frame" width="100" height="100"></a>',
				              "status"=>$record->status
		          );
		      $sr++;    
		      }

		      ## Response
		      $response = array(
		          "draw" => intval($draw),
		          "iTotalRecords" => $totalRecords,
		          "iTotalDisplayRecords" => $totalRecordwithFilter,
		          "aaData" => $data
		      );
		      return $response;
		  }


	public function get_tl_by_id($id)
	{
		$this->db->from('users');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}



	public function add_leaders($data){
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well 
		$this->db->insert('users', $data);
	    $last_inserted_id = $this->db->insert_id();
		$log_data = $data;
		$log_data['user_id']=$last_inserted_id;
		$log_data['action']='registration is done';
		$this->db->insert('users_log',$log_data);
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return TRUE;
	    }
	}

	public function edit_tl($data, $id){
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		$log_data = $data;
		$log_data['user_id']=$id;
		$log_data['action']='details is edited by superadmin';
		if(array_key_exists('password',$data)){
			$log_data['password'] = $data['password'];
		}
		$this->db->insert('users_log',$log_data);
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return TRUE;
	    }
	}

	

	public function change_status()
	{   
	    $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well
		$this->db->set('status', $this->input->post('status'));
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('users');
		$log_data = array(
			'user_id' => $this->input->post('id'),
			'status' => $this->input->post('status'),
			'created_edited_by' => "superadmin",
			'event_datetime' => date('Y-m-d : h:m:s'),
			'action' => 'only status is changed'
		);
		$this->db->insert('users_log',$log_data);
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return TRUE;
	    }
	}

	public function soft_delete($id)
	{   
	    $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well
		$this->db->set('status', 'delete');
		$this->db->where('id', $id);
		$this->db->update('users');
		$log_data = array(
			'user_id' => $id,
			'status' => 'delete',
			'register_datetime' => "superadmin",
			'last_update_datetime' => date('Y-m-d : h:m:s'),
			'action' => 'data is deleted'
		);
		$this->db->insert('users_log',$log_data);
		$this->db->trans_complete(); # Completing transaction
		if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return TRUE;
	    }
	}
	
	public function get_state(){
	    $this->db->select('id,name');
		$this->db->from('states');
		$query = $this->db->get();
        return $query->result_array();
	}
	
	public function get_taluka($district_id){
	    $this->db->select('id,name');
		$this->db->from('taluka');
		$this->db->where('district_id', $district_id);
		$query = $this->db->get();
        return $query->result_array();
	}
	
	
	public function post_property($data)
	{
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well 
		$this->db->insert('properties', $data);
	    $last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return $last_inserted_id;
	    }
	}
    
    public function get_properties($id)
	{
		$this->db->from('properties');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}
	
	public function get_properties_image_details($property_id,$number)
	{   
	    $this->db->select('file_name');
		$this->db->from('properties_gallery');
		$this->db->where('property_id',$property_id);
		$this->db->where('number',$number);
		$query=$this->db->get();
		return $query->row_array();
	}
	
	public function edit_post_property($data,$id)
	{   
	    $this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well
        $this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('properties');
		$this->db->trans_complete(); # Completing transaction
		if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return TRUE;
	    }
	}
	
	public function post_property_image($data)
	{
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well 
		$this->db->insert('properties_gallery', $data);
	    $last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return $last_inserted_id;
	    }
	}
    
    public function delete_post_property_image($property_id,$number)
	{
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well 
		$this->db->delete('properties_gallery', array('property_id' => $property_id,'number'=>$number)); 
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return FALSE;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return TRUE;
	    }
	}
	
}

?>
