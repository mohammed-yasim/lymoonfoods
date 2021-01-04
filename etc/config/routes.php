<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'lymoon';
$route['products'] = 'lymoon/products';
$route['products/(:any)'] = 'lymoon/products/$1';
$route['career'] = 'lymoon/career';
$route['404_override'] = 'lymoon';
$route['translate_uri_dashes'] = FALSE;
