<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(){
        //quero que vc guarde na variavel todos os produtos
        $produtos = Produto::all();
        //pegue na pasta produto o file index
        return view('produto.index')->with('produtos',Produto::all());

    }

    public function show(Produto $produto){

            return view('produto.show')->with('produto',$produto);
    }

}
