<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function create() {
		$this->load->model('Product');
		$product_details = $this->Product->create(); 
		// returns a partial allowing us to create a product
	}

	public function preview() {
		// NEED THIS POST DATA
		// name
		// description
		// price
		// main_img
		// images 

		$product_details = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'main_image' => $this->input->post('main_image'),
			'images' => $this->input->post('images')
			);

		// returns a partial containing product data
	}

	public function destroy() {
		$this->load->model('Product');
		$this->Product->destroy($this->input->post('product_id'));
	}

	public function edit() {
		// should load a partial to update product information 
		// includes product data - post this data when clicking preview / to update
		$this->load->model('Product');
		$record = $this->Product->get_product_by_id($this->input->post('product_id')); 
		$images = $this->Product->get_images_by_id($this->input->post('product_id'));
	}

	public function update() {
		// NEED THIS POST DATA
		// name
		// description
		// price
		// main_image
		// deleted images
		// added images

		$product_details = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			'main_image' => $this->input->post('main_image')
			);

		$deleted_images = $this->input->post('deleted_images'); 
		$added_images = $this->input->post('added_images');

		$this->load->model('Product');
		$this->Product->destroy_images($product_id, $deleted_images);
		$this->Product->create_images($product_id, $added_images);	
		// updates all product fields
		$this->Product->update($product_details);

		// redirects to main
		redirect('/');
	}

	public function upload_image() {
		// use form_open_multipart('products/upload_image') in php on view
		// config form such that name of input with upload file path = image
		$image_path = 'image'; 
		// add image to database 
		$config['upload_path'] = './assets/products/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload->do_upload($image_name); 
	}

	

	public function show_similar_products() {
		$this->load->model('Product');
		$record = $this->Product->get_product_by_id($this->input->post('product_id'));
		$this->Product->get_similar($record['category']);

		// returns partial with products within the same category
	}

	public function filter_for_users() {
		// search terms to match Name
		$search_terms = $this->input->post('search');
		$search = '%'.$search_terms.'%'; 
		// search to match categories 
		$categories = $this->input->post('category');
		$category = '%'.$categories.'%';
		//pagination
		$page = $this->input->post('page_number');

		// if (null == $this->session->userdata('page_num')) {
		// 	echo 'reset session page_num<br>';
		//  	$this->session->set_userdata('page_num',0);
		// } 

		if (empty($page)) $page = 0; 

		// switch ($page) {
		// 	case 'first':
		// 		$page = 0; 
		// 		break;
		// 	case 'prev':	
		// 		if (null !== $this->session->userdata('page_num')) {
		// 			$page = $this->session->userdata('page_num') - 1;
		// 			if ($page < 0) $page = 0; 
		// 		} else { $page = 0; } 
		// 		break; 
		// 	case 'next':
		// 		echo 'next';
		// 		if (null !== $this->session->userdata('page_num')) {
		// 			$page = $this->session->userdata('page_num') + 1;
		// 			echo $this->session->userdata('page_num'); 
		// 		} else { $page = 0; }
		// 		break; 
		// }
		// echo 'Page...'.$page.'<br>';
		// $this->session->set_userdata('page_num', $page);
		// echo 'Session page_num: '.$this->session->userdata('page_num');

		
		$subset_details = array(
			'search' => $search,
			'category' => $category,
			'page' => $page
			);
		// var_dump($subset_details);

		$this->load->model('Product');
		$records = $this->Product->filter_for_users($subset_details);
		$this->load->view('users_partials/users_index_products', array('records' => $records));

		// returns partial with filtered, paginated results 
	}	

	public function filter_for_admin() {
		// search terms to match Id/Name/Inventory Count/ Quantity Solid
		$search_terms = $this->input->post('search'); 
		$search = '%'.$search_terms.'%'; 
		// pagination
		$page = $this->input->post('page_number');
		if (empty($page)) $page = 0; 

		$subset_details = array(
			'num' => $search_terms,
			'search' => $search,
			'page' => $page
		);

		$this->load->model('Product');
		$records = $this->Product->filter_for_admins($subset_details);

		// returns partial with filtered, paginated results for admin
	}

	public function show($id) {
		$this->load->model('Product');

		$record = $this->Product->get_product_by_id($id);
		if (!$record) redirect('/');

		$images = $this->Product->get_images_by_product_id($id);
		$similar_products = $this->Product->get_similar_by_product_id($id);

		$this->load->view('users_product_show', array('record' => $record, 'images' => $images, 'similar_products' => $similar_products));
		// returns a partial containing more specific product info 
	}

	public function index() {
		$this->load->view('users_index');
	}
}

//end of main controller