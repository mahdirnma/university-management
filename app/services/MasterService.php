<?php

namespace App\services;

class MasterService
{
    public function units()
    {
        $professor=session('professor');
        $units=$professor->units->where('is_active',1);
        return view('professor.units',compact('units'));
    }
}
