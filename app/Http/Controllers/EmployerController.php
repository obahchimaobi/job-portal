<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    //
    public function employer_dashboard()
    {
        return view('components.employer-dashboard');
    }

    public function employer_login(Request $request)
    {
        $remember = $request->has('employer_remember') ? true : false;

        $request->validate([
            'employer_email' => 'required',
            'employer_password' => 'required',
        ]);

        if (Auth::guard('employer')->attempt(['employer_email' => $request->employer_email, 'password' => $request->employer_password], $remember)) {
            return redirect()->route('employer.dashboard')->with('success', 'Login Successful');
        } else {
            return redirect()->route('login.page')->with('error', 'Invalid Credentials');
        }
    }

    public function employer_logout()
    {
        Auth::guard('employer')->logout();

        return redirect()->route('login.page')->with('success', 'Logout Successful');
    }
}
