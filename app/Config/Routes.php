<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Front');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Front::index');
$routes->get('register', 'Front::register');
$routes->get('login', 'Front::login');
$routes->get('logout', 'Front::logout');
$routes->get('dashboard/books', 'Front::partnerbooks');
$routes->get('books', 'Front::books');
$routes->get('dashboard', 'Front::dashboard');
$routes->get('dashboard/messages/inbox', 'Front::messagesinbox');
$routes->get('dashboard/messages/sent', 'Front::messagessent');
$routes->get('dashboard/messages/drafts', 'Front::messagesdrafts');
$routes->get('dashboard/messages/trash', 'Front::messagestrash');
$routes->get('about-us', 'Front::about');
$routes->get('orders', 'Front::orders');
$routes->get('partner/book', 'Front::partnerbook');
$routes->post('addtocart', 'Front::addtocart');
$routes->get('cart', 'Front::cart');
$routes->get('forgot', 'Front::forgot');


$routes->get('message/read/(:any)', 'Front::messageread/$1');
$routes->get('dashboard/book/(:any)', 'Front::partnerbook/$1');
$routes->get('personalize/(:any)', 'Front::personalize/$1');
$routes->post('personalize-book/(:any)', 'Front::personalizeaction/$1');
$routes->get('preview/(:any)', 'Front::preview/$1');
$routes->post('preview/(:any)', 'Front::preview/$1');




/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
