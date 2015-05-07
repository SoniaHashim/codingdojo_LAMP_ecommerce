<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['/products/show/(:num)'] = 'products/show/$1';
$route['/products/index'] = "products";

$route['admin'] = 'admins';
// $route['admins/login'] = '/orders';
// $route['admin/orders'] = '/orders/get_page';
$route['jvmain'] = '/jvmain';
// $route['admins/login']
// $route['default_controller2'] = "jvmain";
$route['404_override'] = '';

//end of routes.php
