<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index() {
		// Create a cart for a new session
		if(!$this->session->userdata('cart_id')) {
			$this->load->model('Cart');
			$cart_id = $this->Cart->create();
			$this->session->userdata('cart_id', $cart_id);
		} 
		$this->load->view('users_index');
	}

	public function create() {
		$this->load->model('Product');
		$product_details = $this->Product->create(); 
		// returns a partial allowing us to create a product
	}

	public function previews() {
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
		echo "yay";
		die();
		// use form_open_multipart('products/upload_image') in php on view
		// config form such that name of input with upload file path = image
<<<<<<< HEAD
		$image_path = 'image'; 
=======
		$image_path = 'image';
>>>>>>> admin
		// add image to database 
		$config['upload_path'] = './assets/products/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload->do_upload($image_name); 
		$this->update();
	}
	

	public function show_similar_products() {
		$this->load->model('Product');
		$record = $this->Product->get_product_by_id($this->input->post('product_id'));
		$this->Product->get_similar($record['category']);

		// returns partial with products within the same category
	}

	public function filter_for_users_pagination() {
		$search_terms = $this->input->post('search');
		$search = '%'.$search_terms.'%'; 
		// search to match categories 
		$categories = $this->input->post('category');
		$category = '%'.$categories.'%';
		//sort
		$sort = $this->input->post('sort');
		if (empty($sort)) $sort = 'id';
		//pagination
		$page = $this->input->post('page_number');
		if (empty($page)) $page = 0; 
		
		$subset_details = array(
			'search' => $search,
			'category' => $category,
			'sort' => $sort,
			'page' => $page
			);
		// var_dump($subset_details);

		$this->load->model('Product');
		$count = $this->Product->filter_for_users_pagination($subset_details);
		// var_dump($records);
		$this->load->view('users_partials/users_index_pagination', array('count' => $count));
	}

	public function filter_for_users() {
		// search terms to match Name
		$search_terms = $this->input->post('search');
		$search = '%'.$search_terms.'%'; 
		// search to match categories 
		$categories = $this->input->post('category');
		$category = '%'.$categories.'%';
		//sort
		$sort = $this->input->post('sort');
		if (empty($sort)) $sort = 'id';
		//pagination
		$page = $this->input->post('page_number');
		if (empty($page)) $page = 0; 
		
		$subset_details = array(
			'search' => $search,
<<<<<<< HEAD
			'category' => $category,
			'sort' => $sort,
=======
			'category' => $category, 
>>>>>>> admin
			'page' => $page
			);
		// var_dump($subset_details);
		// Set session info for go back method
		// $this->session->set_userdata('filter', $subset_details);
		// var_dump($this->session->userdata('filter'));

		$this->load->model('Product');
		$records = $this->Product->filter_for_users($subset_details);
		// var_dump($records);
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

	public function show_categories() {
		$this->load->model('Product');
		$records = $this->Product->get_categories();

		$this->load->view('users_partials/categories', array('records' => $records));
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

<<<<<<< HEAD
	public function index() {
		// if ($this->session->userdata('filter')) $this->load->view('users_index', $this->session->userdata('filter'));
		$this->load->view('users_index');
	}
}
=======
	public function admin_index() {
		$this->load->view('admin_products_dash');
	}

	public function admin_show_all() {		
		$this->load->view('admin_partials/modal');
	}
}

//end of main controller
>>>>>>> admin

