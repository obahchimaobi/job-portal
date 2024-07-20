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

            $candidate = new Candidate([
                'candidate_name' => $request->name,
                'candidate_email' => $request->email,
                'candidate_password' => bcrypt($request->password),
            ]);

            $candidate->save();

            return redirect()->route('register.page')->with('status', 'Regsiteration Successful');

        } elseif ($request->type == 'Employer') {

            $employer = new Employer([
                'employer_name' => $request->name,
                'employer_email' => $request->email,
                'employer_password' => bcrypt($request->password),
            ]);

            $employer->save();

            return redirect()->route('register.page')->with('status', 'Regsiteration Successful');

        }
    }
}
