<?php 
class Product_model extends CI_Model{
	//GET ALL PRODUCTS	
	public function get_products(){
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
	}
	//get every product
 	public function get_product_details($product_id){
 		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id', $product_id);

		$query = $this->db->get();
		return $query->row(); 		
 	}
 	//get categories
 	public function get_categories(){
 		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query->result();
 	}
  	public function get_popular(){
 		$this->db->select('P.*, COUNT(O.product_id) as total');
 		$this->db->from('orders AS O');
 		$this->db->join('products AS P', 'O.product_id = P.product_id', 'INNER');
 		$this->db->group_by('O.product_id');
		$this->db->order_by('total', 'desc');
		$query = $this->db->get();
		return $query->result();
 
	}

	//get products in the category
 	public function get_category_products($category_id){
 		$this->db->select('*');
  		$this->db->from('products');
    	$this->db->where('category_id',$category_id);

  		$query = $this->db->get();
  		return $query->result();
 }
 	/*
	 *	Add Order To Database
	 */
	 public function add_order($order_data){
		$insert = $this->db->insert('orders', $order_data);
        return $insert;
	}
}