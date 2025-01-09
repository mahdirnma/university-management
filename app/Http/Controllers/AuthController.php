<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessorLoginRequest;
use App\Http\Requests\StoreStudentLoginRequest;
use App\Http\Requests\StoreUserLoginRequest;
use App\Models\Professor;
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

    public function professorLogin(StoreProfessorLoginRequest $request)
    {
        $name=$request->input('name');
        $personal_code=$request->input('personal_code');
        $professor=Professor::where('personal_code',$personal_code)->where("name",$name)->first();
        if ($professor){
            session()->put('professor',$professor);
            return to_route('professor.dashboard');

        }else{
            return to_route('professor.login.show');
        }
    }

    public function adminLogout()
    {
        Auth::logout();
        return to_route('preLogin');
    }
}
