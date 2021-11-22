<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function landing()
    {
        return view('landing');
    }

    public function tnc()
    {
        return view('tnc');
    }

    public function privacy()
    {
        return view('privacy');
    }
}
