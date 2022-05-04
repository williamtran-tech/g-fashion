<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function create(){
        return view('users.login');
    }

    public function store(){
        // Validate request
        $attributes = request()->validate([
            'email'=>'required|exists:users,email',
            'password'=>'required'
        ]);

        // Authenticate and login user based on given data
        if (auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/');
        }

        // Auth failed
        return back()
            ->withInput()
            ->withErrors(['message'=>'Your provided email or password could not be verified']);
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}