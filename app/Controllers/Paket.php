<?php

namespace App\Controllers;

class Paket extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Paket Wisata',
            'page' => 'paket'
        ];
        return view('layout', $data);
    }
}
