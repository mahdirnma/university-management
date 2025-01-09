<?php

namespace App\Http\Controllers;

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
}
