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

    public function profil(): string
    {
        $data = [
            'title' => 'Admin - Profil',
            'sidebar' => 'profil',

            'page' => 'admin/profil'
        ];
        return view('admin/layout_admin', $data);
    }
}
