<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // 1. Show the login form
    public function create()
    {
        return view('login'); 
    }

    // 2. Process the login request
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Change '/home' to '/'
            return redirect()->intended('/');
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}