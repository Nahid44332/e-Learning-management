<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [FrontendController::class ,'index']);
Route::get('/about-us' , [FrontendController::class ,'aboutUs']);
Route::get('/contact-us' , [FrontendController::class ,'contactUs']);
// Auth Routes
Route::get('/login' , [AuthController::class ,'login']);
Route::get('/logout' , [AuthController::class ,'logOut']);
Route::get('/register' , [AuthController::class ,'register']);

// admin Auth Routes
Route::get('/admin/login' , [AuthController::class ,'adminLogin']);
Route::get('/admin/logout' , [AuthController::class ,'adminlogout']);

Auth::routes();
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
Route::get('/admin/active-users', [AdminController::class, 'activeUsers']);
