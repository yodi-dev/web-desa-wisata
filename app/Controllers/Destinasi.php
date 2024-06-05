<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelDestinasi;
use CodeIgniter\HTTP\ResponseInterface;

class Destinasi extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index(): string
    {
        $destinasi = $this->db->table('destinasi')->get()->getResult();
        $data = [
            'destinasi' => $destinasi,
            'title' => 'Admin - Destinasi',
            'sidebar' => 'destinasi',
            'page' => 'admin/destinasi/index'
        ];
        return view('admin/layout_admin', $data);
    }


    public function add(): string
    {
        $data = [
            'title' => 'Destinasi - Tambah',
            'sidebar' => 'destinasi',
            'page' => 'admin/destinasi/tambah'
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
                'nama_wisata'  => $this->request->getPost('nama_wisata'),
                'slug' => $this->request->getPost('slug'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'populer' => $this->request->getPost('populer')
            );
        } else {
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/assets/img/upload/');
            $data = array(
                'nama_wisata'  => $this->request->getPost('nama_wisata'),
                'slug' => $this->request->getPost('slug'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $upload->getName(),
                'populer' => $this->request->getPost('populer')
            );
        }
        $this->db->table('destinasi')->insert($data);

        return redirect()->to('destinasi')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function edit($id)
    {
        $model = new ModelDestinasi();
        helper('form');
        $destinasi = $model->pilihDestinasi($id)->getRow();

        // var_dump($destinasi);
        $data = [
            'destinasi' => $destinasi,
            'title' => 'Destinasi - Tambah',
            'sidebar' => 'destinasi',
            'page' => 'admin/destinasi/edit'
        ];
        return view('admin/layout_admin', $data);
    }

    public function aksi_edit()
    {
        helper('form');
        $model = new ModelDestinasi();
        $id = $this->request->getPost('id');
        $validation = $this->validate([
            'gambar' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,4096]'
        ]);

        if ($validation == FALSE) {
            $data = array(
                'nama_wisata'  => $this->request->getPost('nama_wisata'),
                'slug' => $this->request->getPost('slug'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'populer' => $this->request->getPost('populer')
            );
        } else {
            $dt = $model->pilihDestinasi($id)->getRow();
            if (!empty($dt->gambar)) {
                $gambar = $dt->gambar;
                $path = '../public/assets/img/upload/';
                unlink($path . $gambar);
            }
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/assets/img/upload/');
            $data = array(
                'nama_wisata'  => $this->request->getPost('nama_wisata'),
                'slug' => $this->request->getPost('slug'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $upload->getName(),
                'populer' => $this->request->getPost('populer')
            );
        }
        $model->edit_data($id, $data);
        return redirect()->to('destinasi')->with('berhasil', 'Data Berhasil di Ubah');
    }


    public function delete($id)
    {
        $model = new ModelDestinasi();
        $dt = $model->pilihDestinasi($id)->getRow();

        $this->db->table('destinasi')->delete(array('id' => $id));
        if (!empty($dt->gambar)) {
            $gambar = $dt->gambar;
            $path = '../public/assets/img/upload/';
            unlink($path . $gambar);
        }
        return redirect()->to('destinasi')->with('berhasil', 'Data Berhasil di Hapus');
    }
}
