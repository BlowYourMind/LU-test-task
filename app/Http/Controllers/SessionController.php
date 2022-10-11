<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function logout()
    {
        // Logout user from session.
        auth()->logout();

        return redirect('/');
    }
}
