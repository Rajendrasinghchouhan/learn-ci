<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index($offset=0)
	{
		// $this represents current class
		
		// get() used to fetch all $_GET data 

		$search = $this->input->get(trim('search'));
		// post() used to fetch all $_POST data 
		//$this->input->post();
		$this->load->model('Product');


		$this->load->library('Pagination');

		$config['base_url'] = base_url('admin/products/index');
		$config['total_rows'] = $this->Product->getProductCount();
		$limit = $config['per_page'] = 2;

		$this->pagination->initialize($config);


		//echo '<pre>';print_r($data['pro_data'][0]->id);
		//$data['page_title'] = "Products List";
		//echo '<pre>';print_r($data);echo '</br>';
		
		// Libraries are classes and helpers are set of functions without any class, we can use helper funtions directly on view/controller without creating object 
		$data['pagination'] = $this->pagination->create_links();
		$data['pro_data'] = $this->Product->getProducts($limit, $offset, $search);

		$this->load->library('Template');

		//$this->load->view('admin/products',$data);
		$this->template->load('admin/base_template', 'admin/products',$data);
	}
	public function productdetail($id){
		$this->load->model('Product');

		$data['detail']=$this->Product->getProductDetail($id);

		//print_r($data);
		$this->load->library('Template');
		$this->template->load('admin/base_template','admin/pro_detail',$data);
	}
	public function categoryproduct($id,$offset=0){
		$this->load->model('Product');

		$this->load->library('Pagination');

		$config['base_url'] = base_url('admin/products/categoryproduct');
		$config['total_rows'] = $this->Product->getcategoryCount($id);

		if (count($_GET) > 0) $config['suffix'] = '?page_num=' . http_build_query($_GET, '', "&");
		else $config['prefix'] = '?page_num=';
		$config['first_url'] = $config['base_url'].'?page_num='.http_build_query($_GET);
		//echo '<pre>';print_r($config['total_rows']);die();
		$limit = $config['per_page'] = 2;

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links($id);	
		//echo '<pre>';print_r($data['pagination']);
		$data['cat_product'] = $this->Product->getCatproduct($id,$offset,$limit);
		//echo '<pre>';print_r($data);
		$this->load->library('Template');
		$this->template->load('admin/base_template','admin/cat_product',$data);
	}

	public function form($id=false){
		$this->load->model('Product');

		$data['categories'] = $this->Product->getCategories();
		//print_r($data['categories']);die();

		if($id) {
			$data['product'] = $this->Product->getProductData($id); 

			//print_r($data);die();
			// fetch product whcih we need to edit using id
		}
		//print_r($data['categoryproduct']);die();
		
		$this->load->library('Template');

		$this->template->load('admin/base_template','admin/add_product',$data);
	}

	public function insert(){
		$this->load->model('Product');
		$data['categories'] = $this->Product->getCategories();
		//including validation library
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		//validation for title
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]',
			array('required'=>'please fill title'));
		//validation for description
		$this->form_validation->set_rules('description', 'Description', 'trim|required|max_length[200]');
		//validation for select category
		$this->form_validation->set_rules('category_id', 'Choose Category', 'required');
		//validation for image
		$this->form_validation->set_rules('image', 'Please Upload Image', 'required');
		//validation for stock
		$this->form_validation->set_rules('stock', 'Enter Stock', 'trim|required|numeric');

		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['category_id'] = $this->input->post('category_id');
		$data['stock'] = $this->input->post('stock');
		// image upload work on insert time.
		$config['upload_path'] = FCPATH . "assets\images\product_image";
		$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
		$config['max_size']  = '2048000';
	    $config['max_width']  = '1024';
	    $config['max_height']  = '768';
	    $config['overwrite'] = true;

	   	//print_r($config);die();
    	$this->load->library('upload', $config);

    	if (!$this->upload->do_upload('image')) {
    			
		    $error = array('error' => $this->upload->display_errors());
		    //print_r($error);die;
		    $this->session->set_flashdata('error',$error['error']);
		    //exit();
		    //redirect(base_url('admin/products/form'),'refresh');
		}

    	
    	$file = $this->upload->data();
    	//echo '<pre>';print_r($file);die();
		$data['image'] = $file['file_name'];
		//print_r($data);die();
		if($this->input->post('save')){

			if($this->form_validation->run() != false)
			{
				$this->load->model('Product');
				$this->Product->addProduct($data);
				//print_r($data);die();
			}
			else 
			{

				$data['allerrors'] = $this->form_validation->error_array();
				//print_r($data['allerrors']);die();
				$this->template->load('admin/base_template','admin/add_product',$data);

			}
		}
		
		//redirect to list page
		//$this->load->helper('url');
		//redirect(base_url('admin/products/index'), 'refresh');		
	}

	public function update($id) {

		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('description');
		$data['category_id'] = $this->input->post('category_id');
		$data['stock'] = $this->input->post('stock');

		 				//echo $checkImage;die();

		/*
		//before update -> apply validation
		
		if image uploaded from file/browse
			if there is image already exist
				unlink that image 

			do upload process
		endif 

		update data in product table
		*/


		$imgCheck = $_FILES['image']['name'];
		//print_r($imgCheck);die();
		if(!empty($imgCheck)){

			$checkImage = $this->db->query("select image from products where id =$id")
		 				->row('image');
			
			if(!empty($checkImage)){
				$path = FCPATH . "assets/images/product_image/$checkImage";
				unlink($path);
			}

			$config['upload_path'] = FCPATH . "assets\images\product_image";
			$config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
			$config['max_size']  = '2048000';
		    $config['max_width']  = '1024';
		    $config['max_height']  = '768';
		    $config['overwrite'] = true;
		    //print_r($config);die();
		    $this->load->library('upload', $config);
    		if (!$this->upload->do_upload('image')) {
			    $error = array('error' => $this->upload->display_errors());
			    //print_r($error);die;
			    $this->session->set_flashdata('error',$error['error']);
			    redirect(base_url('admin/products/form'),'refresh');
			}
			$file = $this->upload->data();
    		//echo '<pre>';print_r($file);die();
			$data['file_name'] = $file['file_name'];	
		}
		//print_r($data);die();
		if($this->input->post('update')){
			//print_r($this->input->post('image'));
			$this->load->model('Product');
			$this->Product->editProduct($id,$data);
			redirect(base_url('admin/products/index'), 'refresh');		
		}

	}

	public function delete($id){
		$this->load->model('Product');
		$this->Product->deleteProduct($id);
		redirect(base_url('admin/products/index'),'refresh');
	}
}
