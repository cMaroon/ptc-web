<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['landing', 'home', 'about', 'services', 'student_portal']]);
    }

    public function home()
    {
        return view('pages.home');
    }
    
    public function news()
    {
        return view('pages.news');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = [
            'title'    => 'Course Offer',
            'services' => ['BSIT', 'BSOA', 'CHRM', 'CCS'],
        ];

        return view('pages.services')->with($data);
    }

    public function landing()
    {
        return view('pages.landing');
    }

    public function student_portal()
    {
        return view('pages.student_portal');
    }
}
