<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Halaman Admin | Desa Wisata Bumi Arum',
            'judul' => 'Halaman Admin',
            'page' => 'admin/dashboard'
        ];
        return view('admin/layout_admin', $data);
    }
}
