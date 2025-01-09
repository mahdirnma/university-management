<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StudentService $studentService,Request $request)
    {

        return $studentService->index($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StudentService $studentService)
    {
        return $studentService->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request, StudentService $studentService)
    {
        return $studentService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, StudentService $studentService)
    {
        return $studentService->edit($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student, StudentService $studentService)
    {
        return $studentService->update($request, $student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student,StudentService $studentService)
    {
        return $studentService->destroy($student);
    }
}
