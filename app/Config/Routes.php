<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->group('auth', function($routes){
    $routes->get('/', 'Auth::register');
    $routes->get('login', 'Auth::login');
    $routes->get('adminLogin', 'Auth::adminLogin');
    $routes->get('register', 'Auth::register');
    $routes->post('login', 'Auth::allowLogin');
    $routes->post('adminLogin', 'Auth::allowAdminLogin');
    $routes->post('register', 'Auth::registerCustomer');
});
$routes->group('users', function($routes){
    $routes->get('/', 'Users::home');
    $routes->get('home', 'Users::home');
    $routes->get('subcategories', 'Users::subcategories');
    $routes->get('oldhome', 'Users::oldhome');
    $routes->get('logout', 'Users::logout');
    $routes->get('test', 'Users::test');
});
$routes->group('admin', function($routes){
    $routes->get('/', 'Admin::home');
    $routes->get('home', 'Admin::home');
    $routes->get('logout', 'Admin::logout');
    $routes->get('addCategory', 'Admin::addCategory');
    $routes->get('editCategory', 'Admin::editCategory');
    $routes->get('addProduct', 'Admin::addProduct');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
