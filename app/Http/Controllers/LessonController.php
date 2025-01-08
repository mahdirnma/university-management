<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\services\LessonService;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LessonService $lessonService)
    {
        return $lessonService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(LessonService $lessonService)
    {
        return $lessonService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request,LessonService $lessonService)
    {
        return $lessonService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
