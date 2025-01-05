<?php

use App\Http\Controllers\AuthController;
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

Route::get('/preLogin', [UserController::class, 'preLogin'])->name('admin.login.show');
Route::get('/admin/login', [UserController::class, 'adminLogin'])->name('admin.login.show');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');

Route::get('/student/login', [UserController::class, 'studentLogin'])->name('student.login.show');
