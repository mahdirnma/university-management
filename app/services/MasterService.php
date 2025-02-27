<?php

namespace App\services;

use App\Models\Registration;
use App\Models\Semester;
use App\Models\Unit;
use Illuminate\Http\Request;

class MasterService
{
    public function units()
    {
        $semesters = Semester::where('is_active', 1)->orderBy('id','desc')->first();
        $professor=session('professor');
        $units=$professor->units->where('is_active',1)->where('semester_id',$semesters->id);
        return view('professor.units',compact('units'));
    }

    public function students(Unit $unit)
    {
        $registrations=$unit->registrations;
        return view('professor.students',compact('registrations','unit'));
    }

    public function score(Unit $unit,Registration $registration)
    {
        return view('professor.score',compact('unit','registration'));
    }

    public function createScore(Unit $unit,Registration $registration,Request $request)
    {
        $unit->registrations()->detach($registration);
        $unit->registrations()->attach($registration,['score'=>$request->score]);
        return to_route('master.students',compact('unit'));
    }
}
