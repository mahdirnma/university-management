<?php

namespace App\Http\Controllers;

use App\services\CollegianService;
use Illuminate\Http\Request;

class CollegianController extends Controller
{
    public function profile(CollegianService $collegianService)
    {
        return $collegianService->profile();
    }
}
