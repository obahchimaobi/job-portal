<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login_page()
    {
        return view('auth.login');
    }

    public function register_page()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'password' => 'required|min:6'
        ]);

        User::create($request->all());
        
        return redirect()->route('register.page')->with('status', 'Regsiteration Successful');
    }
}
