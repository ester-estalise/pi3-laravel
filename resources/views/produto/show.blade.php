
@extends('layouts.app')
@section('main')

  <main class="titulo-bg">
    <div>
      <div class="titulo container">

        <h1 class="font-1-xxl cor-0">{{$produto->PRODUTO_NOME}}<span class="cor-p1">.</span></h1>
      </div>
    </div>
    <div class="bicicleta container">
      <div class="bicicleta-imagens">
      @foreach($produto->ProdutoImagem as $index => $imagem)
  @if($index === 0)
    <!--<p>{{$imagem->IMAGEM_URL}}</p>-->
    <img style="width: 300px;height:350px" src="{{$imagem->IMAGEM_URL}}">
  @endif
@endforeach



      </div>
      <div class="bicicleta-conteudo">
      <p class="font-2-xl cor-1" > R${{$produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO}}</p>

        <p class="font-2-xl cor-1"><p>{{$produto->PRODUTO_DESC}}</p>
        <div class="bicicleta-comprar">
            <form action="{{route('carrinho.store',$produto->PRODUTO_ID)}}" method="post">
            @csrf
            <button class="botao" >Comprar Agora</button>
            <input name="inputQuantity" type="hidden" value="1">
            </form>

          <span class="font-1-xs cor-6"><img src="../img/icones/entrega.svg" alt=""> entrega em 5 dias</span>
          @if($produto->ProdutoEstoque)
          <span class="font-1-xs cor-6" style="margin-left:105%;margin-top:-20px"><img src="../img/icones/estoque.svg" alt=""> {{$produto->ProdutoEstoque->PRODUTO_QTD}}</span>
          @else
          <span class="font-1-xs cor-6" style="margin-left:105%;margin-top:-20px"><img src="../img/icones/estoque.svg" alt="">sem estoque</span>
          @endif

        </div>


  </main>



  @endsection
