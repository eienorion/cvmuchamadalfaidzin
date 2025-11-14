<?php

namespace App\Controllers;

use App\Models\PengalamanModel;

class Pengalaman extends BaseController
{
    public function index()
    {
        $model = new PengalamanModel();
        
        // Data untuk view
        $data = [
            'title' => 'Riwayat Pengalaman', // bisa ganti sesuai kebutuhan
            'pengalaman' => $model->findAll() // ambil semua data pengalaman
        ];

        return view('pengalaman_view', $data);
    }
}
