<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Profil Desa',
            'page' => 'profil'
        ];
        return view('layout', $data);
    }
}
