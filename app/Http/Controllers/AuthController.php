<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('login');
    }


     // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $logs = $request->only('email', 'password');

        if (Auth::attempt($logs)) {
            return redirect()->route('profile')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid email or password.');
    }


     // Show profile (protected by middleware)
    public function profile()
    {
        return view('dasboard');
    }



     // Logout user
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
