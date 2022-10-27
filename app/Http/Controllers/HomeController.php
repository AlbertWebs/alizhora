<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function company()
    {
        return view('front.company');
    }

    public function services()
    {
        return view('front.services');
    }

    public function copyright()
    {
        return view('front.copyright');
    }

    public function terms()
    {
        return view('front.terms');
    }

    public function policy()
    {
        return view('front.policy');
    }

}
