<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index()
    {
        $fornecedores = [
            0 => ['nome' => 'fornecedor 1', 'status' => 'n','cnpj'=>'123'],
            1 => ['nome' => 'fornecedor 1', 'status' => 'n']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
