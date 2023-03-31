<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $valor1, int $valor2)
    {
        return view('site.teste')->with('valor1', $valor1)->with('valor2',$valor2);
    }
}
