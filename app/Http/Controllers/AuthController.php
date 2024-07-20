<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Employer;
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
            'password' => 'required|min:6',
        ]);

        if ($request->type == 'Candidate') {
            Candidate::create($request->all());
        } elseif ($request->type == 'Employer') {
            Employer::create($request->all());
        }

        return redirect()->route('register.page')->with('status', 'Regsiteration Successful');
    }
}
