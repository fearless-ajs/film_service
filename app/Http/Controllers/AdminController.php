<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        //Auth middleware

    }

    public function dashboard()
    {
        return view('admin/home');
    }
}
