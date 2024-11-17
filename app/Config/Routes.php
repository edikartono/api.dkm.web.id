<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ImamKhotibController::index');
$routes->get('/imam-khotib', 'ImamKhotibController::index');
$routes->get('/imam-khotib/create', 'ImamKhotibController::create');
$routes->post('/imam-khotib/store', 'ImamKhotibController::store');
$routes->get('/imam-khotib/edit/(:num)', 'ImamKhotibController::edit/$1');
$routes->post('/imam-khotib/update/(:num)', 'ImamKhotibController::update/$1');
$routes->get('/imam-khotib/delete/(:num)', 'ImamKhotibController::delete/$1');

$routes->get('/jadwal', 'JadwalController::index');
$routes->get('/jadwal/create', 'JadwalController::create');
$routes->post('/jadwal/store', 'JadwalController::store');
$routes->get('/jadwal/edit/(:num)', 'JadwalController::edit/$1');
$routes->post('/jadwal/update/(:num)', 'JadwalController::update/$1');
$routes->get('/jadwal/delete/(:num)', 'JadwalController::delete/$1');


