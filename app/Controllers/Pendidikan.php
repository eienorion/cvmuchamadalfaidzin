<?php

namespace App\Controllers;

use App\Models\PendidikanModel;

class Pendidikan extends BaseController
{
    public function index()
    {
        $model = new PendidikanModel();
        $data = [
            'title' => 'Riwayat Pendidikan', // <-- kirim variabel title
            'pendidikan' => $model->orderBy('tahun_mulai', 'ASC')->findAll()
        ];

        return view('pendidikan_view', $data);
    }
}
