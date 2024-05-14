<?php

namespace App\Controllers;

// $db = \Config\Database::connect();

class Login extends BaseController
{
    public function index(): string
    {
        $query = $db->query('SELECT nama_user FROM user LIMIT 1');
        $row   = $query->getRow();
        $data = [
            'judul' => 'Login',
            'nama' => $row->nama_user
        ];
        return view('login', $data);
    }

    public function Login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => '{field} Mohon diisi terlebih dahulu!'
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => '{field} Mohon diisi terlebih dahulu!'
            ]
        ])) {
            # code...
        } else {
            return redirect()->to('Login')->withInput();
        }
    }
}
