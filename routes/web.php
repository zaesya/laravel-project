<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentAdminController;
use App\Http\Controllers\GradeAdminController;
use App\Http\Controllers\DepartmentAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Person',
        'nama' => 'Zesya Feryal Adilza',
        'kelas' => '11 PPLG 2',
        'linkedin' => 'https://www.linkedin.com/in/zesya-feryal-4452b32a1/'
    ]);
});

Route::get('/student', [StudentController::class, 'index']);

Route::get('/grade', [GradeController::class, 'index']);

Route::get('/departments', [DepartmentController::class, 'index']);

Route::get('/student-admin', [StudentAdminController::class, 'index']);

Route::get('/grade-admin', [GradeAdminController::class, 'index']);

Route::get('/department-admin', [DepartmentAdminController::class, 'index']);


        
