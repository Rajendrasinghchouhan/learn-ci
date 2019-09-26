<?php
defined('BASEPATH') OR exit('No direct script access allowed . . . ');

//extends is a keyword used to inherit another class in php
class Addition extends CI_Controller {
	/*public function index()
	{
		echo '<h1>This is User controllers index function</h1>';
	}*/

	public function calculate($id=false)
	{
		//$this->load->view('user_list');
		$this->load->view('test/add');
		$this->load->view('test/sub');
		$this->load->view('test/multiply');
		$this->load->view('test/div');
		//echo 'this is test';
	}

	public function get($user_id=false)
	{
		echo '<h3>This is User controllers get function</h3>';
		echo "<br />here we'll display users detail with id = ".$user_id;
	}
}
