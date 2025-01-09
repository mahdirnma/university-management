<?php

namespace App\services;

class CollegianService
{
    public function profile()
    {
        $student=session('student');
        return view('student.profile',compact('student'));
    }
}
