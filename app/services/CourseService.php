<?php

namespace App\services;

use App\Models\Course;
use App\Models\Unit;
use Illuminate\Http\Request;

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
    public function show(Course $course,Request $request){
        $semester_id=$request->semester;
        $units=Unit::where('semester_id', $semester_id)->where('course_id',$course->id)->paginate(2);
        return view('admin.units.index', compact('course','units','semester_id'));
    }
}
