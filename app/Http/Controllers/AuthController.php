<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        # code...
    }

    public function store(Request $request)
    {
        # code...
    }

    public function lgout(Request $request)
    {
        # code...
    }
}