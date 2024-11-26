<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required', 'email', 'max:255', 'confirmed',
            'password' => ['required', Password::min(6)],
        ]);

        //create the user
        $user = User::create($attributes);

        //login
        Auth::login($user);

        //redirect
        return redirect('/');
    }
}
