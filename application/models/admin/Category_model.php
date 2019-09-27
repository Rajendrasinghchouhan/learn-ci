<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	function insert($data)
	{
		$this->db->insert('categories',$data);
	}
	function getCategory()
	{
		return $this->db->get('categories')->result();
	}
	function geteditdata($selecteid)
	{
		return $this->db->where('id',$selecteid)
		->get('categories')->row();
	}
	function update($Id,$data)
	{
		$this->db->set('title',$data['title'])
		->where('id',$Id)->update('categories');
	}
}