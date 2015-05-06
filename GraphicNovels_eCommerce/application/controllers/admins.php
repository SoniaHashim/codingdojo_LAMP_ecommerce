<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}
	public function index() {
		$this->load->view('admin_login');
	}

	public function login() {
		// $this->input->post();
		$admin_details = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password')
		); 

		$this->load->model('Admin');
		$isValid = $this->Admin->login($admin_details); 

		if ($isValid) $this->load->view('admin_orders_dash');
		else echo 'Error: Unable to login - incorrect email / password combination.'; 
	}

	public function log_off() {
		redirect('/admins');
	}

}

//end of main controller