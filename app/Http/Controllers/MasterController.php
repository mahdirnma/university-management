<?php

namespace App\Http\Controllers;

use App\services\MasterService;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function units(MasterService $masterService)
    {
        return $masterService->units();
    }
}
