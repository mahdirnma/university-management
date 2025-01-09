<?php

namespace App\services;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Professor;
use App\Models\Semester;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitService
{
    public function create(Request $request)
    {
        $course=Course::find($request->input('course'));
        $semester=Semester::find($request->input('semester'));
        $lessons = Lesson::where('is_active', 1)->where('course_id',$course->id)->get();
        $professors = Professor::where('is_active', 1)->get();
        return view('admin.units.create', compact('lessons', 'professors', 'course', 'semester'));
    }
    public function store(Request $request){
        $status=Unit::create($request->validated());
        if($status){
            return to_route('semesters.index');
        }else{
            return to_route('units.create');
        }
    }

    public function show(Unit $unit)
    {
        $semester_id=$unit->semester_id;
        $students=$unit->registrations->where('is_active',1)->where('semester_id',$semester_id);
        return view('admin.units.students.index', compact('unit', 'students'));
    }
}
