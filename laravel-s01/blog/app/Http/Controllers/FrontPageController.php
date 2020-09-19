<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    // Parameter in path
    /*public function about($name)
    {
        return view('about')->with('name', $name);
    }*/

    public function contact()
    {
        return view('contact');
    }
}
