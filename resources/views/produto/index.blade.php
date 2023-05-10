@extends('layouts.app')
@section('main')

<main class="introducao-bg">
    <div class="introducao container">
      <div class="introducao-conteudo">
        <h1 class="font-1-xxl cor-5">Instrumentos de primeira linha para você<span class="cor-p1">.</span></h1>
        <p class="font-2-l cor-5">Só aqui na ECHO você encontra os melhores instrumentos para sua banda, ou para curtir um Karaokê com a família.
        </p>

      </div>
      <picture>
        <source media="(max-width: 800px)" srcset="./img/bicicletas/nimbus.jpg">
        <img src="./img/fotos/inicial.jpg" width="1280" height="1600" alt="Bicicleta elétrica preta.">
      </picture>
    </div>
  </main>
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
  <section class="depoimento" aria-label="Depoimento">
    <div>
      <img src="./img/fotos/depoimento2.jpg" width="1560" height="1360" alt="Pessoa pedalando uma bicicleta Bikcraft">
    </div>
    <div class="depoimento-conteudo">
      <blockquote class="font-1-xl cor-4">
        <p>A música sempre foi minha paixão, e comprar meus instrumentos na Echo foi a melhor coisa que eu fiz, eu ja tenho todos eles a mais de um ano, e eles só me ajudaram muito mais a intensificar meu amor pela música.</p>
      </blockquote>
      <span class="font-1-m-b cor-4">Ana Júlia</span>
    </div>
  </section>


@endsection
