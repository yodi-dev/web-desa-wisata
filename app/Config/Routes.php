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

$routes->group('paket', static function ($routes) {
    $routes->get('', 'Paket::index');
    $routes->get('tambah', 'Paket::add');
    $routes->post('simpan', 'Paket::save');
    $routes->post('aksi_edit', 'Paket::aksi_edit');
    $routes->get('hapus/(:segment)', 'Paket::delete/$1');
});
$routes->add('/paket_edit/(:segment)', 'Paket::edit/$1');

$routes->get('/admin/profil', 'Admin::profil');
$routes->get('/', 'Home::index');
$routes->get('/home/galeri', 'Home::galeri');
$routes->get('/home/destinasi', 'Home::destinasi');
$routes->get('/home/paket', 'Home::paket');
$routes->get('/home/potensi', 'Home::potensi');
$routes->get('/home/profil', 'Home::profil');
