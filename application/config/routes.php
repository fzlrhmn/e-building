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


$route['404_override'] 					= '';
$route['default_controller'] 			= 'login';
$route['login/submit'] 					= "login/submit";
$route['logout'] 						= "login/logout";

/*
| -------------------------------------------------------------------------
| Bangunan
| -------------------------------------------------------------------------
*/
$route['bangunan/(:num)'] 				= 'bangunan/index/$1';
$route['bangunan/detail(:num)'] 		= 'bangunan/detail/$1';
$route['bangunan/ajax'] 				= 'bangunan/datatables_bangunan';
$route['bangunan/nomor/(:num)/(:num)'] 	= 'bangunan/get_nomor_bangunan/$1/$2';
$route['bangunan/submit'] 				= 'bangunan/submit';
$route['bangunan/update'] 				= 'bangunan/edit';
$route['bangunan/search'] 				= 'bangunan/search';

/*
| -------------------------------------------------------------------------
| Administrasi (Kecamatan dan Kelurahan)
| -------------------------------------------------------------------------
*/
$route['kecamatan'] 					= 'kecamatan/index';
$route['kecamatan/(:num)'] 				= 'kecamatan/index/$1';
$route['kelurahan'] 					= 'kelurahan/get_kelurahan';
$route['kelurahan/kecamatan/(:num)'] 	= 'kelurahan/get_kelurahan_by_kecamatan/$1';

/*
| -------------------------------------------------------------------------
| Peruntukan Tanah
| -------------------------------------------------------------------------
*/
$route['tanah'] 						= 'peruntukan_tanah/get_peruntukan_tanah';
$route['tanah/(:num)'] 					= 'peruntukan_tanah/get_peruntukan_tanah/$1';

/*
| -------------------------------------------------------------------------
| Peruntukan Ruang
| -------------------------------------------------------------------------
*/
$route['ruang'] 						= 'peruntukan_ruang/get_peruntukan_ruang';
$route['ruang/(:num)'] 					= 'peruntukan_ruang/get_peruntukan_ruang/$1';


/* End of file routes.php */
/* Location: ./application/config/routes.php */