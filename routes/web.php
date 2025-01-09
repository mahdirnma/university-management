<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('admin.dashboard')->middleware('auth');

Route::get('/preLogin', [UserController::class, 'preLogin'])->name('preLogin');
Route::get('/admin/login', [UserController::class, 'adminLogin'])->name('admin.login.show');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout');

Route::get('/student', [UserController::class, 'student'])->name('student.dashboard')->middleware('checkStudentLogin');
Route::get('/student/login', [UserController::class, 'studentLogin'])->name('student.login.show');
Route::post('/student/login', [AuthController::class, 'studentLogin'])->name('student.login');

Route::get('/professor', [UserController::class, 'professor'])->name('professor.dashboard')->middleware('checkProfessorLogin');
Route::get('/professor/login', [UserController::class, 'professorLogin'])->name('professor.login.show');
Route::post('/professor/login', [AuthController::class, 'professorLogin'])->name('professor.login');
Route::post('/professor/logout', [AuthController::class, 'professorLogout'])->name('professor.logout');

Route::resource('students', StudentController::class)->except(['show'])->middleware('auth');
Route::resource('professors', ProfessorController::class)->except(['show'])->middleware('auth');
Route::resource('courses', CourseController::class)->only(['index','create','store','show'])->middleware('auth');
Route::resource('semesters', SemesterController::class)->middleware('auth');
Route::resource('units', UnitController::class)->middleware('auth');
Route::resource('lessons', LessonController::class)->except(['show'])->middleware('auth');

/*Route::get('unit/student/create', [RegistrationController::class, 'studentCreate'])->name('unit.student.create')->middleware('auth');
Route::post('unit/student/create', [RegistrationController::class, 'studentStore'])->name('unit.student.store')->middleware('auth');*/

Route::get('master/units',[MasterController::class,'units'])->name('master.units')->middleware('checkProfessorLogin');
Route::get('master/units/students/{unit}',[MasterController::class,'students'])->name('master.students')->middleware('checkProfessorLogin');
Route::get('master/units/students/score/{unit}/{registration}',[MasterController::class,'score'])->name('master.students.score')->middleware('checkProfessorLogin');
Route::post('master/units/students/score/create/{unit}/{registration}',[MasterController::class,'createScore'])->name('student.score.create')->middleware('checkProfessorLogin');
