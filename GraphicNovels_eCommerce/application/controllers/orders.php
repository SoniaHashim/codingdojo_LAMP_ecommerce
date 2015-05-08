<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->load->model('Order');
		// $res['data'] = $this->Order->get_all();
		$this->load->view('admin_orders_dash');
	}

	public function create() {
		// calculate total for appropriate cart, acquire products in cart, destroy cart
		$this->load->model('Cart'); 
		$total = $this->Cart->get_total_by_id($this->input->post('cart_id'));
		$products = $this->Cart->get_products_by_id($this->input->post('cart_id'));
		$this->Cart->destroy_by_id($this->input->post('cart_id'));

		// charge appropriate card using STRIPE API
		\Stripe\Stripe::setApiKey("sk_test_BQokikJOvBiI2HlWgH4olfQ2");

		$token = \Stripe\Token::create(array(
		  "card" => array(
		    "number" => $this->input->post('card'),
		    "exp_month" => $this->input->post('month'),
		    "exp_year" => $this->input->post('year'),
		    "cvc" => $this->input->post('security')
		  )
		));

		$ch = \Stripe\Charge::create(array(
		  "amount" => $total, 
		  "currency" => "usd",
		  "source" => $token['id'], 
		  "description" => "Charge for order id = ".$this->input->post('id')
		));

		$ch->capture();

		// store addresses 
		$billing_address = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'address' => $this->input->post('address'),
			'address2' => $this->input->post('address2'),
			'zip' => $this->input->post('zip'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state')
		);

		$shipping_address = array(
			'first_name' => $this->input->post('bill_first_name'),
			'last_name' => $this->input->post('bill_last_name'),
			'address' => $this->input->post('bill_address'),
			'address2' => $this->input->post('bill_address2'),
			'zip' => $this->input->post('bill_zip'),
			'city' => $this->input->post('bill_city'),
			'state' => $this->input->post('bill_state')
		);

		$this->load->model('Order');
		$bill_id = $this->Order->create_address($billing_address); 
		$ship_id = $this->Order->create_address($shipping_address); 

		// create order - returns boolean true if successful, false otherwise 
		$order = array(
			'bill_id' => $bill_id,
			'ship_id' => $ship_id,
			'status' => 'Order in Process',
			'total' => $total
			);

		$this->Order->create($order, $products); 
	}

	public function show() {
		$this->load->model('Order'); 
		$record = $this->Order->get_order_by_id($this->input->post('id'));
		$products = $this->Order->get_products_by_order_id($this->input->post('id'));
		// should return a partial showing order information
		$this->load->view('/admin_partials/admin_show_order', array('record' => $record, 'products' => $products));
	}

	public function filter_by_search() {
		$this->load->model('Order'); 
		$subset_details = array();
		$subset_details['search'] = "%".$this->input->post('search')."%";
		$subset_details['page'] = $this->input->post('page_number');
		if (empty($subset_details['page'])) $subset_details['page']  = 0;
		$res['data'] = $this->Order->filter_by_search($subset_details);
		$this->load->view('admin_partials/orders_filter_status', $res);
		// should return a partial with appropriate results 
	}

	public function filter_by_status() {
		$this->load->model('Order');
		if($this->input->post('order_status') == 'show_all') {
			$this->show_all();
		}
		else {
			$res['data'] = $this->Order->filter_by_status($this->input->post());
			$this->load->view('admin_partials/orders_filter_status', $res);			
		}
	}

	public function get_page() {
		$this->load->model('Order');
		$page = $this->input->post('page');
		if(empty($page) || intval($page) == 1) {
			$page = 0;		
		}
		else {			
			$page = intval($page)-1;
		}
		$res['data'] = $this->Order->get_page($page);
		$this->load->view('admin_partials/orders_show_all', $res);
	}

	public function update() {
		// var_dump($this->input->post());
		// die();		

		$this->load->model('Order'); 
		$this->Order->change_status_by_id($this->input->post('id'), $this->input->post('status')); 

		// echo "yay";
		// $this->show_all();
		// Should return partial with updated status

	}

	public function show_all() {
		$this->load->model('Order');
		$res['data'] = $this->Order->get_all();
		$this->load->view('admin_partials/orders_show_all', $res);
		// should return a partial containing all order data 
	}


}
//end of main controller
