<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front_index');
    }

    public function about()
    {
        return view('front_about');
    }

    public function services()
    {
        return view('front_services');
    }

    public function package()
    {
        return view('front_package');
    }

    public function destination()
    {
        return view('front_destination');
    }

    public function booking()
    {
        return view('front_booking');
    }

    public function team()
    {
        return view('front_team');
    }

    public function testimonial()
    {
        return view('front_testimonial');
    }

    public function error()
    {
        return view('front_404');
    }
}
