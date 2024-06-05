<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesanan;
use CodeIgniter\HTTP\ResponseInterface;

class Pesanan extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $pesanan = $this->db->table('pesanan')->get()->getResult();
        $data = [
            'pesanan' => $pesanan,
            'title' => 'Admin - Pesanan',
            'sidebar' => 'pesanan',
            'page' => 'admin/pesanan/index'
        ];
        return view('admin/layout_admin', $data);
    }

    public function edit($id)
    {
        $model = new ModelPesanan();
        helper('form');
        $pesanan = $model->pilihPesanan($id)->getRow();

        // var_dump($galeri);
        $data = [
            'pesanan' => $pesanan,
            'title' => 'Pesanan - Edit Status',
            'sidebar' => 'pesanan',
            'page' => 'admin/pesanan/edit'
        ];

        return view('admin/layout_admin', $data);
    }

    public function aksi_edit()
    {
        $model = new ModelPesanan();
        helper('form');

        $id = $this->request->getPost('id');
        $data = [
            'status'  => $this->request->getPost('status'),
        ];

        $model->edit_data($id, $data);
        return redirect()->to('pesanan')->with('berhasil', 'Data Berhasil di Ubah');
    }

    public function delete($id)
    {
        $this->db->table('pesanan')->delete(array('id' => $id));

        return redirect()->to('pesanan')->with('berhasil', 'Data Berhasil dihapus');
    }
}
