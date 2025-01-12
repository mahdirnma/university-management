<?php

namespace App\services;

use App\Models\Registration;
use App\Models\Semester;
use App\Models\Unit;

class CollegianService
{
    public function profile()
    {
        $student=session('student');
        return view('student.profile',compact('student'));
    }

    public function classes()
    {
        $semester=Semester::where('is_active',1)->orderBy('id','desc')->first();
        $student=session('student');
        $registrations=$student->registrations->sortByDesc('id')->first();
//        $registrations=Registration::where('student_id',$student->id)->orderBy('id','desc')->first();
        $units=$registrations->units->where('semester_id',$semester->id);
        return view('student.classes',compact('student','units'));
    }

    public function gpa(Unit $unit)
    {
        $semester=$unit->semester_id;
        $student=session('student');
        $registration=$student->registrations->where('semester_id',$semester)->sortByDesc('id')->first();
        $units=$registration->units->where('semester_id',$semester);
        $score=[];
        foreach ($units as $unit) {
            $num=$unit->pivot->score;
            array_push($score,$num);
        }
        $count=count($score);
        $gpa=0;
        for ($i=0;$i<$count;$i++) {
            $gpa+=$score[$i];
        }
        $gpa=$gpa/$count;
        $status=false;
        if ($gpa>=12){
            $status=true;
        }
        $registration->update([
            'gpa'=>$gpa,
            'status'=>$status
        ]);
        $allGpa=[];
        $registrations=$student->registrations->sortByDesc('id');
        foreach ($registrations as $row) {
            array_push($allGpa,$row->gpa);
        }
        $overall=0;
        for ($i=0;$i<count($allGpa);$i++) {
            $overall+=$allGpa[$i];
        }
        $overall=$overall/count($allGpa);
        return view('student.gpa',compact('student','gpa','registration','overall'));
    }
}
