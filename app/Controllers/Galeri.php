<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGaleri;
use CodeIgniter\HTTP\ResponseInterface;

class Galeri extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index(): string
    {
        $galeri = $this->db->table('galeri')->get()->getResult();
        $data = [
            'galeri' => $galeri,
            'title' => 'Admin - Galeri',
            'sidebar' => 'galeri',
            'page' => 'admin/galeri/index'
        ];
        return view('admin/layout_admin', $data);
    }

    public function add(): string
    {
        $data = [
            'title' => 'Galeri - Tambah',
            'sidebar' => 'galeri',
            'page' => 'admin/galeri/tambah'
        ];
        return view('admin/layout_admin', $data);
    }

    public function save()
    {
        helper('form');
        $validation = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,4096]'
        ]);

        if ($validation == FALSE) {
            $data = array(
                'judul'  => $this->request->getPost('judul'),
            );
        } else {
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/assets/img/upload/');
            $data = array(
                'judul'  => $this->request->getPost('judul'),
                'gambar' => $upload->getName(),
            );
        }
        $this->db->table('galeri')->insert($data);

        return redirect()->to('galeri')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function edit($id)
    {
        $model = new ModelGaleri();
        helper('form');
        $galeri = $model->pilihGaleri($id)->getRow();

        // var_dump($galeri);
        $data = [
            'galeri' => $galeri,
            'title' => 'Galeri - Tambah',
            'sidebar' => 'galeri',
            'page' => 'admin/galeri/edit'
        ];

        return view('admin/layout_admin', $data);
    }

    public function aksi_edit()
    {
        $model = new ModelGaleri();
        helper('form');

        $id = $this->request->getPost('id');
        $validation = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,4096]'
        ]);

        if ($validation == FALSE) {
            $data = [
                'judul'  => $this->request->getPost('judul')
            ];
        } else {
            $model = new ModelGaleri();
            $dt = $model->pilihGaleri($id)->getRow();
            $gambar = $dt->gambar;
            $path = '../public/assets/img/upload/';
            unlink($path . $gambar);
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/assets/img/upload/');
            $data = [
                'judul'  => $this->request->getPost('judul'),
                'gambar' => $upload->getName(),
            ];
        }

        $model->edit_data($id, $data);
        return redirect()->to('galeri')->with('berhasil', 'Data Berhasil di Ubah');
    }

    public function delete($id)
    {
        $model = new ModelGaleri();
        $dt = $model->pilihGaleri($id)->getRow();

        if (!empty($gambar = $dt->gambar)) {
            $path = '../public/assets/img/upload/';
            unlink($path . $gambar);
        }
        $this->db->table('galeri')->delete(array('id' => $id));

        return redirect()->to('galeri')->with('berhasil', 'Data Berhasil di Hapus');
    }
}
