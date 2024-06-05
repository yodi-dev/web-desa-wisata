<?php

namespace App\Controllers;

use App\Models\ModelDestinasi;

class Admin extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Admin - Dashboard',
            'sidebar' => 'dashboard',
            'page' => 'admin/dashboard'
        ];
        return view('admin/layout_admin', $data);
    }

    public function potensi(): string
    {
        $data = [
            'title' => 'Admin - Potensi',
            'sidebar' => 'potensi',

            'page' => 'admin/potensi'
        ];
        return view('admin/layout_admin', $data);
    }
}
