<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// contrleur pages statiques
class PagesController extends Controller
{
    public function home()
    {
        return view('/pages/home');
    }

    public function about()
    {
        return view('/pages/about');
    }

}
