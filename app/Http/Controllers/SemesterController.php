<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\services\SemesterService;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SemesterService $semesterService)
    {
        return $semesterService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(SemesterService $semesterService)
    {
        return $semesterService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemesterRequest $request,SemesterService $semesterService)
    {
        return $semesterService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Semester $semester,SemesterService $semesterService)
    {
        return $semesterService->show($semester);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semester $semester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSemesterRequest $request, Semester $semester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semester $semester)
    {
        //
    }
}
