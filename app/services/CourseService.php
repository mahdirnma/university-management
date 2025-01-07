<?php

namespace App\services;

use App\Models\Course;

class CourseService
{
    public function index()
    {
        $courses = Course::where('is_active', 1)->paginate(2);
        return view('admin.courses.index', compact('courses'));
    }
    public function create(){
        return view('admin.courses.create');
    }
    public function store($request){
        $status=Course::create($request->validated());
        if($status){
            return to_route('courses.index');

        }else{
            return to_route('courses.create');
        }
    }
}
