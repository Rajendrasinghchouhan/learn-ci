<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function index()
	{
		$this->load->model('admin/Category_model','categorymodel');
		$data['allcategory'] = $this->categorymodel->getCategory();
		//print_r($data);die();
		$this->template->load('admin/base_template', 'admin/category_list',$data);
	}

	public function categoryform($id=false)
	{
		$this->load->model('admin/Category_model', 'categorymodel');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('categoryname', 'Category', 'required');

		// -------------- ************** Insert Work Start ************ ---------------
		if($this->input->post('save'))
		{
			if ($this->form_validation->run() != FALSE)
			{
				$save['title'] = $this->input->post('categoryname');
				//print_r($save);die();
				$data = $this->categorymodel->insert($save);
				//print_r($data);die();
				$this->session->set_flashdata('success', 'Category Inserted Successfully !');
				redirect(base_url('admin/category'));
			}
			else
			{
				$data['allerrors'] = $this->form_validation->error_array();
				//print_r($data);die();
			}
		}
		// ------------ *************** Insert Work End ************ --------------- 
		// fetch data with id
		$data['editcategory'] = $this->categorymodel->geteditdata($id);
		//print_r($data);die();

		// -------------------- ********** update work start ************ ---------------
		if($this->input->post('update'))
		{
			if ($this->form_validation->run() != FALSE)
			{
				$update['title'] = $this->input->post('categoryname');
				//print_r($update);die();
				$this->categorymodel->update($id,$update);
				$this->session->set_flashdata('success', 'Category Updated Successfully !');
				redirect(base_url('admin/category'));
			}	
		}
		$this->template->load('admin/base_template', 'admin/category_form',$data);
	}
}