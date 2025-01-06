<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
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

Route::get('/student', [UserController::class, 'student'])->name('student.dashboard')->middleware('checkStudentLogin');
Route::get('/student/login', [UserController::class, 'studentLogin'])->name('student.login.show');
Route::post('/student/login', [AuthController::class, 'studentLogin'])->name('student.login');

Route::get('/professor', [UserController::class, 'professor'])->name('professor.dashboard')->middleware('checkProfessorLogin');
Route::get('/professor/login', [UserController::class, 'professorLogin'])->name('professor.login.show');
Route::post('/professor/login', [AuthController::class, 'professorLogin'])->name('professor.login');

Route::resource('students', StudentController::class)->except(['show'])->middleware('auth');
Route::resource('professors', ProfessorController::class)->except(['show'])->middleware('auth');
