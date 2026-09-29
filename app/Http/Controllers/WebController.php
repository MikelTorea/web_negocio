<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function destinos()
    {
        return view('destinos');
    }

    public function contacto()
    {
        return view('contacto');
    }
}