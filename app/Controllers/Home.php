<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index(): string
    {
        $data = [
            'judul' => 'Home',
            'page' => 'home'
        ];
        return view('layout', $data);
    }

    public function galeri(): string
    {
        $galeri = $this->db->table('galeri')->get()->getResult();

        $data = [
            'galeri' => $galeri,
            'judul' => 'Galeri',
            'page' => 'galeri'
        ];
        return view('layout', $data);
    }

    public function destinasi(): string
    {
        $destinasi = $this->db->table('destinasi')->get()->getResult();

        $data = [
            'destinasi' => $destinasi,
            'judul' => 'Destinasi Wisata',
            'page' => 'destinasi'
        ];
        return view('layout', $data);
    }

    public function paket(): string
    {
        $data = [
            'judul' => 'Paket Wisata',
            'page' => 'paket'
        ];
        return view('layout', $data);
    }

    public function potensi(): string
    {
        $data = [
            'judul' => 'Potensi Desa',
            'page' => 'potensi'
        ];
        return view('layout', $data);
    }

    public function profil(): string
    {
        $data = [
            'judul' => 'Profil Desa',
            'page' => 'profil'
        ];
        return view('layout', $data);
    }
}
