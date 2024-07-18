<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function jobs()
    {
        return view('components.jobs');
    }
}
