<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth', 'Auth::index');
$routes->match(['get', 'post'], 'auth/aksi', 'Auth::aksi');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin', 'Admin::index');

$routes->get('/admin/galeri', 'Admin::galeri');
$routes->get('/admin/tambah_galeri', 'Admin::add_galeri');
$routes->post('/admin/simpan_galeri', 'Admin::save_galeri');
$routes->get('/admin/hapus_galeri/(:segment)', 'Admin::delete_galeri/$1');

$routes->get('/admin/destinasi', 'Admin::destinasi');
$routes->get('/admin/tambah_destinasi', 'Admin::add_destinasi');
$routes->post('/admin/simpan_destinasi', 'Admin::save_destinasi');
$routes->add('/edit_destinasi/(:segment)', 'Admin::edit_destinasi/$1');
$routes->post('/admin/aksi_edit_destinasi', 'Admin::aksi_edit_destinasi');
$routes->get('/admin/hapus_destinasi/(:segment)', 'Admin::delete_destinasi/$1');

$routes->get('/admin/paket', 'Admin::paket');
$routes->get('/admin/profil', 'Admin::profil');

$routes->get('/', 'Home::index');
$routes->get('/home/galeri', 'Home::galeri');
$routes->get('/home/destinasi', 'Home::destinasi');
$routes->get('/home/paket', 'Home::paket');
$routes->get('/home/potensi', 'Home::potensi');
$routes->get('/home/profil', 'Home::profil');
