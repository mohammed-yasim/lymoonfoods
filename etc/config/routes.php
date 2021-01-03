<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'lymoon';
$route['products'] = 'lymoon/products';
$route['products/:any'] = 'lymoon/products';
$route['career'] = 'lymoon/career';
$route['404_override'] = 'lymoon';
$route['translate_uri_dashes'] = FALSE;
