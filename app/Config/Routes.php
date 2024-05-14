<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->get('/', 'Home::index');
$routes->get('/galeri', 'Galeri::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/destinasi', 'Destinasi::index');
$routes->get('/paket', 'Paket::index');
$routes->get('/potensi', 'Potensi::index');
$routes->get('/profil', 'Profil::index');
