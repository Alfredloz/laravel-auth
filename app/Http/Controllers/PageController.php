<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('guest.index');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contacts()
 {
     return view('guest.contacts');
 }
}
