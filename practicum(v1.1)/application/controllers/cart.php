<?php
	class Cart extends CI_Controller{
		public $paypal_data = '';
		public $tax;
		public $shipping;
		public $total = 0;
		public $grand_total;

		//cart index
		public function index(){
			//looad the view
			$data['main_content'] = 'cart';
			$this->load->view('layouts/main', $data);
		}
	  public function add(){
		//Item Data
		$data = array(
				'id' => $this->input->post('item_number'),
				'qty' => $this->input->post('qty'),
				'price' => $this->input->post('price'),
				'name' => $this->input->post('title')
		);
		//print_r($data);die();
		
		//Insert Into Cart
		$this->cart->insert($data);
		
		redirect('products');
	  }
	  	  /*
	 * Update Cart
	 */
	public function update($in_cart = null){
		$data = $_POST;
		$this->cart->update($data);
		
		//Show Cart Page
		redirect('cart','refresh');

	}

	
}