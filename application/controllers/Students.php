<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index()
	{
		//$data = [];

		$this->load->model('Student');
		
		$data['students'] = $this->Student->student_list();//fetch all students data
		//print_r($data['students']);die();
		
		//$data['students'];
		

		$this->template->load('admin/base_template', 'student_list', $data);
	}
	public function studentform($id=FALSE)
	{	//echo 'asd';die();
		$this->load->model('Student');
		$this->load->model('Classes');
		$data['allclass'] = $this->Classes->getallclass();//fetch all classes
		$data['geteditstudents'] = $this->Student->getstudent_edit($id);
		//print_r($data['allclass']);die();
		$this->template->load('admin/base_template', 'student_form',$data);	
	}

	public function insert_student($id=false){
		//echo 'asdf';die();
		$this->load->model('Student');
		$this->load->model('Classes');

		if($this->input->post('save')) {

			//print_r($this->input->post());die();
			//$this->check_valdation($this->input->post());

			$this->load->library('form_validation');

			$this->form_validation->set_rules('name', 'Student Name', 'required');
			$this->form_validation->set_rules('email', 'Student Email', 'valid_email|required|is_unique[students.email]');
			$this->form_validation->set_rules('address', 'Student Address', 'trim|required');
			$this->form_validation->set_rules('class', 'Student Class', 'required');
			//$this->form_validation->set_rules('streams','Student Stream', 'required');

			if ($this->form_validation->run() != FALSE)
            {

				$save['student_name'] = $this->input->post('name');
				$save['class'] = $this->input->post('class');
				$save['email'] = $this->input->post('email');
				$save['address'] = $this->input->post('address');
				//$save['student_stream_id'] = $this->input->post('streams');
				//print_r($save);die();
				$this->Student->add_student($save);
				
				$this->session->set_flashdata('success', 'Student Inserted Successfully !');
				redirect(base_url('students'));
			}
			else
			{		//echo 'asdf';die();
				$data['allerrors'] = $this->form_validation->error_array();
				//print_r($data);die();
				$data['allclass'] = $this->Classes->getallclass();// fetch all mainclass
				$data['students'] = $this->Student->student_list();// fetch all students list

				$this->template->load('admin/base_template', 'student_form', $data);

				//redirect(base_url('students'));
			}
		}
	}
	public function update_student($id)
	{
		
		$this->load->model('Student');
		$this->load->model('Classes');
		if($this->input->post('update'))
		{ 
			$this->load->library('form_validation');
			$this->form_validation->set_rules('id', 'Student id');
			$this->form_validation->set_rules('name', 'Student Name', 'required|trim');
			$this->form_validation->set_rules('email', 'Student Email', 'valid_email|trim|required|callback_check_student_email['.$id.']');


			if ($this->form_validation->run() != false)
            {
				$update['student_name'] = $this->input->post('name');
				$update['class'] = $this->input->post('class');
				$update['email'] = $this->input->post('email');
				$update['address'] = $this->input->post('address');
				$update['student_stream_id'] = $this->input->post('streams');
				//print_r($update);die();
				$this->Student->edit_student($update,$id);
				$this->session->set_flashdata('success', 'Student Updated Successfully !');
				redirect(base_url('students'));
			} else {
			 	$data['allerrors'] = $this->form_validation->error_array();
				//print_r($data);die();
				$data['geteditstudents'] = $this->Student->getstudent_edit($id);
				$data['allclass'] = $this->Classes->getallclass();// fetch all main class-list
				$data['students'] = $this->Student->student_list();// fetch all students list
				$this->template->load('admin/base_template', 'student_form', $data);
			}

			
		}
	}
	public function check_student_email($email,$id=false)
	{
		//print_r($id);die();
		if($this->input->post('email'))
		{
			$email = $this->input->post('email');
		}
		else
		{
			$email = "";
		}
		$emailVerify = $this->Student->check_unique_student_email($email,$id);
		//print_r($emailVerify);die();
		if($emailVerify == 0)
		{
			$result = true; 
		}
		else {
			$this->form_validation->set_message('check_student_email', 'Student Email must be unique');
        	$result = false;
		}
		return $result;
	}
	public function update_status($id,$status)
	{
		if(isset($id) && isset($status))
		{	
			$this->load->model('Student');
			//print_r($status);die();
			$sval = ($status==0) ? 1 : 0;
			$update = array('status'=>$sval);
			$this->Student->updatestatus($id,$update);
			$this->session->set_flashdata('success', 'Student status updated Successfully !');
			redirect(base_url('students'));
		}
	}
	public function student_delete($id)
	{
		if(!empty($id) && isset($id))	
		{
			//echo 'asd';die();
			$this->load->model('Student');
			$this->Student->studentDelete($id);
			$this->session->set_flashdata('success', 'Student Deleted Successfully !');	
			redirect(base_url('students'),'refresh');
		}
	}
	
	

	function get_streams()
	{
		//$data['message'] = "fetching streams of class id: ".$this->input->post('classid');
		$data['strams'] = $this->db->where('stream_class_id', $this->input->post('classid'))
				->get('stream_class')
				->result();	
				
		echo json_encode($data);
	}

	function deleteall()
	{
		$this->load->model('Student');
		//click on delete all button
		if($this->input->post('bulk_delete'))
		{
			$ids = $this->input->post('checked_id');
			if(!empty($ids))
			{
				//print_r($ids);die();
				$delete = $this->Student->deleteAll($ids);
				
				$this->session->set_flashdata('success', 'Delete Successfully !');
				redirect(base_url('students'),'refresh');	
			}
			else
			{//echo 'asdf123';die();
				$success = 'select at least 1 record to delete';
				redirect(base_url('students'),'refresh');
			}
		}
	}
}
