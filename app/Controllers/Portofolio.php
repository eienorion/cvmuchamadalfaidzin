<?php

namespace App\Controllers;

use App\Models\PortofolioModel; // Menggunakan Model dengan ejaan 'Portofolio'

class Portofolio extends BaseController // Nama Class diubah menjadi 'Portofolio'
{
    public function index()
    {
        $portofolioModel = new PortofolioModel(); // Menggunakan variabel dengan ejaan 'Portofolio'

        $data = [
            'title' => 'Portofolio Proyek',
            // Memanggil fungsi getPortofolio() dari Model
            'portofolio' => $portofolioModel->getPortofolio() 
        ];

        // Memanggil View yang sudah diubah namanya menjadi 'portofolio_view'
        return view('portofolio_view', $data);
    }
}