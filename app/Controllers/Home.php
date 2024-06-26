<?php

namespace App\Controllers;

use App\Models\ModelPaket;
use App\Models\ModelDestinasi;

class Home extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
        helper(['url', 'form']);
    }

    public function index(): string
    {
        $model = new ModelDestinasi();
        $populer = $model->populer();

        // print_r($populer);
        // die;

        $data = [
            'populer' => $populer,
            'judul' => 'Home',
            'page' => 'home'
        ];
        return view('layout', $data);
    }

    public function galeri(): string
    {
        $galeri = $this->db->table('galeri')->get()->getResult();

        $data = [
            'galeri' => $galeri,
            'judul' => 'Galeri',
            'page' => 'galeri'
        ];
        return view('layout', $data);
    }

    public function destinasi(): string
    {
        $destinasi = $this->db->table('destinasi')->get()->getResult();

        $data = [
            'destinasi' => $destinasi,
            'judul' => 'Destinasi Wisata',
            'page' => 'destinasi'
        ];
        return view('layout', $data);
    }

    public function detail_destinasi($id): string
    {
        $destinasi = $this->db->table('destinasi')->where('id', $id)->get()->getResult();

        $data = [
            'destinasi' => $destinasi,
            'judul' => 'Destinasi Wisata',
            'page' => 'detail_destinasi'
        ];
        return view('layout', $data);
    }

    public function paket()
    {
        $model = new ModelPaket();
        $paket = $model->getData();
        // $destinasi = $model->data_destinasi(1);

        foreach ($paket as $key => $value) {
            $destinasi = $model->data_destinasi($value->id);
            $value->destinasi = $destinasi;
        }

        $data = [
            'paket' => $paket,
            'judul' => 'Paket Wisata',
            'page' => 'paket'
        ];
        // var_dump($destinasi);
        // var_dump($paket);
        return view('layout', $data);
    }

    public function pesan($id)
    {
        $model = new ModelPaket();
        $paket = $model->pilihPaket($id)->getRow();
        $month = date('M');
        $random = $month . $this->random();

        $data = [
            'paket' => $paket,
            'random' => $random,
            'judul' => 'Pesan Paket',
            'page' => 'pesan'
        ];
        // var_dump($destinasi);
        // var_dump($paket);
        return view('layout', $data);
    }

    public function pesanan()
    {
        helper('form');

        $data = array(
            'id_paket'  => $this->request->getPost('id_paket'),
            'kode_pesanan' => $this->request->getPost('kode'),
            'nama' => $this->request->getPost('nama'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jumlah_orang' => $this->request->getPost('jumlah_orang'),
            'tanggal' => $this->request->getPost('tanggal')
        );

        // var_dump($data);
        $this->db->table('pesanan')->insert($data);

        return redirect()->to('home/pesan_berhasil');
    }

    public function pesan_berhasil(): string
    {
        $data = [
            'judul' => 'Pesan',
            'page' => 'pesan_berhasil'
        ];
        return view('layout', $data);
    }

    function random($length = 6)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function potensi(): string
    {
        $potensi = $this->db->table('potensi')->get()->getResult();
        $data = [
            'potensi' => $potensi,
            'judul' => 'Potensi Desa',
            'page' => 'potensi'
        ];
        return view('layout', $data);
    }

    public function profil(): string
    {
        helper('form');

        $data = [
            'judul' => 'Profil Desa',
            'page' => 'profil'
        ];
        return view('layout', $data);
    }

    public function send()
    {
        $validation = $this->validate([
            'name' => 'required',
            'message' => 'required'
        ]);

        if (!$validation) {
            return view('layout', ['validation' => $this->validator]);
        } else {
            helper('form');

            $data = array(
                'nama' => $this->request->getPost('name'),
                'pesan' => $this->request->getPost('message'),
            );

            // var_dump($data);
            $send = $this->db->table('feedback')->insert($data);

            if ($send) {
                return redirect()->to('home/profil')->with('success', 'Pesan telah terkirim');
            } else {
                return redirect()->to('home/profil')->with('error', 'failed')->withInput();
            }
        }
    }
}
