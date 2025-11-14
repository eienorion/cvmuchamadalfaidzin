<?php

namespace App\Controllers;

use App\Models\PortofolioModel; 

class Portofolio extends BaseController 
{
    public function index()
    {
        $portofolioModel = new PortofolioModel(); 

        $data = [
            'title' => 'Portofolio Proyek',

            'portofolio' => $portofolioModel->getPortofolio() 
        ];

  
        return view('portofolio_view', $data);
    }
}