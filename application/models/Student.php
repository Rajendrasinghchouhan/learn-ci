<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model {
	//student add/get/update/delete START

	
	function add_student($data) 
	{
		$this->db->insert('students', $data);
	}
	function student_list()
	{
		return $this->db->join('class','students.class=class.class_id','left')
		->join('stream_class','stream_class.stream_id=students.student_stream_id','left')
		->get('students')->result();
	}
	function getstudent_edit($Id)
	{
		return $this->db->where('id',$Id)
		->get('students')->row();
	}
	function edit_student($update,$Id)
	{
		$this->db->where('id',$Id)
		->update('students',$update);
	}
	function updatestatus($id,$updatestatus)
	{
		$this->db->where('id',$id)
		->update('students',$updatestatus);
	}
	function studentDelete($del_id)
	{
		$this->db->where('id',$del_id)
		->delete('students');
	}
	function check_unique_student_email($Email,$Id)
	{
		return $this->db->where('email',$Email)
		->where('id !=',$Id)
		->get('students')->num_rows();
		//print_r($res);die();	
	}
	
	//student add/get/update/delete END 
	
	

	// Dash board work start {
	
	
	function getallstudent()
	{
		return $this->db->get('students')->num_rows();
	}
	function getallcategory()
	{
		return $this->db->get('categories')->num_rows();
	}
	function getallproduct()
	{
		return $this->db->get('products')->num_rows();
	}
	// board work end}
}