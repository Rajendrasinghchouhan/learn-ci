<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Model {
	function getallclass()
	{
		return $this->db->get('class')->result();
	}
	function add_class($addClass)
	{
		$this->db->insert('class',$addClass);
	}
	function class_list()
	{
		return $this->db->get('class')->result();
	}
	function getedit_class($Id)
	{
		return $this->db->where('class_id',$Id)
			   ->get('class')
			   ->row();
	}
	function editclass($Id,$update)
	{
		 $this->db->where('class_id',$Id)
		->update('class',$update);
	}
	function getmainClass()
	{
		return $this->db->where('class_stream_allow IS TRUE') 
		->get('class')->result();
	}
	function allClass()
	{
		return $this->db->get('class')->num_rows();
	}
}