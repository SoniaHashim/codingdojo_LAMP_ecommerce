<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JvMain extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
		// $this->load->model('note');
	}

	public function index()
	{		
		// $this->load->view('admin_login');
		// $this->load->view('admin_orders_dash');
		// $this->load->view('admin_products_dash');
		// $this->load->view('admin_show_order');
		// $this->load->view('admin_update_product');
		$this->load->view('users_index');
		// $this->load->view('users_product_show');
		// $this->load->view('cart');
	}
}