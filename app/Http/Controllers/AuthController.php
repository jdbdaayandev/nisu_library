<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Ipakita ang login form
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/'); // Kung naka-login na, idiretso sa dashboard
        }
        return view('auth.login');
    }

    // I-process ang authentication request
    public function login(Request $request)
    {
        // 1. I-validate ang input fields
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember');

        // 2. I-attempt ang pag-login gamit ang Laravel Auth
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // Para sa security laban sa session fixation

            return redirect()->intended('/dashboard'); // Idiretso sa dashboard o sa page na tinatangka niyang buksan kanina
        }

        // 3. Kung mali ang password o email, ibalik sa login na may error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // Logout process
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}