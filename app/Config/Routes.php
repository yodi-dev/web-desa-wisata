<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth', 'Auth::index');
$routes->match(['get', 'post'], 'auth/aksi', 'Auth::aksi');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin', 'Admin::index');

$routes->group('galeri', static function ($routes) {
    $routes->get('', 'Galeri::index');
    $routes->get('tambah', 'Galeri::add');
    $routes->post('simpan', 'Galeri::save');
    $routes->post('aksi_edit', 'Galeri::aksi_edit');
    $routes->get('hapus/(:segment)', 'Galeri::delete/$1');
});
$routes->add('/galeri_edit/(:segment)', 'Galeri::edit/$1');

$routes->group('destinasi', static function ($routes) {
    $routes->get('', 'Destinasi::index');
    $routes->get('tambah', 'Destinasi::add');
    $routes->post('simpan', 'Destinasi::save');
    $routes->post('aksi_edit', 'Destinasi::aksi_edit');
    $routes->get('hapus/(:segment)', 'Destinasi::delete/$1');
});
$routes->add('destinasi_edit/(:segment)', 'Destinasi::edit/$1');

$routes->get('/admin/paket', 'Admin::paket');
$routes->get('/admin/tambah_paket', 'Admin::add_paket');
$routes->post('/admin/simpan_paket', 'Admin::save_paket');
$routes->add('/edit_paket/(:segment)', 'Admin::edit_paket/$1');
$routes->post('/admin/aksi_edit_paket', 'Admin::aksi_edit_paket');
$routes->get('/admin/hapus_paket/(:segment)', 'Admin::delete_paket/$1');

$routes->get('/admin/profil', 'Admin::profil');
$routes->get('/', 'Home::index');
$routes->get('/home/galeri', 'Home::galeri');
$routes->get('/home/destinasi', 'Home::destinasi');
$routes->get('/home/paket', 'Home::paket');
$routes->get('/home/potensi', 'Home::potensi');
$routes->get('/home/profil', 'Home::profil');
