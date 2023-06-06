
@extends('layouts.app')
@section('main')






@php
  $produtos = App\Models\Produto::all(); // Exemplo de consulta de todos os produtos
@endphp

<div class="container">
  <ul class="list-inline">
    @foreach($produtos as $produto)
    <li class="list-inline-item">
      <div class="card m-3" style="height: 350px; width: 250px;">
        <img src="{{$produto->getImagem()}}" alt="..." class="card-img-top" style="object-fit: cover; height: 100%;">
        <div class="card-body">
          <h5 class="card-title" style="color:black">{{$produto->PRODUTO_NOME}}</h5>
          <p class="card-text" style="color:black">R$ {{$produto->PRODUTO_PRECO}}</p>
        </div>
         <a type="button" class="btn btn-warning justify-content-center" href="/produto/{{$produto->PRODUTO_ID}}" class="btn btn-primary">Ver Item</a>
        </div>


      <br>
    </li>
    @endforeach
  </ul>
</div>








@endsection
