<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function show() {
		$this->load->model('Cart');

		// Create a cart for a new session
		if(!$this->session->userdata('cart_id')) {
			$this->load->model('Cart');
			$cart_id = $this->Cart->create();
			$this->session->set_userdata('cart_id', $cart_id);
		} 

		$items = $this->Cart->get_all($this->session->userdata('cart_id'));
		$total = $this->Cart->get_total_by_id($this->session->userdata('cart_id'));

		$this->load->view('cart', array('items' => $items, 'total' => $total));
		// returns a partial with product data
	}

	public function add_to_cart() {
		$cart_id = $this->session->userdata('cart_id');
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');

		$this->load->model('Cart');
		$this->Cart->add_to_cart($cart_id, $product_id, $quantity);
		// adds product to cart using cart_id in SESSION
	}

	public function delete_from_cart() {
		$cart_id = $this->session->userdata('cart_id');
		$product_id = $this->input->post('product_id');
		$this->load->model('Cart');
		$this->Cart->remove_product($cart_id, $product_id); 
		// removes product from cart
	}

	public function edit() {
		$cart_id = $this->session->userdata('cart_id');
		$product_id = $this->input->post('product_id');
		$this->load->model('Cart');
		$item = $this->Cart->get_product_by_cart($cart_id, $product_id);
		$this->load->view('users_partials/cart_edit', array('item' => $item));
		// returns a partial allowing quantity to be edited
	}

	public function update() {
		$cart_id = $this->session->userdata('cart_id');
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');

		$this->load->model('Cart');
		if ($quantity <= 0) $this->Cart->remove_product($cart_id, $product_id);
		else $this->Cart->update_product_quantity($cart_id, $product_id, $quantity);
		// returns a partial containing updated information regarding quantity of product

	}

	public function show_total() {
		$this->load->model('Cart');
		$this->Cart->get_total_by_id($this->session->userdata('cart_id'));
		// returns numeric result -> total in cart 

	}

	public function show_total_for_product() {
		$cart_id = $this->session->userdata('cart_id');
		$product_id = $this->input->post('product_id');		

		$this->load->model('Cart');
		$this->Cart->get_price_by_product($cart_id, $product_id);
		// returns price of product * quantity in cart 
	}
}

//end of main controller