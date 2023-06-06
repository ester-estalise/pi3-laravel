<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
{
    $produtos = Produto::all();
    return view('produto.index', compact('produtos'));
}


    public function show(Produto $produto){

            return view('produto.show')->with('produto',$produto);
    }

    public function produtos()
{
    return $this->index();
}

}
