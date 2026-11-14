<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin/dashboard');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

//Student
Route::get('/admin/students', [StudentController::class, 'index']);
Route::get('/admin/students/create', [StudentController::class, 'create']);
Route::post('/admin/students', [StudentController::class, 'store']);

//Classroom
Route::get('/admin/classrooms', [ClassroomController::class, 'index']);
Route::get('/admin/classrooms/create', [ClassroomController::class, 'create']);
Route::post('/admin/classrooms', [ClassroomController::class, 'store']);

//Teacher
Route::get('/admin/teachers', [TeacherController::class, 'index']);
Route::get('/admin/teachers/create', [TeacherController::class, 'create']);
Route::post('/admin/teachers', [TeacherController::class, 'store']);

//Subject
Route::get('/admin/subjects', [SubjectController::class, 'index']);
Route::get('/admin/subjects/create', [SubjectController::class, 'create']);
Route::post('/admin/subjects', [SubjectController::class, 'store']);
