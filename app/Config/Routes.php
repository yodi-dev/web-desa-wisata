<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/auth', 'Auth::index');
$routes->match(['get', 'post'], 'auth/aksi', 'Auth::aksi');
$routes->get('/logout', 'Auth::logout');

$routes->get('/admin', 'Admin::index');

$routes->group('pesanan', static function ($routes) {
    $routes->get('', 'Pesanan::index');
    $routes->get('hapus/(:segment)', 'Pesanan::delete/$1');
    $routes->post('aksi_edit', 'Pesanan::aksi_edit');
});
$routes->add('/pesanan_edit/(:segment)', 'Pesanan::edit/$1');


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
    $routes->post('simpan_detail', 'Paket::simpan_detail');
    $routes->post('aksi_edit', 'Paket::aksi_edit');
    $routes->get('hapus/(:segment)', 'Paket::delete/$1');
});
$routes->add('/paket_edit/(:segment)', 'Paket::edit/$1');
$routes->add('/paket_detail/(:segment)', 'Paket::detail/$1');
$routes->add('paket_detail/tambah/(:segment)', 'Paket::tambah_detail/$1');
$routes->get('paket_detail/hapus_detail/(:segment)', 'Paket::delete_detail/$1');


$routes->group('potensi', static function ($routes) {
    $routes->get('', 'Potensi::index');
    $routes->get('tambah', 'Potensi::add');
    $routes->post('simpan', 'Potensi::save');
    $routes->post('aksi_edit', 'Potensi::aksi_edit');
    $routes->get('hapus/(:segment)', 'Potensi::delete/$1');
});
$routes->add('potensi_edit/(:segment)', 'Potensi::edit/$1');

// user routes
$routes->get('/', 'Home::index');
$routes->get('/home/galeri', 'Home::galeri');
$routes->get('/home/destinasi', 'Home::destinasi');
$routes->get('/detail_destinasi/(:segment)', 'Home::detail_destinasi/$1');
$routes->get('/home/paket', 'Home::paket');
$routes->get('/home/potensi', 'Home::potensi');
$routes->get('/home/profil', 'Home::profil');
$routes->add('/home/pesan/(:segment)', 'Home::pesan/$1');
$routes->add('home/pesanan', 'Home::pesanan');
$routes->add('home/pesan_berhasil', 'Home::pesan_berhasil');
