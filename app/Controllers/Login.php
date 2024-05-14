<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Login',
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
