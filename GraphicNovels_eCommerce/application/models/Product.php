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

	function get_similar_by_product_id($product_id) {
		$query = "SELECT * FROM products_has_categories WHERE product_id = ?";
		$values = array($product_id);
		$similar_categories = $this->db->query($query, $values)->result_array();
		foreach ($similar_categories as $similar_category) {
			$query = "SELECT * FROM products_has_categories LEFT JOIN products ON products.id = products_has_categories.product_id LEFT JOIN images ON images.id = products.image_id WHERE products_has_categories.product_id != ? AND category_id = ?";
			$values = array($product_id,$similar_category["category_id"]);
			$records = $this->db->query($query,$values)->result_array();
			foreach ($records as $record) $results[] = $record;
		}
		return $results;
	}

	function filter_for_users_pagination($subset_details) {
		$res_per_page = 4; 
		$sort = $subset_details['sort'];
		$search = $subset_details['search'];
		$category = $subset_details['category'];

		$query = "SELECT COUNT(*) as count FROM (SELECT products.id FROM products_has_categories LEFT JOIN products ON products.id = products_has_categories.product_id LEFT JOIN categories ON categories.id = products_has_categories.category_id LEFT JOIN images ON products.image_id = images.id WHERE name LIKE ? AND category LIKE ? GROUP BY products.id ORDER BY products.".$sort." ASC) AS products_list";
		$values = array($search, $category); 
		// var_dump($values);
		$record = $this->db->query($query, $values)->row_array(); 
		// var_dump($records); 
		return $record['count']/$res_per_page; 
	}

	function filter_for_users($subset_details) {
		// var_dump($subset_details);
		$res_per_page = 4; 
		$start_index = $res_per_page*$subset_details['page'];
		$sort = $subset_details['sort'];
		$search = $subset_details['search'];
		$category = $subset_details['category'];

		$query = "SELECT products.id as id, products.name as name, images.file_path as image, products.description as description, products.price as price, products.quantity_sold as quantity_sold FROM products_has_categories LEFT JOIN products ON products.id = products_has_categories.product_id LEFT JOIN categories ON categories.id = products_has_categories.category_id LEFT JOIN images ON products.image_id = images.id WHERE name LIKE ? AND category LIKE ? GROUP BY id ORDER BY ".$sort." ASC LIMIT ?, ?"; 
		// echo $query;
		$values = array($search, $category, $start_index, $res_per_page); 
		// var_dump($values);
		$records = $this->db->query($query, $values)->result_array(); 
		// var_dump($records); 
		return $records; 
	}

	function filter_for_admins($subset_details) {
		$res_per_page = 5; 
		$start_index = $res_per_page*$subset_details['page'];
		$search = $subset_details['search'];

		$query = "SELECT * FROM products WHERE (name LIKE ? OR id = ? OR inventory = ? OR quantity_sold = ?) LIMIT (?, ?)"; 
		$values = array($search, $num, $num, $num, $start_index, $res_per_page); 

		return $this->db->query($query, $values)->record_array(); 
	}

	function get_categories() {
		return $this->db->query("SELECT category, COUNT(*) as count FROM categories LEFT JOIN products_has_categories ON categories.id = products_has_categories.category_id GROUP BY categories.id ORDER BY category ASC")->result_array();
	}

	function get_images_by_product_id($id) {
		return $this->db->query("SELECT * FROM images WHERE product_id = ?", array($id))->result_array(); 
	}

	function get_product_by_id($id) {
		return $this->db->query("SELECT * FROM products LEFT JOIN images ON images.id = products.image_id WHERE products.id = ?", array($id))->row_array(); 
	}
}

?>