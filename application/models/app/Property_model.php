<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Property_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }
    
	public function propertyList($postData=null){
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
		    
		      $agent = $postData['agent'];
		      $state = $postData['state'];
		      $district = $postData['district'];
		      $taluka = $postData['taluka'];
		      $Status = $postData['Status'];

		      ## Search
		      $search_arr = array();
		      $searchQuery = "";
	
		      if($agent != ''){
		          $search_arr[] = "p.user_id ='".$agent."' ";
		      }
		      
		      if($state != ''){
		          $search_arr[] = "p.state_id ='".$state."' ";
		      }
		      
		      if($district != ''){
		          $search_arr[] = "p.district_id ='".$district."' ";
		      }
		      
		      if($taluka != ''){
		          $search_arr[] = "p.taluka_id ='".$taluka."' ";
		      }
		      
		      if($Status != ''){
		          $search_arr[] = "p.status ='".$Status."' ";
		      }

		      if(count($search_arr) > 0){
		          $searchQuery = implode(" and ",$search_arr);
		      }

		      ## Total number of records without filtering
		      $this->db->select('count(*) as allcount');
		      $records = $this->db->get('properties')->result();
		      $totalRecords = $records[0]->allcount;

		      ## Total number of record with filtering
		      $this->db->select('count(p.id) as allcount');
			  $this->db->from('properties as p');
			  $this->db->join('users as u', 'p.user_id=u.id');
			  $this->db->join('states as s', 'p.state_id=s.id');
			  $this->db->join('city_district as cd', 'p.district_id=cd.id');
			  $this->db->join('taluka as t', 'p.taluka_id=t.id');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $records = $this->db->get()->result();
		      $totalRecordwithFilter = $records[0]->allcount;

			 // select required fields
	         $SQL = 'u.name as name,
					 s.name as state,
					 cd.name as district,
					 t.name as taluka,
					 p.user_id as user_id,
					 p.id as property_id,
					 p.ownership_type as ownership_type,
					 p.property_type as property_type,
					 p.cover_photo as cover_photo,
					 p.status as status,
					 ';
		      ## Fetch records
		      $this->db->select($SQL);
		      $this->db->from('properties as p');
			  $this->db->join('users as u', 'p.user_id=u.id');
			  $this->db->join('states as s', 'p.state_id=s.id');
			  $this->db->join('city_district as cd', 'p.district_id=cd.id');
			  $this->db->join('taluka as t', 'p.taluka_id=t.id');
		      if($searchQuery != '')
		      $this->db->where($searchQuery);
		      $this->db->order_by('p.id', 'desc');
		      $this->db->limit($rowperpage, $start);
		      $records = $this->db->get()->result();
		      $data = array();
              
              $sr = 1;     
		      foreach($records as $record ){
		          $cover_image_path = '<img style="display: flex;margin: auto;" src="'.base_url().'uploads/property_gallery/'.$record->user_id.'/'.$record->cover_photo.'" id="frame" width="100" height="100">';
		          $data[] = array(
		                      "sr" => $sr,
					          "name"=>$record->name,
				              "state"=>$record->state,
				              "district"=>$record->district,
				              "taluka"=>$record->taluka,
				              "property_id"=>$record->property_id,
				              "ownership_type" => $record->ownership_type,
					          "property_type"=>$record->property_type,
				              "cover_photo"=>$cover_image_path,
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
	 
	 public function get_agent_list(){
	    $this->db->select('*');
		$this->db->from('users');
		$query = $this->db->get();
        return $query->result_array();
	 }
	 
	 



	
}

?>
