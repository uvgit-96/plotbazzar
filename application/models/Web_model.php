<?php
class Web_model extends CI_Model{
   
   	public function __construct()
	{
		parent::__construct();
	}

	
	function get_agents_list()
    {
		$this->db->from('users');
		$this->db->where('status', 'active');
		$this->db->order_by("id", "asc");
		$query = $this->db->get();
		return $query->result_array();
    }

    function get_properties_list()
    {   
    	$this->db->select('p.*,s.name as state_name,cd.name as district_name,t.name as taluka_name');
		$this->db->from('properties as p');
		$this->db->join('users as u', 'p.user_id=u.id');
		$this->db->join('states as s', 'p.state_id=s.id');
		$this->db->join('city_district as cd', 'p.district_id=cd.id');
		$this->db->join('taluka as t', 'p.taluka_id=t.id');
		$this->db->where('p.status', 'active');
		$this->db->order_by("p.id", "asc");
		$query=$this->db->get();
		return $query->result_array();
    }
    
	

}
?>