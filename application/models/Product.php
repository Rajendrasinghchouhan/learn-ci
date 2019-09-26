<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function getProducts($limit, $offset, $search)
	{

		//echo $s;
		//$res = $this->db->query('SELECT * FROM products where id > 2')->result();
		///echo '<pre>';print_r($res);echo '</pre>';
		return $this->db
				->select('products.id, products.title, categories.title AS category_title,description,image,added,category_id')
				->join('categories', 'products.category_id = categories.id', 'LEFT')
				//->where('products.id > 2')
				//->or_where('categories.id > 2')
				->order_by('products.id', 'desc')
				// try like
				->like('products.title',trim($search))
				//->like('categories.title',$search)
				//->not_like('categories.title','e')
				->or_like('categories.title',trim($search))
				//try limit
				//->limit(3,2)
				->limit($limit, $offset)
				->get('products')
				->result();

		//echo '<pre>';print_r($res);
		//$this->db->get('products')->all();

	}

	public function getProductDetail($id)
	{
		if(!empty($id) and isset($id))
		{
			return $this->db->select('products.id, products.title, categories.title AS category_title,description,stock,image,added')
			->join('categories','products.category_id = categories.id','LEFT')
			->where('products.id', $id)
			->get('products')
			->result();	
			//echo '<pre>';print_r($res);
		}
	}

	public function getCatproduct($id,$offset,$limit)
	{
		if(!empty($id) and isset($id))
		{
			return $this->db->select('products.id,products.title,categories.title AS category_title,image,description')
			->join('categories','products.category_id = categories.id','LEFT')
			->where('category_id',$id)
			->limit($limit,$offset)
			->get('products')
			->result();
			//echo '<pre>';print_r($res);	
		}
	}

	public function getProductCount()
	{
		return $this->db->select('COUNT(id) total')->get('products')->row('total');
	}

	public function getcategoryCount($id)
	{
		return $this->db->select('COUNT(products.id) total')
		//->join('categories','products.category_id = categories.id','LEFT')
		->where('category_id', $id)
		->get('products')
		->row('total');
			//echo '<pre>';print_r($res);
	} 

	public function getCategories(){
		return $cat =  $this->db->query('select * from categories ')
				->result();
	}
	public function addProduct($data){
		$query = "insert into products (title,description,category_id,stock,image) 
		   		values('".$data['title']."','".$data['description']."',
		   		'".$data['category_id']."','".$data['stock']."','".$data['file_name']."')";

		return $this->db->query($query);
   		//print_r($insertedData);
	}

	public function getProductData($id){
		return $this->db->query("select * from products where id=$id")
			   ->row();
			   // print_r($getdata);
	}
	public function editProduct($id,$data){
		 /*
		 $query = "update products set title='".$data['title']."',
		 description='".preg_replace("/[^'!<>@&,\/\sA-Za-z0-9_]/","",$data['description'])."',
		category_id ='".$data['category_id']."',stock='".$data['stock']."',
		image='".$data['file_name']."' where id=$id";
		*/
		//print_r($query);die();
		return $this->db->where('id', $id)
		->update('products', $data);
		//return $this->db->query($query);
		//print_r($update);die();
	}
	public function deleteProduct($id){
		$query = "delete from products where id = $id";
		return $this->db->query($query);
	}
}