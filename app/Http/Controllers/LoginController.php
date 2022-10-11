<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        // return view login.blade.php
        return view('login');
    }

    public function auth(Request $request)
    {
        //Authorization validation

        $attributed = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // checking if authorization is successful. If true -> New session and redirect. Else error to login view.
        if (auth()->attempt($attributed)) {
            session()->regenerate();
            return redirect('/');
        }
        return back()->withInput()->withErrors(['username' => 'Login or password is incorrect']);
    }
}
