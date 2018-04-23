<?php
class Products extends CI_Controller{
	public function index(){
		//get the product
		$data['products'] = $this->Product_model->get_products();

		//load the view
		$data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}
	public function details($product_id){
		//get the product details
		$data['product'] = $this->Product_model->get_product_details($product_id);

		//load the view
		$data['main_content'] = 'details';
		$this->load->view('layouts/main', $data);
	}
	public function category($id){
  		//get product details 
 		 //2 nd change
 		 $data['products'] =$this->Product_model->get_category_products($id);

 		 //Load View
  		$data['main_content'] = 'category';
 		 $this->load->view('layouts/main', $data);
 
 }
}