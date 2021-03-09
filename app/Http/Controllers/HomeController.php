<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function todaySpecial()
    {
        return view('today-special');
    }
    public function menu()
    {
        return view('menu');
    }
    public function contact()
    {
        return view('contact');
    }
}
