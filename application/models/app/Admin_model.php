<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

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
		    
		      $searchRole = $postData['searchRoles'];
		      $searchStatus = $postData['searchStatus'];
		      $searchbyValue = $postData['searchbyValue'];

		      ## Search
		      $search_arr = array();
		      $searchQuery = "";
	
		      if($searchRole != ''){
		          $search_arr[] = " car.admin_role_id ='".$searchRole."' ";
		      }

		      if($searchStatus != ''){
		          $search_arr[] = " ca.user_status ='".$searchStatus."' ";
		      }

		      if($searchbyValue != ''){
		          $search_arr[] = " (ca.name like '%".$searchbyValue."%' or
		                  ca.email like '%".$searchbyValue."%' or
		                  ca.mobile_no  like '%".$searchbyValue."%' or
		                  ca.username like '%".$searchbyValue."%' or
		                  ca.firstname like '%".$searchbyValue."%' or
		                  ca.lastname = '".$searchbyValue."' ) ";
		      }

		      if(count($search_arr) > 0){
		          $searchQuery = implode(" and ",$search_arr);
		      }

		      ## Total number of records without filtering
		      $this->db->select('count(*) as allcount');
		      $records = $this->db->get('ci_admin as ca')->result();
		      $totalRecords = $records[0]->allcount;

		      ## Total number of record with filtering
		      $this->db->select('count(ca.admin_id) as allcount');
			  $this->db->from('ci_admin as ca');
		      $this->db->join('ci_admin_roles as car', 'ca.admin_role_id = car.admin_role_id', 'LEFT');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $records = $this->db->get()->result();
		      $totalRecordwithFilter = $records[0]->allcount;

			 // select required fields
			 $SQL = 'ca.admin_id as admin_id,
							 ca.username as username,
							 ca.firstname as firstname,
							 ca.lastname as lastname,
							 ca.name as name,
							 ca.email as email,
							 ca.mobile_no as mobile_no,
							 ca.user_status as status,
							 car.admin_role_id as admin_role_id,
							 car.admin_role_title as admin_role_title';
		      ## Fetch records
		      $this->db->select($SQL);
		      $this->db->from('ci_admin as ca');
		      $this->db->join('ci_admin_roles as car', 'ca.admin_role_id = car.admin_role_id', 'LEFT');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      //$this->db->order_by($columnName, $columnSortOrder);
		      $this->db->order_by('ca.admin_id', 'desc');
		      $this->db->limit($rowperpage, $start);
		      $records = $this->db->get()->result();
		      $data = array();

		      foreach($records as $record ){

		          $data[] = array(
					          "admin_id"=>$record->admin_id,
				              "username"=>$record->username,
				              "firstname"=>$record->firstname,
				              "lastname"=>$record->lastname,
				              "name"=>$record->name,
				              "email"	=>$record->email,
				              "mobile_no"	=>$record->mobile_no,
				              "admin_role_id"=>$record->admin_role_id,
				              "admin_role_title"=>$record->admin_role_title,
				              "status"=>$record->status,
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

	public function get_admin_roles()
	{
		$this->db->from('ci_admin_roles');
		$this->db->where('admin_role_status',1);
		$query=$this->db->get();
		return $query->result_array();
	}  

	public function get_user_by_role($id){
	$query = $this->db->select('admin_id, admin_role_id, username, firstname, lastname')
	 									->get_where('ci_admin', array('admin_role_id' => $id));
	return $result = $query->result_array();
	}

	public function get_admin_by_id($id)
	{
		$this->db->from('ci_admin');
		$this->db->join('ci_admin_roles','ci_admin_roles.admin_role_id=ci_admin.admin_role_id');
		$this->db->where('admin_id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	public function get_admin_by_group_id($id)
	{
		$this->db->select('id, admin_role_id, master_admin_id, master_admin_group_role_id')
									->from('ci_admin_roles_group');
		// $this->db->join('ci_admin_roles','ci_admin_roles.admin_role_id=ci_admin.admin_role_id');
		$this->db->where('admin_role_id',$id);
		$query=$this->db->get();
		return $query->row_array();
	}

	public function add_admin($data){
		$this->db->insert('ci_admin', $data);
		$insert_id = $this->db->insert_id();
	   return  $insert_id;
		// return true;
	}

		// Edit Admin Record
	public function edit_admin($data, $id){
		$this->db->where('admin_id', $id);
		$this->db->update('ci_admin', $data);
		return $id;
	}

		// Edit Admin Record
	public function delet_admin_role_group( $id){
		$query =	$this->db->delete('ci_admin_roles_group', array('admin_role_id' => $id));
		return $query;
	}

	public function add_admin_role_group($data){
		$this->db->insert('ci_admin_roles_group', $data);
		return true;
	}

	public function edit_admin_role_group($data, $id){
		// master_admin_id  " User Group Role ID"
			$query = $this->db->get_where('ci_admin_roles_group', array('admin_role_id' => $id ));
			if($query->num_rows() > 0){
				$this->db->where('admin_role_id', $id);
				$this->db->update('ci_admin_roles_group', $data);
				return true;
			}
			else{
				$this->db->insert('ci_admin_roles_group', $data);
				return true;
			}
   }

   //---------------------------------------------------
	// Change Client status
	//-----------------------------------------------------
	public function change_status()
	{ 
		$this->db->set('user_status', $this->input->post('status'));
		$this->db->where('admin_id', $this->input->post('id'));
		$this->db->update('ci_admin');
	}
}

?>
