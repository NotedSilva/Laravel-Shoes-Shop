<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ModalAdicionar');
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'nome' => 'string|required',
            'preco' => 'string|required',
            'descricao' => 'string|required',
            'quantidade' => 'numeric|required'
        ]);
        
        
        Product::create($dadosValidados);
        
        return Redirect::to('product');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    
    public function listarProdutos(Request $request)
    {
        $dadosProdutos = Product::query();
        $dadosProdutos->when($request->id, function($query, $valor){
            $query->where('id', 'like', '%'.$valor.'%');
        });
        $dadosProdutos = $dadosProdutos->get();
        return view('index', ['dadosProduto' => $dadosProdutos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $id)
    {
        return view('ModalAtualizar', ['dadosProduto' => $id]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $id)
    {
        $dadosValidados = $request->validate([
            'nome' => 'string|required',
            'preco' => 'string|required',
            'descricao' => 'string|required',
            'quantidade' => 'numeric|required'
        ]);
        $id->fill($dadosValidados);
        $id->save();
        return Redirect::to('/');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $id->delete();
        return Redirect::to('/');
    }
}
