<?php

namespace App\services;

use App\Models\Semester;

class SemesterService
{
    public function index()
    {
        $semesters = Semester::where('is_active', 1)->paginate(2);
        return view('admin.semesters.index', compact('semesters'));
    }
    public function create(){
        return view('admin.semesters.create');
    }
}
