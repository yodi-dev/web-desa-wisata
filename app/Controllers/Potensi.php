<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPotensi;
use CodeIgniter\HTTP\ResponseInterface;

class Potensi extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $potensi = $this->db->table('potensi')->get()->getResult();
        $data = [
            'potensi' => $potensi,
            'title' => 'Admin - Potensi',
            'sidebar' => 'potensi',
            'page' => 'admin/potensi/index'
        ];
        return view('admin/layout_admin', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Potensi - Tambah',
            'sidebar' => 'potensi',
            'page' => 'admin/potensi/tambah'
        ];
        return view('admin/layout_admin', $data);
    }
    public function save()
    {
        helper('form');

        $data = array(
            'nama_potensi'  => $this->request->getPost('nama_potensi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        );
        $this->db->table('potensi')->insert($data);

        return redirect()->to('potensi')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function edit($id)
    {
        $model = new ModelPotensi();
        helper('form');
        $potensi = $model->pilihPotensi($id)->getRow();

        // var_dump($potensi);
        $data = [
            'potensi' => $potensi,
            'title' => 'Potensi - Edit',
            'sidebar' => 'potensi',
            'page' => 'admin/potensi/edit'
        ];
        return view('admin/layout_admin', $data);
    }

    public function aksi_edit()
    {
        helper('form');
        $model = new ModelPotensi();
        $id = $this->request->getPost('id');

        $data = array(
            'nama_potensi'  => $this->request->getPost('nama_potensi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        );
        $model->edit_data($id, $data);
        return redirect()->to('potensi')->with('berhasil', 'Data Berhasil di Ubah');
    }

    public function delete($id)
    {
        $this->db->table('potensi')->delete(array('id' => $id));

        return redirect()->to('potensi')->with('berhasil', 'Data Berhasil dihapus');
    }
}
