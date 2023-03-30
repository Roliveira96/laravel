<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(): void
    {
        echo 'Olá, seja bem vindo ao curso!';
    }

}
