<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\UserModel;


class Auth extends BaseController
{
    public function index(): string
    {
        helper(['form']);
        return view('login');
    }


    public function aksi()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        $data = $userModel->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $cek = $password == $pass;
            if ($cek) {
                $ses_data = [
                    'id' => $data['id'],
                    'nama' => $data['nama_user'],
                    'username' => $data['username'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/admin');
            } else {
                $session->setFlashdata('msg', 'Password yang dimasukkan tidak sesuai.');
                return redirect()->to('/auth');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ditemukan.');
            return redirect()->to('/auth');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth');
    }
}
