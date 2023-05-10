<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;



class CarrinhoController extends Controller
{
    public function store(Produto $produto, Request $request){
        //dd(Auth::user()->USUARIO_ID);

            $item= Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)
                ->where('PRODUTO_ID', $produto->PRODUTO_ID)->first();

                if($item){
                    $item=$item->update([
                        'ITEM_QTD'=>$request->inputQuantity + $item->ITEM_QTD
                    ]);
                }else{

                    $item=Carrinho::create([
                        'USUARIO_ID' => Auth::user()->USUARIO_ID,
                        'PRODUTO_ID' => $produto->PRODUTO_ID,
                        'ITEM_QTD'=> (int)$request->inputQuantity
                     ]);
                }

        return redirect(route('carrinho.index'));

    }

    public function index(){
        $carrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();
        return view('carrinho.index')->with('carrinho',$carrinho);
    }
}
