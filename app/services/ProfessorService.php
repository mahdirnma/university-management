<?php

namespace App\services;

use App\Models\Professor;

class ProfessorService
{
    public function index()
    {
        $professors = Professor::where('is_active', 1)->paginate(2);
        return view('admin.professors.index', compact('professors'));
    }
    public function create(){
        return view('admin.professors.create');
    }
}
