<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainclass extends CI_Controller {

	public function class(){
		$this->load->model('Classes');
		$data['getClass'] = $this->Classes->class_list();
		
		$this->template->load('admin/base_template', 'class',$data);
	}
	public function classform($editId=FALSE)
	{
		$this->load->model('Classes');
			$data['editgetclass'] = $this->Classes->getedit_class($editId);
			//print_r($data);die();
			$this->template->load('admin/base_template', 'classform',$data);
	}
	public function classinsert()
	{
		
		$this->load->model('Classes');
		if($this->input->post('save')) {

			//echo 'asd';die;
			$this->load->library('form_validation');

			$this->form_validation->set_rules('classname', 'Class Name', 'required');
 
			if($this->form_validation->run()!=FALSE){
				$save['class_name'] = $this->input->post('classname');
				$save['class_stream_allow'] = ($this->input->post('classcheck')) ? 1 : 0; 
				//print_r($save);die();
				$data['class'] = $this->Classes->add_class($save);
				$this->session->set_flashdata('success', 'Class Inserted Successfully !');
				redirect(base_url('mainclass/class'));
			}
			else
			{
				$data['allerrors'] = $this->form_validation->error_array();
				//print_r($data['allerrors']);die();
				$this->template->load('admin/base_template', 'classform', $data);
			}
		}
		
	}
	public function classupdate($Id)
	{
		$this->load->model('Classes');
		if($this->input->post('update')){
			$update['class_name'] = $this->input->post('classname');
			$update['class_stream_allow'] = ($this->input->post('classcheck')) ? 1 : 0;
			//print_r($update);die();
			$data['classupdate'] = $this->Classes->editclass($Id,$update);
			$this->session->set_flashdata('success', 'Class Updated Successfully !');
			redirect(base_url('mainclass/class'));
		}
	}
}
