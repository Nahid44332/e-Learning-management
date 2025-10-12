<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendControlller extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
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

        return redirect('/admin-login');
    }

    public function subAdminLogin()
    {
        return view('backend.auth.sub-admin-login');
    }
}
