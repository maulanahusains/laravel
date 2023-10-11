<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        if(Auth::guard('web')->attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login')->with('error', 'username or password is incorrect');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
