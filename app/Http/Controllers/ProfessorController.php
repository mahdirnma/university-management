<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use App\services\ProfessorService;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProfessorService $professorService)
    {
        return $professorService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ProfessorService $professorService)
    {
        return $professorService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfessorRequest $request,ProfessorService $professorService)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Professor $professor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professor $professor,ProfessorService $professorService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessorRequest $request, Professor $professor,ProfessorService $professorService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professor $professor,ProfessorService $professorService)
    {
        //
    }
}
