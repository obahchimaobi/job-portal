<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //
    public function candidates()
    {
        return view('components.candidates');
    }

    public function about_us()
    {
        return view('page.about-us');
    }

    public function contact()
    {
        return view('page.contact');
    }
}
