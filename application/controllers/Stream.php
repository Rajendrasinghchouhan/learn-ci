<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stream extends CI_Controller {
	public function streamlist()
	{
		$this->load->model('Streams');
		$data['getstream'] = $this->Streams->getstreamclass();//fetch all stream class data
		$this->template->load('admin/base_template', 'stream_list',$data);
	}
	public function streamform($id=FALSE)
	{
		$this->load->model('Streams');
		$this->load->model('Classes');
		$data['mainclass'] = $this->Classes->getmainClass();//fetch all class data
		
		//print_r($data['getstream']);die();
		//fetch data when id in url
		//print_r($data['getstream']);die();
		if($id)
		{
			$data['editgetstream'] = $this->Streams->geteditstream($id);
		}
		$this->template->load('admin/base_template', 'add_edit_stream',$data);	
	}
	public function streaminsert()
	{
		$this->load->model('Streams');
		if($this->input->post('save'))
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('streamname', 'Stream Name', 'required');
			$this->form_validation->set_rules('mainclass', 'Main Name', 'required');
 
			if($this->form_validation->run()!=FALSE)
			{
				$save['stream_class_id'] = $this->input->post('mainclass');
				$save['stream_class_name'] = $this->input->post('streamname');
				//print_r($save);die();
				$this->Streams->addstream($save);
				redirect(base_url('stream/streamlist'));
			}
		}
	}
	public function updatestream($id){
		$this->load->model('Streams');
		if($this->input->post('update'))
		{
			$update['stream_class_id'] = $this->input->post('mainclass');
			$update['stream_class_name'] = $this->input->post('streamname');

			$data = $this->Streams->update_stream($id,$update);
			redirect(base_url('stream/streamlist'));
		}
	}
}
