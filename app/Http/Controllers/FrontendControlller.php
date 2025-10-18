<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendControlller extends Controller
{
    public function index()
    {
        $courses = Course::get();
        return view('frontend.index', compact('courses'));
    }

    public function studentLogin()
    {
        return view('frontend.login');
    }

    public function studentRegister()
    {
        return view('frontend.register');
    }

    public function forgetPassword()
    {
        return view('frontend.forget-password');
    }

    public function adminLogin()
    {
        return view('backend.auth.admin-login');
    }

    public function adminLogout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }

    public function subAdminLogin()
    {
        return view('backend.auth.sub-admin-login');
    }
}
