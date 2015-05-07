<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['admin'] = 'admins';
$route['admins/login'] = '/orders';
$route['admin/orders'] = '/orders/get_page';
$route['jvmain'] = '/jvmain';
// $route['admins/login']
// $route['default_controller2'] = "jvmain";
$route['404_override'] = '';

//end of routes.php