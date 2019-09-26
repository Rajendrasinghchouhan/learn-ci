<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Streams extends CI_Model {
	function getclassstream($save)
	{
		return $this->db->where('stream_class_id',$save)
		->get('stream_class')->result();
	}
	function addstream($streamadd)
	{
		$this->db->insert('stream_class',$streamadd);
	}
	function getstreamclass()
	{
		return $this->db->join('class','stream_class.stream_class_id=class.class_id','LEFT')
		->get('stream_class')->result();
	}
	function geteditstream($Id)
	{
		return $this->db->where('stream_id',$Id)
		->get('stream_class')
		->row();
	}
	function update_stream($Id,$update)
	{
		$this->db->where('stream_id',$Id)
		->update('stream_class',$update);
	}
	function getallstream()
	{
		return $this->db->get('stream_class')->num_rows();
	}
}