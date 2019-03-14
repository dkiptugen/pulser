<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 	'home';
$route['404_override'] 				= 	'';
$route['translate_uri_dashes'] 		= 	FALSE;
$route['article/(:num)/(:any)'] 	= 	'home/article/$1/$2';
$route['video/(:num)/(:any)'] 		= 	'home/video/$1/$2';
$route['category/(:num)/(:any)'] 	= 	'home/category/$1/$2';
$route['all-access']				= 	'home/videos';
$route['pixels']					= 	'home/photos';
