<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Unit;
use App\services\MasterService;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function units(MasterService $masterService)
    {
        return $masterService->units();
    }

    public function students(MasterService $masterService,Unit $unit)
    {
        return $masterService->students($unit);
    }

    public function score(MasterService $masterService,Unit $unit,Registration $registration)
    {
        return $masterService->score($unit,$registration);
    }
}
