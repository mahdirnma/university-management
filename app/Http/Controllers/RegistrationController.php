<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Semester;
use App\Models\Student;
use App\Models\Unit;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Student $student)
    {
        $semester = Semester::where('is_active',1)->orderBy('id','desc')->first();
        $units=Unit::where('is_active',1)->where('semester_id',$semester->id)->get();
        return view('admin.students.registrations.create',compact('units','student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegistrationRequest $request,Student $student)
    {
        $semester = Semester::where('is_active',1)->orderBy('id','desc')->first();
        $semester_id = $semester->id;
        $unit_id=$request->get('unit_id');
/*        $unit=Unit::find($unit_id);
        if ($unit->lesson->lesson){

        }*/
//        $registrations=$student->registrations->sortByDesc('id')->first();
        $registration=Registration::where('student_id',$student->id)->where('semester_id',$semester_id)->first();
/*        if ($registrations->status==0 || !$registrations->status) {
            return to_route('students.index');
        }*/
        if(!$registration){
            $registration=Registration::create([
                'semester_id'=>$semester_id,
                'student_id'=>$student->id
            ]);
        }
        $registration->units()->attach($unit_id);
        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
