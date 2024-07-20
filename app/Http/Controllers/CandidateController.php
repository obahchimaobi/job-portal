<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    //
    public function candidate_dashboard()
    {
        return view('components.candidate-dashboard');
    }

    public function candidate_login(Request $request)
    {
        $remember = $request->has('candidate_remember');

        $request->validate([
            'candidate_email' => 'required',
            'candidate_password' => 'required',
        ]);

        if (Auth::guard('candidate')->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('candidate.dashboard')->with('success', 'Login Successful');
        } else {
            return redirect()->route('login.page')->with('error', 'Invalid Credentials');
        }
    }
}
