<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Carrinho;
use Illuminate\Support\Facades\Auth;


class EnderecoController extends Controller
{
    public function index(){
        $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)->first();//retorna todos os produtos e guarda nessa variavel

        return view('endereco.index')->with('endereco',$endereco);//retorna a view numa pasta(n pode ser no plural, pois é o q está na model) e o arquivo("".blade.php)

    }


    /*
    public function store(){

        $endereco = Endereco::where('USUARIO_ID' , Auth::user()->USUARIO_ID)->first();

        return view('endereco.index')->with('endereco',$endereco);




    }*/


    public function save(Request $request )
    {

        $usuario = Auth::user()->USUARIO_ID;
        $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)
        ->where('USUARIO_ID', $usuario)->first();



        if($endereco){
            $endereco =$endereco->update([
                'USUARIO_ID'=> (int)$usuario,
                'ENDERECO_NOME'=> $request->Endereco_nome,
                'ENDERECO_LOGRADOURO'=> $request->Logradouro,
                'ENDERECO_NUMERO'=> (int)$request->Numero,
                'ENDERECO_COMPLEMENTO'=> $request->Complemento,
                'ENDERECO_CEP'=> $request->Cep,
                'ENDERECO_CIDADE'=> $request->Cidade,
                'ENDERECO_ESTADO'=> $request->Estado,
                'ENDERECO_APAGADO'=> 1
            ]);
            $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)->first();
return view('endereco.index', compact('endereco'));

        }

            else{
                Endereco::create([
                'USUARIO_ID'=> (int)$usuario,
                'ENDERECO_NOME'=> $request->Endereco_nome,
                'ENDERECO_LOGRADOURO'=> $request->Logradouro,
                'ENDERECO_NUMERO'=> (int)$request->Numero,
                'ENDERECO_COMPLEMENTO'=> $request->Complemento,
                'ENDERECO_CEP'=> $request->Cep,
                'ENDERECO_CIDADE'=> $request->Cidade,
                'ENDERECO_ESTADO'=> $request->Estado,
                'ENDERECO_APAGADO'=> 1
                ]);
                $endereco = Endereco::where('USUARIO_ID', Auth::user()->USUARIO_ID)->first();
return view('endereco.index', compact('endereco'));
            }
/*

            $carrinho = Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->where('ITEM_QTD', '<>', 0)->get();9*/


    }
}
