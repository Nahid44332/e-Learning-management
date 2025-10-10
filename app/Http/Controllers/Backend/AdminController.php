<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminDashboard()
    {
        return view ('backend.dashboard');
    }
    public function activeUsers()
    {
        return view('backend.active-users');
    }
}
