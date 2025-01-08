<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CourseService $courseService)
    {
        return $courseService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CourseService $courseService)
    {
        return $courseService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request,CourseService $courseService)
    {
        return $courseService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course,CourseService $courseService,Request $request)
    {
        return $courseService->show($course,$request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
