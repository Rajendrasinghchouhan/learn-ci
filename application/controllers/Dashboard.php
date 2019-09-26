<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	//echo 'asdf';die();
		$this->load->model('Student');
		$this->load->model('Classes');
		$this->load->model('Streams');
		
		$data['getClass'] = $this->Classes->allClass();
		$data['allStream'] = $this->Streams->getallstream();
		$data['allStudent'] = $this->Student->getallstudent();
		$data['allCategory'] = $this->Student->getallcategory();
		$data['allProduct'] = $this->Student->getallproduct();

		//print_r($data['getClass']);die();	
		$this->template->load('admin/base_template', 'dashboard_count',$data);			
	}
}
