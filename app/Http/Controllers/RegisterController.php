<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function createUser(Request $request)
    {
        // validation of data sent by user.
        $userData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);
        // hash password,so nobody can understand the real password.
        $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);

        // add user info to database using User model
        $user = User::create($userData);

        // authorise user and redirect to main page.
        auth()->login($user);
        return redirect('/');
    }
}
