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

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
        @if(isset($item->Produto->ProdutoImagem[0]->IMAGEM_URL))
    <img class="img-fluid rounded-start"style=" padding=40px width=50px;height=50px " src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}">
    @else
    <img class="img-fluid rounded-start"style=" padding=40px width=50px;height=50px "src="https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg">
    @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$item->Produto->PRODUTO_NOME}}</h5>
        <p class="card-text">{{$item->Produto->PRODUTO_DESC}}</p>
        <p class="card-text"><small class="text-muted">R$ {{$item->Produto->PRODUTO_PRECO}}</small></p>
        @php
        $total += (double)$item->Produto->PRODUTO_PRECO - (double)$item->Produto->PRODUTO_DESC;
        @endphp
      </div>
    </div>
  </div>
</div>



@endforeach


</div>
</div>

@endsection
