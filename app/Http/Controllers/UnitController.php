<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\services\SemesterService;
use App\services\UnitService;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(UnitService $unitService,Request $request)
    {
        return $unitService->create($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnitRequest $request,UnitService $unitService)
    {
        return $unitService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit,UnitService $unitService)
    {
        return $unitService->show($unit);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnitRequest $request, Unit $unit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        //
    }
}
