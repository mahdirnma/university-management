<?php

namespace App\services;

use App\Models\Registration;

class CollegianService
{
    public function profile()
    {
        $student=session('student');
        return view('student.profile',compact('student'));
    }

    public function classes()
    {
        $student=session('student');
        //        $registrations=$student->registrations;
        $registrations=Registration::where('student_id',$student->id)->orderBy('id','desc')->first();
        $units=$registrations->units;
        return view('student.classes',compact('student','units'));
    }
}
