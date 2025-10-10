<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminLogin()
    {
        return view('backend.admin-login');
    }

    public function adminlogout()
    {
        return redirect('/admin/login');
    }

    public function login()
    {
        return view('backend.login');
    }

}
