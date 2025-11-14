<?php namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'skill';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_skill', 'level'];


    public function getSkills()
    {
        return $this->orderBy('level', 'DESC')->findAll();
    }
}