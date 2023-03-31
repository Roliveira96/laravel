<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $valor1, int $valor2)
    {
//        echo "A soma de p1 + p2 é " . $valor1 + $valor2;
        return view('site.teste', ['valor1' => $valor1, 'valor2'=>$valor2]);
    }
}
