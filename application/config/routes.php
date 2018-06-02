<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
Note to self - this pattern can cause conflicts if there are more than one controller.
Wildcard will mix up which view to serve up.
*/
$route['(:any)'] = 'main/$1';
