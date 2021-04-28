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

    public function MovimentoPage()
    {
        return view('movimento');
    }

    public function CandidatosPage()
    {
        return view('candidatos');
    }
}
