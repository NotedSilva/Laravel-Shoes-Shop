<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listarProdutos(Request $request)
    {
        $dadosProdutos = new ProductController(); 
        $dadosProdutos = $dadosProdutos->buscarProduto($request, 'id');
        return view('UserIndex', ['dadosProduto' => $dadosProdutos]);
    }
}
