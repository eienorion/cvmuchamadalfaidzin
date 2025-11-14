<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\SkillModel; 

class Home extends BaseController
{
    public function index()
    {
        $biodataModel = new BiodataModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $skillModel = new SkillModel(); 

        $data = [
            'title' => 'Beranda',
            'biodata' => $biodataModel->first(), 
            'pendidikan' => $pendidikanModel->orderBy('tahun_mulai', 'ASC')->findAll(), 
            'pengalaman' => $pengalamanModel->orderBy('tahun_mulai', 'DESC')->findAll(),
            'skills' => $skillModel->getSkills() 
        ];

        return view('pages/home', $data);
    }
}