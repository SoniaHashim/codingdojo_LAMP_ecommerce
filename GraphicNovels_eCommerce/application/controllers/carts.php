<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function show() {
		$this->load->model('Cart');
		$items = $this->Cart->get_all($this->session->userdata('cart_id'));
		$total = $this->Cart->get_total_by_id($this->session->userdata('cart_id'));
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
		$this->input->post('product_id');
		// returns a partial allowing quantity to be edited
	}

	public function update() {
		$cart_id = $this->session->userdata('cart_id');
		$product_id = $this->input->post('product_id');
		$quantity = $this->input->post('quantity');

		$this->load->model('Cart');
		$this->Cart->update_product_quantity($cart_id, $product_id, $quantity);
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