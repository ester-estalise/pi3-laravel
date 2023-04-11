<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Carrinho;
use IlLuminate\Support\Facades\Auth;
class CarrinhoController extends Controller
{
    public function store(Produto $produto){
        
        
        Carrinho::create([
            'USUARIO_ID' => Auth::user()->USUARIO_ID,
            'PRODUTO_ID' => $produto->PRODUTO_ID,
            'ITEM_QTD' => 1

        ]);

        return redirect(route('carrinho.index'));
    }
 
    public function index(){
        $carrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();
        return view('carrinho.index')->with('carrinho' , $carrinho);
    }
}
