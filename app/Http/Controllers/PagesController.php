<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Pateros Technological College - Official';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About Pateros Technological College';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Course Offer',
            'services' => ['BSIT','BSOA','CHRM','CCS']
        );
        return view('pages.services')->with($data);
    }

    public function landing(){
        $title = 'PATEROS TECHNOLOGICAL COLLEGE';
        return view('pages.landing')->with('title',$title);
    }

    public function student_portal(){
        return view('pages.student_portal');
    }
}
