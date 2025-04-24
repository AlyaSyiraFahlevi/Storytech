<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman utama
$routes->get('/', 'Home::index');

// Halaman About
$routes->get('/about', 'Pages::about');

// Halaman How
$routes->get('/how', 'Pages::how');
