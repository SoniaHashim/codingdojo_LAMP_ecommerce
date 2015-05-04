<?php

class Product extends CI_Model {
	// returns id of new product 
	function create() {
		$this->db->query("INSERT INTO products () VALUES ()"); 
		$product = $this->db->query('SELECT LAST_INSERT_ID()')->row_array(); 
		return $product['LAST_INSERT_ID()'];
	}	

	function destroy($product_id) {
		// removes images associated with product from file system
		$records = $this->db->query("SELECT * FROM images WHERE product_id = ?", array($product_id)); 
		for ($i = 0; $i < count($records); $i++) {
			unlink($records[$i]['image']);
		}
		// clears images in DB associated with product
		$this->db->query("DELETE FROM images WHERE product_id = ?", array($product_id));
		// clears product from products has categories
		$this->db->query("DELETE FROM products_has_categories WHERE product_id = ?", array($product_id));
		// removes product from database
		$this->db->query("DELETE FROM products WHERE id = ?", array($product_id));
	}

	function destroy_images($images) {
		// destroy deleted images from file system and DB
		for ($i=0; $i < count($images); $i++) {
			unlink($images[$i]['image']);
			$this->db->query("DELETE FROM images WHERE id = ?", $images[$i]['id']);
		}
		
	}

	function create_images($product_id, $images) {
		// add new images as relationship 
		for($i=0; $i < count($images); $i++) {
			$this->db->query("UPDATE images SET product_id = ? WHERE id =?", array($product_id, $images[$i]['id']));
		}
	}	

	function update($product_details) {
		$query = "UPDATE products SET name = ?, description = ?, price = ?, main_img = ?";
		$values = array($product_details['name'], $product_details['description'], $product_details['price'], $product_details['main_img']);

		$this->db->query($query, $values);
	}

	function get_similar($category) {
		$category_id = $this->db->query("SELECT * FROM categories WHERE category = ?", array($category));
		$query = "SELECT * FROM products_has_categories LEFT JOIN products ON products.id = products_has_categories.id LEFT JOIN images ON products.image_id = images.id WHERE products_has_categories.category_id = ?";
		$values = array($category_id);

		return $this->db->query($query, $values)->record_array();
	}

	function filter_for_users($subset_details) {
		$res_per_page = 5; 
		$start_index = $res_per_page*$subset_details['page'];
		$search = $subset_details['search'];
		$category = $subset_details['category'];

		$query = "SELECT * FROM products_has_categories LEFT JOIN products ON products.id = products_has_categories.product_id LEFT JOIN categories ON categories.id = products_has_categories.category_id WHERE products.name LIKE ? AND categories.category LIKE ? LIMIT (?, ?)"; 
		$values = array($search, $category, $start_index, $res_per_page); 

		return $this->db->query($query, $values)->record_array(); 
	}

	function filter_for_admins($subset_details) {
		$res_per_page = 5; 
		$start_index = $res_per_page*$subset_details['page'];
		$search = $subset_details['search'];

		$query = "SELECT * FROM products WHERE (name LIKE ? OR id = ? OR inventory = ? OR quantity_sold = ?) LIMIT (?, ?)"; 
		$values = array($search, $num, $num, $num, $start_index, $res_per_page); 

		return $this->db->query($query, $values)->record_array(); 
	}

	function get_images_by_product($id) {
		return $this->db->query("SELECT * FROM images WHERE products_id = ?", array($id))->record_array(); 
	}

	function get_product_by_id($id) {
		return $this->db->query("SELECT * FROM products LEFT JOIN images ON images.id = products.image_id WHERE products.id = ?", array($id))->row_array(); 
	}
}

?>