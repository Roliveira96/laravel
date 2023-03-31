<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $valor1, int $valor2)
    {

        return view('site.teste', compact('valor1', 'valor2'));
    }
}
