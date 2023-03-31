<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    function index()
    {
        $fornecedores = [
            0 => ['nome' => 'fornecedor 1', 'status' => 'n','ddd'=>11,'telefone'=>'8888-9999'],
            1 => ['nome' => 'fornecedor 2', 'status' => 'n','ddd'=>22,'telefone'=>'8888-9999'],
            2 => ['nome' => 'fornecedor 3', 'status' => 'n','ddd'=>33,'telefone'=>'8888-9999'],
            3 => ['nome' => 'fornecedor 4', 'status' => 'n','ddd'=>44,'telefone'=>'8888-9999'],
            4 => ['nome' => 'fornecedor 5', 'status' => 'n','ddd'=>55,'telefone'=>'8888-9999']
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
