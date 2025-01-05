<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentLoginRequest;
use App\Http\Requests\StoreUserLoginRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function adminLogin(StoreUserLoginRequest $request)
    {
        $myData = $request->only('email', 'password');
        if (Auth::attempt($myData)) {
            return to_route('admin.dashboard');
        }else{
            return to_route('admin.login.show');
        }
    }

    public function studentLogin(StoreStudentLoginRequest $request)
    {
        $name=$request->input('name');
        $student_number=$request->input('student_number');
        $student=Student::where('student_number',$student_number)->where("name",$name)->first();
        if ($student){
            session()->put('student',$student);
            return to_route('student.dashboard');
        }else{
            return to_route('student.login.show');
        }
    }
}
