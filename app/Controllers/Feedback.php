<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelFeedback;
use CodeIgniter\HTTP\ResponseInterface;

class Feedback extends BaseController
{
    private $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function index()
    {
        $feedback = $this->db->table('feedback')->get()->getResult();
        $data = [
            'feedback' => $feedback,
            'title' => 'Admin - Feedback',
            'sidebar' => 'feedback',
            'page' => 'admin/feedback/index'
        ];
        return view('admin/layout_admin', $data);
    }

    public function show($id)
    {
        $model = new ModelFeedback();
        $model->edit_data($id, ['status' => 'Sudah Dibaca']);

        $feedback = $model->pilihFeedback($id)->getRow();
        $data = [
            'feedback' => $feedback,
            'title' => 'Admin - Feedback',
            'sidebar' => 'feedback',
            'page' => 'admin/feedback/show'
        ];
        return view('admin/feedback/layout_admin', $data);
    }

    public function delete($id)
    {
        $this->db->table('feedback')->delete(array('id' => $id));

        return redirect()->to('feedback')->with('berhasil', 'Data Berhasil dihapus');
    }
}
