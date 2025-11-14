<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'sekolah', 'jurusan', 'tahun_mulai', 'tahun_selesai'];
}
