<?php

namespace App\services;

use App\Models\Semester;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $title=$request->year."0".$request->half_year;
        $status=Semester::create([
            ...$request->validated(),
            'title'=>$title,
        ]);
        if($status){
            return to_route('semesters.index');

        }else{
            return to_route('semesters.create');
        }
    }
}
