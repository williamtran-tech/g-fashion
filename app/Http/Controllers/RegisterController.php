<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('users.register');
    }

    public function store(){
        $attributes = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create($attributes);
        
        Auth::login($user);

        return redirect('/')->with('success', 'Your account have been successfully created.');
    }
}