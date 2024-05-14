<?php

namespace App\Controllers;

class Potensi extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Potensi Desa',
            'page' => 'potensi'
        ];
        return view('layout', $data);
    }
}
