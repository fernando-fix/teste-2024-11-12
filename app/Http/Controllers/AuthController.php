<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email'     =>  ['required'],
            'password'  =>  ['required'],
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
