<?php

namespace App\services;

use App\Models\Unit;

class MasterService
{
    public function units()
    {
        $professor=session('professor');
        $units=$professor->units->where('is_active',1);
        return view('professor.units',compact('units'));
    }

    public function students(Unit $unit)
    {
        $registrations=$unit->registrations;
        return view('professor.students',compact('registrations','unit'));
    }
}
