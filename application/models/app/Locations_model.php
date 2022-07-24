<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Locations_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

	public function districtList($postData=null){
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
		      $searchbyValue = $postData['searchbyValue'];

		      ## Search
		      $search_arr = array();
		      $searchQuery = "";
	
		      if($searchbyValue != ''){
		          $search_arr[] = "cd.name like '%".$searchbyValue."%'";
		      }

		      if(count($search_arr) > 0){
		          $searchQuery = implode(" and ",$search_arr);
		      }

		      ## Total number of records without filtering
		      $this->db->select('count(*) as allcount');
		      $records = $this->db->get('city_district as ca')->result();
		      $totalRecords = $records[0]->allcount;

		      ## Total number of record with filtering
		      $this->db->select('count(cd.id) as allcount');
			  $this->db->from('city_district as cd');
		      $this->db->join('states as st', 'cd.state_id = st.id');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $records = $this->db->get()->result();
		      $totalRecordwithFilter = $records[0]->allcount;

			 // select required fields
	         $SQL = 'cd.id as id,
					 st.name as state,
					 cd.name as district';
		      ## Fetch records
		      $this->db->select($SQL);
		      $this->db->from('city_district as cd');
		      $this->db->join('states as st', 'cd.state_id = st.id');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $this->db->order_by('id', 'desc');
		      $this->db->limit($rowperpage, $start);
		      $records = $this->db->get()->result();
		      $data = array();
              
              $sr = 1;     
		      foreach($records as $record ){
		          $data[] = array(
		                      "sr" => $sr,
					          "id"=>$record->id,
				              "state"=>$record->state,
				              "district"	=>$record->district
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
	
	public function talukaList($postData=null){
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
		      $searchbyValue = $postData['searchbyValue'];
              $districtValue = $postData['districtValue'];
		      ## Search
		      $search_arr = array();
		      $searchQuery = "";
		      $district = "";
	
		      if($searchbyValue != ''){
		          $search_arr[] = "tl.name like '%".$searchbyValue."%'";
		      }
		      
		       if($districtValue != ''){
		          $search_arr[] = "cd.id = ".$districtValue."";
		      }
		      
		      if(count($search_arr) > 0){
		          $searchQuery = implode(" and ",$search_arr);
		      }

		      ## Total number of records without filtering
		      $this->db->select('count(*) as allcount');
		      $records = $this->db->get('taluka')->result();
		      $totalRecords = $records[0]->allcount;

		      ## Total number of record with filtering
		      $this->db->select('count(tl.id) as allcount');
			  $this->db->from('taluka as tl');
		      $this->db->join('city_district as cd', 'tl.district_id = cd.id');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $records = $this->db->get()->result();
		      $totalRecordwithFilter = $records[0]->allcount;

			 // select required fields
	         $SQL = 'tl.id as t_id,
					 tl.name as t_name,
					 cd.id as d_id,
					 cd.name as d_name';
		      ## Fetch records
		      $this->db->select($SQL);
		      $this->db->from('taluka as tl');
		      $this->db->join('city_district as cd', 'tl.district_id = cd.id');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $this->db->order_by('t_id', 'desc');
		      $this->db->limit($rowperpage, $start);
		      $records = $this->db->get()->result();
		      $data = array();
              
              $sr = 1;     
		      foreach($records as $record ){
		          $data[] = array(
		                      "sr" => $sr,
					          "t_id"=>$record->t_id,
				              "t_name"=>$record->t_name,
				              "d_id"	=>$record->d_id,
		                      "d_name"	=>$record->d_name 
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
	
	public function add_district($data){
    	$this->db->trans_start(); # Starting Transaction
		$this->db->insert('city_district',$data);
		$last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return 0;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return $last_inserted_id;
	    }
	}
	
	public function add_taluka($data){
    	$this->db->trans_start(); # Starting Transaction
		$this->db->insert('taluka',$data);
		$last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete(); # Completing transaction
	    if($this->db->trans_status() === FALSE)
	    {
		    $this->db->trans_rollback();
		    return 0;
	    }
	    else
	    { 
	       $this->db->trans_commit();
		   return $last_inserted_id;
	    }
	}
	
	public function edit_district($data,$id){
    	$this->db->trans_start(); # Starting Transaction
    	$this->db->where('id',$id)->update('city_district', $data);
	    $this->db->trans_complete(); # Completing transaction
		if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		    return FALSE;
		} 
		else{
		    $this->db->trans_commit();
		    return TRUE;
		}
	}
	
	public function edit_taluka($data,$id){
    	$this->db->trans_start(); # Starting Transaction
    	$this->db->where('id',$id)->update('taluka', $data);
	    $this->db->trans_complete(); # Completing transaction
		if ($this->db->trans_status() === FALSE) {
		    $this->db->trans_rollback();
		    return FALSE;
		} 
		else{
		    $this->db->trans_commit();
		    return TRUE;
		}
	}
	
	public function get_district_details($id){
    	$this->db->select('id,name');
		$this->db->from('city_district');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_taluka_details($id){
    	$this->db->select('*');
		$this->db->from('taluka');
		$this->db->where('id', $id);
		$query = $this->db->get();
        return $query->row_array();
    }
    
    public function get_all_district(){
    	$this->db->select('id,name');
		$this->db->from('city_district');
		$query = $this->db->get();
        return $query->result_array();
    }
	
}

?>
