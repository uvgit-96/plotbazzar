<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tl_member_model extends CI_Model{
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
		          $search_arr[] = " (emp_code like '%".$searchbyValue."%' or
		                  firstname like '%".$searchbyValue."%' or
		                  lastname  like '%".$searchbyValue."%' or
		                  email like '%".$searchbyValue."%' or
		                  contact like '%".$searchbyValue."%' or
		                  aadhaar_no like '%".$searchbyValue."%' or
		                  pan_no like '%".$searchbyValue."%' or
		                  alt_email like '%".$searchbyValue."%' or
		                  alt_contact = '".$searchbyValue."' ) ";
		      }

		      //get only team leader is own member data
		       $tl_id = $this->session->userdata('tl_id');
		       $search_arr[] = "created_by ='".$tl_id."' ";
		      

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
					 emp_code as emp_code,
					 firstname as firstname,
					 lastname as lastname,
					 email as email,
					 contact as contact,
					 user_role user_role,
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

		      foreach($records as $record ){

		          $data[] = array(
					          "id"=>$record->id,
				              "emp_code"=>$record->emp_code,
				              "name"=>$record->firstname.' '.$record->lastname,
				              "email"	=>$record->email,
				              "contact"=>$record->contact,
				              "user_role"=>$record->user_role,
				              "status"=>$record->status
		          );
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
		$log_data = array(
			         'user_id' => $last_inserted_id,
					'emp_code' => $data['emp_code'],
					'firstname' => $data['firstname'],
					'lastname' => $data['lastname'],
					'email' => $data['email'],
					'alt_email' => $data['alt_email'],
					'contact' => $data['contact'],
					'alt_contact' => $data['alt_contact'],
					'gender' => $data['gender'],
					'date_of_birth' => $data['date_of_birth'],
					'aadhaar_no' => $data['aadhaar_no'],
					'pan_no' => $data['pan_no'],
					'address' => $data['address'],
					'pincode' => $data['pincode'],
					'user_role' => "TME(Tele Caller)",
					'created_edited_by' => $this->session->userdata('tl_id'),
					'password' =>  password_hash($this->input->post('password'), PASSWORD_BCRYPT),
					'status' => "inactive",
					'event_datetime' => date('Y-m-d : h:m:s'),
					'action' => 'registration is done'
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

	public function edit_tl($data, $id){
		$this->db->trans_start(); # Starting Transaction
        $this->db->trans_strict(FALSE); # See Note 01. If you wish can remove as well
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		$log_data = array(
		        'user_id' => $id,
				'firstname' => $data['firstname'],
				'lastname' => $data['lastname'],
				'email' => $data['email'],
				'alt_email' => $data['alt_email'],
				'contact' => $data['contact'],
				'alt_contact' => $data['alt_contact'],
				'gender' => $data['gender'],
				'date_of_birth' => $data['date_of_birth'],
				'aadhaar_no' => $data['aadhaar_no'],
				'pan_no' => $data['pan_no'],
				'address' => $data['address'],
				'pincode' => $data['pincode'],
				'user_role' => "Team Leader",
				'created_edited_by' => $this->session->userdata('tl_id'),
				'status' => $data['status'],
				'event_datetime' => date('Y-m-d : h:m:s'),
				'action' => 'details is edited by TL'
			);
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
			'created_edited_by' => $this->session->userdata('tl_id'),
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
			'created_edited_by' => $this->session->userdata('tl_id'),
			'event_datetime' => date('Y-m-d : h:m:s'),
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
}

?>
