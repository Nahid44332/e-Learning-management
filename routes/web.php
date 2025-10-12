<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\FrontendControlller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendControlller::class, 'index']);
Route::get('/st-login', [FrontendControlller::class, 'login']);
Route::get('/st-register', [FrontendControlller::class, 'register']);
Route::get('/forget-password', [FrontendControlller::class, 'forgetPassword']);
Route::get('/admin-login', [FrontendControlller::class, 'adminLogin']);
Route::get('/admin-logout', [FrontendControlller::class, 'adminLogout']);
Route::get('/sub-admin-login', [FrontendControlller::class, 'subAdminLogin']);
Auth::routes();

Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
