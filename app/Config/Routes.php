<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Pages::index');
// $routes->get('/about', 'Pages::about');
// $routes->get('/contact', 'Pages::contact');

$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');
$routes->get('/books', 'Books::index');
$routes->get('/books/create', 'Books::create');
$routes->post('/books/save', 'Books::save');

$routes->post('/books/update/(:num)', 'Books::update/$1');
$routes->get('/books/edit/(:segment)', 'Books::edit/$1');
$routes->delete('/books/(:num)', 'Books::delete/$1');
$routes->get('/books/(:any)', 'Books::detail/$1');
$routes->get('/penulis', 'Penulis::index');
$routes->post('penulis', 'Penulis::index');
