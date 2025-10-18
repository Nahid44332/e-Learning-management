<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CourseController;
use App\Http\Controllers\FrontendControlller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', [FrontendControlller::class, 'index']);
Route::get('/student/login', [FrontendControlller::class, 'studentLogin']);
Route::get('/student/register', [FrontendControlller::class, 'studentRegister']);
Route::get('/forget-password', [FrontendControlller::class, 'forgetPassword']);
Route::get('/admin/login', [FrontendControlller::class, 'adminLogin']);
Route::get('/admin/logout', [FrontendControlller::class, 'adminLogout']);
Route::get('/sub-admin/login', [FrontendControlller::class, 'subAdminLogin']);
Auth::routes();

Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
//Course Route...
Route::get('/admin/course', [CourseController::class, 'course']);
Route::post('/admin/course/store', [CourseController::class, 'courseStore']);
Route::get('/admin/course/delete/{id}', [CourseController::class, 'courseDelete']);
Route::get('/admin/course/edit/{id}', [CourseController::class, 'courseEdit']);
Route::post('/admin/course/update', [CourseController::class, 'courseUpdate'])->name('course.update');