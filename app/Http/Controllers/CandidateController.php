<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    //
    public function candidates()
    {
        return view('components.candidates');
    }
}
