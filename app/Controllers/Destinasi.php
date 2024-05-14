<?php

namespace App\Controllers;

class Destinasi extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Destinasi Wisata',
            'page' => 'destinasi'
        ];
        return view('layout', $data);
    }
}
