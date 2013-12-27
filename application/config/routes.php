<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/////////////////front area///////////////////////
$route['default_controller'] = 'frontarea/home';
$route['404_override'] = '';

//Begin:  Admin Area
$route['home'] = 'frontarea/home';
$route['([home][a-z_]+)'] = 'frontarea/$1';
$route['([home][a-z_]+)/(:any)'] = 'frontarea/$1/$2';
$route['([home][a-z_]+)/(:any)/(:any)'] = 'frontarea/$1/$2/$3';
//End : Admin Area

//Begin:  Admin Area
$route['admin'] = 'adminarea/adminlogin';
$route['([admin][a-z_]+)'] = 'adminarea/$1';
$route['([admin][a-z_]+)/(:any)'] = 'adminarea/$1/$2';
$route['([admin][a-z_]+)/(:any)/(:any)'] = 'adminarea/$1/$2/$3';
//End : Admin Area


