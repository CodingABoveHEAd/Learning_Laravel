<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class registeredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
       //validate
      $attributes= request()->validate([
        'first_name' =>['required'],
        'last_name' =>['required'],
        'email' =>['required' , 'email'],
        'password' =>['required',Password::min(6),'confirmed'],
       ]);
       //create the user
       $user=User::create($attributes);

       //Log in
       Auth::login($user);
       //login($user);
       return redirect('/jobs');

    }
}
