<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['users'] = 'users/index';
// $route['users/create'] = 'users/create';
// $route['users/edit/(:any)'] = 'users/edit/$1';
// $route['users/update/(:any)'] = 'users/update/$1';
// $route['users/delete/(:any)'] = 'users/delete/$1';

// $route['code_types'] = 'code_types/index';
// $route['code_types/create'] = 'code_types/create';
// $route['code_types/edit/(:any)'] = 'code_types/edit/$1';
// $route['code_types/update/(:any)'] = 'code_types/update/$1';
// $route['code_types/delete/(:any)'] = 'code_types/delete/$1';

// $route['code_values'] = 'code_values/index';
// $route['code_values/create'] = 'code_values/create';
// $route['code_values/edit/(:any)'] = 'code_values/edit/$1';
// $route['code_values/update/(:any)'] = 'code_values/update/$1';
// $route['code_values/delete/(:any)'] = 'code_values/delete/$1';

// $route['entities'] = 'entities/index';
// $route['entities/create'] = 'entities/create';
// $route['entities/edit/(:any)'] = 'entities/edit/$1';
// $route['entities/update/(:any)'] = 'entities/update/$1';
// $route['entities/delete/(:any)'] = 'entities/delete/$1';

// $route['roles'] = 'roles/index';
// $route['roles/create'] = 'roles/create';
// $route['roles/edit/(:any)'] = 'roles/edit/$1';
// $route['roles/update/(:any)'] = 'roles/update/$1';
// $route['roles/delete/(:any)'] = 'roles/delete/$1';

// $route['role_permissions'] = 'role_permissions/index';
// $route['role_permissions/create'] = 'role_permissions/create';
// $route['role_permissions/edit/(:any)'] = 'role_permissions/edit/$1';
// $route['role_permissions/update/(:any)'] = 'role_permissions/update/$1';
// $route['role_permissions/delete/(:any)'] = 'role_permissions/delete/$1';

// $route['users_regions'] = 'users_regions';