<?php

namespace App\services;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentService
{
    public function index()
    {
        $students = Student::where('is_active', 1)->paginate(2);
        return view('admin.students.index', compact('students'));
    }
    public function create(){
        return view('admin.students.create');
    }
    public function store(Request $request){
        $student=Student::create($request->validated());
        if($student){
            return to_route('students.index');
        }else{
            return to_route('students.create');
        }
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }
    public function update(Request $request, Student $student){
        $status=$student->update($request->validated());
        if($status){
            return to_route('students.index');

        }else{
            return to_route('students.edit', $student);
        }
    }
}
