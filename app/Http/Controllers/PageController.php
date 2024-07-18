<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function about_us()
    {
        return view('page.about-us');
    }

    public function contact()
    {
        return view('page.contact');
    }
}
