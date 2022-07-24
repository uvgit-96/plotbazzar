<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function get_max_user_id()
    {   
        $this->db->select_max('id');
        $this->db->from('users');
        $query=$this->db->get();
        return $query->row_array();
    }
    
     public function get_enum_values($table,$field)
	{
	    $type = $this->db->query( "SHOW COLUMNS FROM {$table} WHERE Field = '{$field}'" )->row( 0 )->Type;
	    preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
	    $enum = explode("','", $matches[1]);
	    return $enum;
	}

}  