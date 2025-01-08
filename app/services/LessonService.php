<?php

namespace App\services;

use App\Models\Course;
use App\Models\Lesson;

class LessonService
{
    public function index()
    {
        $lessons = Lesson::where('is_active', 1)->paginate(2);
        return view('admin.lessons.index', compact('lessons'));
    }
    public function create(){
        $courses = Course::where('is_active', 1)->get();
        $lessons = Lesson::where('is_active', 1)->get();
        return view('admin.lessons.create', compact('courses', 'lessons'));
    }
}
