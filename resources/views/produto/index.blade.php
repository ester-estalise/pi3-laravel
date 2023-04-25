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
    @foreach($produtos->take(6) as $produto)
      <li>

          @if(count($produto->ProdutoImagem) > 0)
            <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}} " alt="Bicicleta preta" width="700" height="750">
          @else
            <img src="/img/bicicleta/guitarra.jpg" alt="Bicicleta preta" width="700" height="750">
          @endif
          <h3 class="font-1-xl" style="color: #37767c;">{{$produto->PRODUTO_NOME}}</h3>

          <span class="font-2-m cor-4"> R${{$produto->PRODUTO_PRECO}}</span>
        </a>
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
