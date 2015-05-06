<?php

class Cart extends CI_Model {
	// returns id of new cart
	function create() {
		$this->db->query("INSERT INTO carts (created_at, updated_at) VALUES (NOW(), NOW())");

		$cart = $this->db->query('SELECT LAST_INSERT_ID()')->row_array(); 
		return $cart['LAST_INSERT_ID()'];
	}

	function destroy_by_id($id) {
		$this->db->query("DELETE FROM carts_has_products WHERE cart_id = ?", array($id));
		$this->db->query("DELETE FROM carts WHERE id = ?", array($id));
	}

	function update_product_quantity($cart_id, $product_id, $quantity) {
		$query = "UPDATE carts_has_products WHERE cart_id = ? AND product_id = ? SET quantity = ?"; 
		$values = array($cart_id, $product_id, $quantity); 
		return $this->db->query($query, $values);
	}


	function add_to_cart($cart_id, $product_id, $quantity) {
		$query = "INSERT INTO carts_has_products (cart_id, product_id, quantity) VALUES (?, ?, ?)";
		$values = array($cart_id, $product_id, $quantity);
		return $this->db->query($query, $values);
	}

	// returns total price (accounting for quantity) for item in cart
	function get_price_by_product($cart_id, $product_id) {
		$query = "SELECT * FROM carts_has_products WHERE cart_id = ? AND product_id = ?"; 
		$values = array($cart_id, $product_id); 
		$item = $this->db->query($query, $values)->row_array();
		$quantity = $item['quantity'];

		$product = $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
		$price = $product['price'];

		return $quantity*$price;
	}

	// returns an array with all product info currently in the given cart 
	function get_products_by_id($id) {
		return $this->db->query("SELECT * FROM products LEFT JOIN carts_has_products ON products.id = carts_has_products.product_id WHERE carts_has_products.cart_id = ?", array($id))->record_array();
	}

	// returns total price of all items in specified cart
	function get_total_by_id($id) {
		$products = $this->db->query("SELECT * FROM carts_has_products WHERE cart_id = ?", array($id))->record_array();
		$sum = 0; 
		for ($i=0; $i < count($products); $i++) {
			$product_info = $products[$i];
			$product = $this->db->query("SELECT * FROM products WHERE id = ?", array($product_info['product_id']))->row_array();
			$price = $product['price'];
			$quantity = $product_info['quantity'];
			$sum += ($price * $quantity);
		}

		return $sum;
	}

	// returns all items in cart
	function get_all($id) {
		$query = "SELECT * FROM carts LEFT JOIN carts_has_products ON carts_has_products.cart_id = carts.id LEFT JOIN products ON carts_has_products.product_id = products.id WHERE carts.id = ?";
		$values = array($id);

		return $this->db->query($query,$values)->record_array();
	}

}

?>