<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelPaket;


class Paket extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $model = new ModelPaket();
        $paket = $model->getData();
        $data = [
            'paket' => $paket,
            'title' => 'Admin - Paket',
            'sidebar' => 'paket',

            'page' => 'admin/paket/index'
        ];
        return view('admin/layout_admin', $data);
        // var_dump($paket);
    }


    public function add(): string
    {
        $data = [
            'title' => 'Paket - Tambah',
            'sidebar' => 'paket',
            'page' => 'admin/paket/tambah'
        ];
        return view('admin/layout_admin', $data);
    }

    public function save()
    {
        helper('form');
        $data = array(
            'nama_paket'  => $this->request->getPost('nama_paket'),
            'harga' => $this->request->getPost('harga'),
            'keterangan' => $this->request->getPost('keterangan'),
        );
        $this->db->table('paket')->insert($data);

        return redirect()->to('paket')->with('berhasil', 'Data Berhasil di Simpan');
    }


    public function edit($id)
    {
        $model = new ModelPaket();
        helper('form');
        $paket = $model->pilihPaket($id)->getRow();

        // var_dump($paket);
        $data = [
            'paket' => $paket,
            'title' => 'Paket - Edit',
            'sidebar' => 'paket',
            'page' => 'admin/paket/edit'
        ];
        return view('admin/layout_admin', $data);
    }

    public function aksi_edit()
    {
        helper('form');
        $model = new ModelPaket();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_paket'  => $this->request->getPost('nama_paket'),
            'harga' => $this->request->getPost('harga'),
            'keterangan' => $this->request->getPost('keterangan'),
        );

        $model->edit_paket($id, $data);
        return redirect()->to('paket')->with('berhasil', 'Data Berhasil di Ubah');
        // var_dump($id);
    }

    public function detail($id)
    {
        $model = new ModelPaket();
        helper('form');
        $paket = $model->pilihPaket($id)->getRow();
        $destinasi = $model->data_destinasi($id);
        $all_destinasi = $model->all_destinasi();

        // var_dump($paket);
        // var_dump($destinasi);
        // var_dump($all_destinasi);
        $data = [
            'paket' => $paket,
            'destinasi' => $destinasi,
            'all_destinasi' => $all_destinasi,
            'title' => 'Paket - Tambah',
            'sidebar' => 'paket',
            'page' => 'admin/paket/detail'
        ];
        return view('admin/layout_admin', $data);
    }

    public function delete($id)
    {
        $this->db->table('paket')->delete(array('id' => $id));
        return redirect()->to('paket')->with('berhasil', 'Data Berhasil di Hapus');
    }
}
