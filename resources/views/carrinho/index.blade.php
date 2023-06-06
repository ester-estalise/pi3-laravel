@extends('layouts.app')
@section('main')
<div class="container">
    <div class="row">
        <h1>Meu Carrinho</h1>
        @php
            $total = 0;
            $itemTotal = 0;
        @endphp

        @foreach (App\Models\Carrinho::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get() as $item)
            @php
                $preco = $item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO;
                $subtotal = $preco * $item->ITEM_QTD;
                $total += $subtotal;
                $itemTotal += $item->ITEM_QTD;
            @endphp

            @if ($item->ITEM_QTD > 0)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4" >
                        @if(isset($item->Produto->ProdutoImagem[0]->IMAGEM_URL))
    <img class="img-fluid rounded-start"style=" height:200px; width:200px; " src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}">
    @else
    <img class="img-fluid rounded-start"style="height:200px; width:200px; "src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg">
    @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->Produto->PRODUTO_NOME}}</h5>
                                <p class="card-text">{{$item->Produto->PRODUTO_DESC}}</p>
                                <p class="card-text"><small class="text-muted">R$ {{$item->Produto->PRODUTO_PRECO}}</small></p>
                                <p class="card-text"> DESCONTO = -R$ {{$item->Produto->PRODUTO_DESCONTO}}</p>
                                <p class="card-text">quantidade = {{$item->ITEM_QTD}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        @endforeach


        </div>
        <div class="card"  style="width:180px;  height:50px; margin-left:-10px">
            <div class="card-body">

                Valor Total:  R${{$total}}

            </div>
    </div>
</div>

<form action="{{route('pedido.checkout')}}"  method="POST">
    @csrf
    <button style=" margin-left:100px;margin-top:20px" type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Continuar</button>
</form>

@endsection
