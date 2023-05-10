
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
      @foreach($produto->ProdutoImagem as $imagem )
          <!--<p>{{$imagem->IMAGEM_URL}}</p>-->
          <img src="{{$imagem->IMAGEM_URL}}">
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
          <span class="font-1-xs cor-6"><img src="../img/icones/estoque.svg" alt=""> {{$produto->ProdutoEstoque->PRODUTO_QTD}}</span>
          @else
          <span class="font-1-xs cor-6"><img src="../img/icones/estoque.svg" alt="">sem estoque</span>
          @endif

        </div>


  </main>


  <article class="bicicletas-lista container">
    <h2 class="font-1-xxl">escolha a sua<span class="cor-p1">.</span></h2>

    <ul>
      <li>
        <a href="./nimbus.html">
          <img src="../img/teclas/piano/piano.jpg" alt="Bicicleta preta">
          <h3 class="font-1-xl">Piano Yamaha</h3>
          <span class="font-2-m cor-8">R$ 4999</span>
        </a>
      </li>
      <li>
        <a href="./teclado.html">

          <h3 class="font-1-xl">Teclado Yamaha</h3>
          <span class="font-2-m cor-8">R$ 3999</span>
        </a>
      </li>
    </ul>
  </article>



  @endsection
