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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//routing mahasiswa auth
$route['course/auth'] 			 = "web/login_mhs";
$route['course/forgot-password'] = "web/forgot_password";

/* routing auth dosen */
$route['course/dosen'] = "web/dosen";
$route['course/dosen/auth'] = "web/login_dosen";

/* routing fakultas teknologi informasi */
$route['fakultas-teknologi-informasi'] = "web/fti";
$route['fakultas-teknologi-informasi/sistem-informasi/login']   = "web/fti/login_si";
$route['fakultas-teknologi-informasi/teknik-informatika/login']   = "web/fti/login_ti";

/* routing fakultas agama islam */
$route['fakultas-agama-islam'] = "web/fai";
$route['fakultas-agama-islam/pendidikan-agama-islam/login'] = "web/fai/login_pai";
$route['fakultas-agama-islam/pendidikan-bahasa-arab/login'] = "web/fai/login_pba";
$route['fakultas-agama-islam/ekonomi-syariah/login'] = "web/fai/login_es";

/* routing fakultas ekonomi */
$route['fakultas-ekonomi'] = "web/fe";
$route['fakultas-ekonomi/manajemen/login'] = "web/fe/login_fe";

/* routing fakultas pertanian */
$route['fakultas-pertanian'] = "web/fp";
$route['fakultas-pertanian/agribisnis/login'] = "web/fp/login_agribisnis";
$route['fakultas-pertanian/agroekoteknologi/login'] = "web/fp/login_agroekoteknologi";
$route['fakultas-pertanian/teknik-pertanian/login'] = "web/fp/login_teknik_pertanian";

/* routing fakultas ilmu pendidikan */
$route['fakultas-ilmu-pendidikan'] ="web/fip";
$route['fakultas-ilmu-pendidikan/pendidikan-biologi/login'] ="web/fip/login_pb";
$route['fakultas-ilmu-pendidikan/pendidikan-fisika/login'] ="web/fip/login_pf";
$route['fakultas-ilmu-pendidikan/pendidikan-matematika/login'] ="web/fip/login_pm";
$route['fakultas-ilmu-pendidikan/pendidikan-bahasa-inggris/login'] ="web/fip/login_pbi";

