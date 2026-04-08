<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/student', 'Student::index');
$routes->get('/student/create', 'Student::create');
$routes->post('/student/store', 'Student::store');
$routes->get('/student/edit/(:num)', 'Student::edit/$1');
$routes->post('/student/update/(:num)', 'Student::update/$1');
$routes->get('/student/delete/(:num)', 'Student::delete/$1');
