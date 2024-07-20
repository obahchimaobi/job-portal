<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
            return redirect()->route('candidate.dashboard');
        } else {
            return redirect()->route('login.page')->with('error', 'Invalid Credentials');
        }
    }

    public function candidate_profile()
    {
        $user = Auth::guard('candidate')->user();
        $user_id = $user->id;

        $info = Candidate::where('id', $user_id)->first();

        return view('components.candidate-profile', compact('info'));
    }

    public function candidate_logout()
    {
        Auth::guard('candidate')->logout();

        return redirect()->route('login.page')->with('success', 'Logout Successful');
    }

    public function update_my_account(Request $request)
    {
        // dd();
        
        $fields = $request->validate([
            'candidate_name' => 'string',
            'candidate_email' => 'email',
            'image' => 'image:jpeg,png,jpg,gif|max:2048',
            'job_name' => 'string',
            'phone' => 'string',
            'job_type' => 'string',
            'job_category' => 'string',
            'experience' => 'string',
            'education' => 'string',
            'current_salary' => 'string',
            'expected_salary' => 'string',
            'age' => 'string',
            'language' => 'string',
            'about' => 'string',
        ]);

        // Retrieve the candidate's user model
        $candidate = Auth::guard('candidate')->user();

        if ($request->has('image')) {
            $file = $request->file('image');
            $filePath = 'candidate_image/'.$file->getClientOriginalName();

            // Check if the file already exists
            if (Storage::disk('public')->exists($filePath)) {
                Log::info('File already exists: '.$filePath);
                $fields['image'] = $filePath;
            } else {
                // Store the file and get its path
                $fields['image'] = $file->storeAs('candidate_image', $file->getClientOriginalName(), 'public');
                Log::info('Stored image path: '.$fields['image']);
            }
        }

        // Update the candidate's information
        $candidate->update($fields);

        return redirect()->route('candidate.profile')->with('success', 'Information Updated');
    }
}
