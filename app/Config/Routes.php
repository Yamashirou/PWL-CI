<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/front', 'Home::index');
$routes->get('/front/(:any)', 'Home::index/$1');
$routes->get('/kategori', 'CategoryController::index');
$routes->get('/kategori', 'CategoryController::index');
$routes->get('/kategori/alat_tulis', 'CategoryController::alat_tulis');
$routes->get('/kategori/elektronik', 'CategoryController::elektronik');
$routes->get('/kategori/pakaian', 'CategoryController::pakaian');
$routes->get('/kategori/pertukangan', 'CategoryController::pertukangan');
$routes->get('/kategori/snack', 'CategoryController::snack');
