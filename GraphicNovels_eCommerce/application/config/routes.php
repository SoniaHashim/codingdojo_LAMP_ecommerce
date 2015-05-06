<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['404_override'] = '';

//end of routes.php
$route['admin'] = 'admins';
$route['/products/show/(:num)'] = 'products/show/$1';
$route['/products/index'] = "products";