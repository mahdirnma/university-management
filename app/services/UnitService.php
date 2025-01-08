<?php

namespace App\services;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Professor;
use App\Models\Semester;
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
}
