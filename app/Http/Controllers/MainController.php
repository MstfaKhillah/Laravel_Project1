<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return 'about page';
    }

    public function team()
    {
        return 'team page';
    }

    public function services()
    {
        return 'services page';
    }

    public function contact()
    {
        return view('contact');
    }
}
