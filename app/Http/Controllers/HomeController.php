<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function telaInicial() {
        return view("home");
    }
}
