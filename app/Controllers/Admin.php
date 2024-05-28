<?php

namespace App\Controllers;

use App\Models\ModelDestinasi;
use App\Models\ModelGaleri;

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

    public function galeri(): string
    {
        $galeri = $this->db->table('galeri')->get()->getResult();
        $data = [
            'galeri' => $galeri,
            'title' => 'Admin - Galeri',
            'sidebar' => 'galeri',
            'page' => 'admin/galeri'
        ];
        return view('admin/layout_admin', $data);
    }

    public function add_galeri(): string
    {
        $data = [
            'title' => 'Galeri - Tambah',
            'sidebar' => 'galeri',
            'page' => 'admin/galeri/tambah'
        ];
        return view('admin/layout_admin', $data);
    }

    public function save_galeri()
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

        return redirect()->to('admin/galeri')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function delete_galeri($id)
    {
        $model = new ModelGaleri();
        $dt = $model->pilihGaleri($id)->getRow();

        $this->db->table('galeri')->delete(array('id' => $id));
        $gambar = $dt->gambar;
        $path = '../public/assets/img/upload/';
        unlink($path . $gambar);
        return redirect()->to('admin/galeri')->with('berhasil', 'Data Berhasil di Hapus');
    }

    public function destinasi(): string
    {
        $destinasi = $this->db->table('destinasi')->get()->getResult();
        $data = [
            'destinasi' => $destinasi,
            'title' => 'Admin - Destinasi',
            'sidebar' => 'destinasi',
            'page' => 'admin/destinasi'
        ];
        return view('admin/layout_admin', $data);
    }

    public function add_destinasi(): string
    {
        $data = [
            'title' => 'Destinasi - Tambah',
            'sidebar' => 'destinasi',
            'page' => 'admin/destinasi/tambah'
        ];
        return view('admin/layout_admin', $data);
    }

    public function save_destinasi()
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
                'harga' => $this->request->getPost('harga'),
                'populer' => $this->request->getPost('populer')
            );
        } else {
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/assets/img/upload/');
            $data = array(
                'nama_wisata'  => $this->request->getPost('nama_wisata'),
                'slug' => $this->request->getPost('slug'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'),
                'gambar' => $upload->getName(),
                'populer' => $this->request->getPost('populer')
            );
        }
        $this->db->table('destinasi')->insert($data);

        return redirect()->to('admin/destinasi')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function edit_destinasi($id)
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

    public function aksi_edit_destinasi()
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
                'harga' => $this->request->getPost('harga'),
                'populer' => $this->request->getPost('populer')
            );
        } else {
            $dt = $model->pilihDestinasi($id)->getRow();
            $gambar = $dt->gambar;
            $path = '../public/assets/img/upload/';
            unlink($path . $gambar);
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . '../public/assets/img/upload/');
            $data = array(
                'nama_wisata'  => $this->request->getPost('nama_wisata'),
                'slug' => $this->request->getPost('slug'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'),
                'gambar' => $upload->getName(),
                'populer' => $this->request->getPost('populer')
            );
        }
        $model->edit_data($id, $data);
        return redirect()->to('admin/destinasi')->with('berhasil', 'Data Berhasil di Ubah');
    }


    public function delete_destinasi($id)
    {
        $model = new ModelDestinasi();
        $dt = $model->pilihDestinasi($id)->getRow();

        $this->db->table('destinasi')->delete(array('id' => $id));
        $gambar = $dt->gambar;
        $path = '../public/assets/img/upload/';
        unlink($path . $gambar);
        return redirect()->to('admin/destinasi')->with('berhasil', 'Data Berhasil di Hapus');
    }

    public function paket(): string
    {
        $data = [
            'title' => 'Admin - Paket',
            'sidebar' => 'paket',

            'page' => 'admin/paket'
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
