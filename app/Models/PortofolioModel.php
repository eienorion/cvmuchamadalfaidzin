<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id';
    // link_proyek dihapus dari allowedFields
    protected $allowedFields = ['judul', 'deskripsi', 'teknologi', 'waktu']; 

    // Fungsi untuk mengambil semua data portofolio, diurutkan berdasarkan waktu (terbaru dulu)
    public function getPortofolio()
    {
        return $this->orderBy('waktu', 'DESC')->findAll();
    }
}