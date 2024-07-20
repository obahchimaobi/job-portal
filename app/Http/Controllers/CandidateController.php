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
        $remember = $request->has('candidate_remember') ? true : false;

        $credentials = $request->validate([
            'candidate_email' => 'required',
            'candidate_password' => 'required',
        ]);

        if (Auth::guard('candidate')->attempt(['candidate_email' => $credentials['candidate_email'], 'password' => $credentials['candidate_password']], $remember)) {
            return redirect()->route('candidate.dashboard')->with('success', 'Login Successful');
        } else {
            return redirect()->route('login.page')->with('error', 'Invalid Credentials');
        }
    }

    public function candidate_logout()
    {
        Auth::guard('candidate')->logout();

        return redirect()->route('login.page')->with('success', 'Logout Successful');
    }
}
