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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';


$route['services/online'] = 'services/index';
$route['services/corporate'] = 'services/index';
$route['services/class_room'] = 'services/index';
$route['services/college'] = 'services/index';
$route['services/istqb_certificate'] = 'services/index';
$route['services/recruitment'] = 'services/index';

//admin settings
$route['admin'] = 'user/index';
$route['admin/signup'] = 'user/signup';
$route['admin/create_member'] = 'user/create_member';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/batches/update/:num'] = 'admin_batches/update/$1';
$route['admin/batches/delete/:num'] = 'admin_batches/delete/$1';
$route['admin/batches/:num'] = 'admin_batches/index';
$route['admin/batches/update'] = 'admin_batches/update';
$route['admin/batches/delete'] = 'admin_batches/delete';
$route['admin/batches'] = 'admin_batches/index';
$route['admin/batches/add'] = 'admin_batches/add';

$route['admin/latest_updates'] = 'admin_latest_updates/index';
$route['admin/latest_updates/add'] = 'admin_latest_updates/add';
$route['admin/latest_updates/update/:num'] = 'admin_latest_updates/update/$1';
$route['admin/latest_updates/delete/:num'] = 'admin_latest_updates/delete/$1';
$route['admin/latest_updates/update'] = 'admin_latest_updates/update';
$route['admin/latest_updates/delete'] = 'admin_latest_updates/delete';

$route['admin/menus'] = 'admin_menus/index';
$route['admin/menus/add'] = 'admin_menus/add';
$route['admin/menus/update'] = 'admin_menus/update';
$route['admin/menus/delete'] = 'admin_menus/delete';

$route['admin/sub_menus'] = 'admin_sub_menus/index';
$route['admin/sub_menus/add'] = 'admin_sub_menus/add';


$route['admin/faculties/update/:num'] = 'admin_faculties/update/$1';
$route['admin/faculties/delete/:num'] = 'admin_faculties/delete/$1';
$route['admin/faculties/:num'] = 'admin_faculties/index';
$route['admin/faculties/update'] = 'admin_faculties/update';
$route['admin/faculties/delete'] = 'admin_faculties/delete';
$route['admin/faculties'] = 'admin_faculties/index';
$route['admin/faculties/add'] = 'admin_faculties/add';


$route['admin/testimonials/update/:num'] = 'admin_testimonials/update/$1';
$route['admin/testimonials/delete/:num'] = 'admin_testimonials/delete/$1';
$route['admin/testimonials/:num'] = 'admin_testimonials/index';
$route['admin/testimonials/update'] = 'admin_testimonials/update';
$route['admin/testimonials/delete'] = 'admin_testimonials/delete';
$route['admin/testimonials'] = 'admin_testimonials/index';
$route['admin/testimonials/add'] = 'admin_testimonials/add';


$route['admin/clients/update/:num'] = 'admin_clients/update/$1';
$route['admin/clients/delete/:num'] = 'admin_clients/delete/$1';
$route['admin/clients/:num'] = 'admin_clients/index';
$route['admin/clients/update'] = 'admin_clients/update';
$route['admin/clients/delete'] = 'admin_clients/delete';
$route['admin/clients'] = 'admin_clients/index';
$route['admin/clients/add'] = 'admin_clients/add'; //$1 = page number

$route['admin/news/update/:num'] = 'admin_news/update/$1';
$route['admin/news/delete/:num'] = 'admin_news/delete/$1';
$route['admin/news/:num'] = 'admin_news/index';
$route['admin/news/update'] = 'admin_news/update';
$route['admin/news/delete'] = 'admin_news/delete';
$route['admin/news'] = 'admin_news/index';
$route['admin/news/add'] = 'admin_news/add';

$route['admin/courses'] = 'admin_courses/index';
$route['admin/courses/edit'] = 'admin_courses/edit/$1';
$route['admin/courses/delete'] = 'admin_courses/delete/$1';
$route['admin/courses/add'] = 'admin_courses/add';

$route['admin/testimonial'] = 'admin_testimonial/index';
$route['admin/contcat_list'] = 'admin_contact_list/index';
$route['admin/contcat_list/delete'] = 'admin_contact_list/delete';

/* Dynamic Module*/

$route['admin/settings'] = 'admin_settings/index';
$route['admin/settings/edit'] = 'admin_settings/edit/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
