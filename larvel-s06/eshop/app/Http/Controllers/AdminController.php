<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function locale(string $locale)
    {
        auth()->user()->update(['locale' => $locale]);
        return back();
    }
}
