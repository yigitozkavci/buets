<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';
$route['home'] = "home";

/* Admin */
$route['admin'] = "admin";
$route['admin/login'] = "admin/login";
$route['admin/addEvent'] = "admin/add_event";
$route['admin/editEvent/(:any)'] = "admin/edit_event/$1";
$route['admin/deleteEvent/(:any)'] = "admin/delete_event/$1";
$route['admin/addOrganizator'] = "admin/add_organizator";
$route['admin/editOrganizator/(:any)'] = "admin/edit_organizator/$1";
$route['admin/deleteOrganizator/(:any)'] = "admin/delete_organizator/$1";
$route['admin/addPlace'] = "admin/add_place";
$route['admin/editPlace/(:any)'] = "admin/edit_place/$1";
$route['admin/deletePlace/(:any)'] = "admin/delete_place/$1";
$route['admin/addTag'] = "admin/add_tag";
$route['admin/editTag/(:any)'] = "admin/edit_tag/$1";
$route['admin/deleteTag/(:any)'] = "admin/delete_tag/$1";

/* Webservices */
$route['api/v1/events'] = "webservices/events";
$route['api/v1/events/(:any)'] = "webservices/events/$1";
$route['api/v1/organizators'] = "webservices/organizators";
$route['api/v1/organizators/(:any)'] = "webservices/organizators/$1";
$route['api/v1/places'] = "webservices/places";
$route['api/v1/places/(:any)'] = "webservices/places/$1";
$route['api/v1/tags'] = "webservices/tags";
$route['api/v1/tags/(:any)'] = "webservices/tags/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */