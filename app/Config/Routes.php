<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

<<<<<<< HEAD
// login 
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

//  admin 
$routes->get('admin', 'Inovasi::index');
$routes->get('admin/detail/(:any)', 'Inovasi::detail/$1');
$routes->get('admin/create', 'Inovasi::create');
$routes->post('admin/save', 'Inovasi::save');
$routes->delete('admin/delete/(:num)', 'Inovasi::delete/$1');
$routes->get('admin/edit/(:segment)', 'Inovasi::edit/$1');
$routes->post('/admin/update/(:num)', 'Inovasi::update/$1');

//  website
$routes->get('/', 'Home::index');
$routes->get('katalog-inovasi', 'Home::katalog_inovasi');
$routes->get('detail-inovasi/(:any)', 'Home::detail_inovasi/$1');
$routes->get('detail-inovasi', 'Home::detail_inovasi');
=======
// Halaman utama
$routes->get('/', 'Home::index');

// Halaman About
$routes->get('/about', 'Pages::about');

// Halaman How
$routes->get('/how', 'Pages::how');
>>>>>>> 501ddbc776e7ca432afabfdb0680046a56874a91
