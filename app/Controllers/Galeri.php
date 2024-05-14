<?php

namespace App\Controllers;

class Galeri extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Galeri',
            'page' => 'galeri'
        ];
        return view('layout', $data);
    }
}
