<?php
class Products extends CI_Controller{
	public function index(){
		//get the product
		$data['products'] = $this->Product_model->get_products();

		//load the view
		$data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}
}