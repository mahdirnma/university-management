<?php

namespace App\services;

use App\Models\Lesson;

class LessonService
{
    public function index()
    {
        $lessons = Lesson::where('is_active', 1)->paginate(2);
        return view('admin.lessons.index', compact('lessons'));
    }
}
