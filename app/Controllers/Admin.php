<?php

namespace App\Controllers;

use App\Models\ModelDestinasi;
use App\Models\ModelPaket;

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





    public function paket()
    {
        $model = new ModelPaket();
        $paket = $model->getData();
        $data = [
            'paket' => $paket,
            'title' => 'Admin - Paket',
            'sidebar' => 'paket',

            'page' => 'admin/paket'
        ];
        return view('admin/layout_admin', $data);
        // var_dump($paket);
    }


    public function add_paket(): string
    {
        $data = [
            'title' => 'Paket - Tambah',
            'sidebar' => 'paket',
            'page' => 'admin/paket/tambah'
        ];
        return view('admin/layout_admin', $data);
    }

    public function save_paket()
    {
        helper('form');
        $data = array(
            'nama_paket'  => $this->request->getPost('nama_paket'),
            'harga' => $this->request->getPost('harga'),
        );
        $this->db->table('paket')->insert($data);

        return redirect()->to('admin/paket')->with('berhasil', 'Data Berhasil di Simpan');
    }


    public function edit_paket($id)
    {
        $model = new ModelPaket();
        helper('form');
        $paket = $model->pilihPaket($id)->getRow();

        // var_dump($paket);
        $data = [
            'paket' => $paket,
            'title' => 'Paket - Tambah',
            'sidebar' => 'paket',
            'page' => 'admin/paket/edit'
        ];
        return view('admin/layout_admin', $data);
    }

    public function aksi_edit_paket()
    {
        helper('form');
        $model = new ModelPaket();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_paket'  => $this->request->getPost('nama_paket'),
            'harga' => $this->request->getPost('harga'),
        );

        $model->edit_paket($id, $data);
        return redirect()->to('admin/paket')->with('berhasil', 'Data Berhasil di Ubah');
        // var_dump($id);
    }

    public function delete_paket($id)
    {
        $this->db->table('paket')->delete(array('id' => $id));
        return redirect()->to('admin/paket')->with('berhasil', 'Data Berhasil di Hapus');
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
