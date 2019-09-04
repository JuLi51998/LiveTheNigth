<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function signin()
    {
        return view('web.signin');
    }

    public function signup()
    {
        return view('web.signup');
    }

    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }
}
