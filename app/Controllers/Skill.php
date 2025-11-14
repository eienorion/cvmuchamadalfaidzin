<?php namespace App\Controllers;

use App\Models\SkillModel;

class Skill extends BaseController
{
    public function index()
    {
        $skillModel = new SkillModel();
        
        $data = [
            'title' => 'Kemampuan (Skills)',
            'skills' => $skillModel->getSkills()
        ];

        return view('skill_view', $data);
    }
}