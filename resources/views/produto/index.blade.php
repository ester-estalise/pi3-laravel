@extends('layouts.app')
@section('main')


  <article class="bicicletas-lista">
    <h2 class="container font-1-xxl " style="color:#37767c">Mais vendidos<span class="cor-4">.</span></h2>


    <ul>
        <script>
            function mostrarProduto(idProduto) {
                window.location = `/produto/${idProduto}`;
            }
        </script>
    @foreach($produtos as $produto)
      <li>

      <div class="card m-3">
      <img src="{{$produto->getImagem()}}" alt="..." width="700" height="750" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title" style="color:black">{{$produto->PRODUTO_NOME}}</h5>
      <p class="card-text" style="color:black">R$ {{$produto->PRODUTO_PRECO}}</p>
    </div>
    <div class="card-footer justify-content-center">
    <button type="button" class="btn btn-warning  justify-content-center" onclick="mostrarProduto({{$produto->PRODUTO_ID}});">Ver Mais</button>
    </div>
  </div>
      </li>
      @endforeach

    </ul>
  </article>



@endsection
