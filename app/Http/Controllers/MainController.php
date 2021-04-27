<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function MainPage()
    {
        return view('main');
    }

    public function MenuPage()
    {
        return view('menu');
    }
}
