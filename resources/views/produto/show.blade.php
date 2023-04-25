<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PRODUTO</title>
  <meta name="description" content="Nebula.">

  <link rel="preload" href="/css/style.css" as="style">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body id="bicicleta">
  <body>
    <header class="header-bg">
      <div class="header container">
      <a href="./">
          <img src="/img/logo (1).png" width="100" height="50" alt="logo">
        </a>

        <nav aria-label="primaria">
          <ul class="header-menu font-1-m cor-0">
            <li><a href="./teclas.html">Teclas</a></li>
            <li><a href="./cordas.html">Cordas</a></li>
            <li><a href="./audio.html">Audio</a></li>
            <li><a href="./contato.html">Contato</a></li>
            <li><a href="./"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg></a></li>
          </ul>
        </nav>
      </div>
    </header>


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
          <a class="botao" href="./">Comprar Agora</a>
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



  <footer class="footer-bg">
    <div class="footer container">
      <img src="../img/logocerto.png" width="136" height="32" alt="Bikcraft">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+552199999999">+55 21 9999-9999</a></li>
          <li><a href="mailto:contato@bikcraft.com">contato@echo.com</a></li>
          <li>Rua Ali Perto, 42 - Botafogo</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="../img/redes/instagram.svg" width="32" height="32" alt="Instagram">
          </a>
          <a href="./">
            <img src="../img/redes/facebook.svg" width="32" height="32" alt="Facebook">
          </a>
          <a href="./">
            <img src="../img/redes/youtube.svg" width="32" height="32" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./contato.html">Contato</a></li>
            <li><a href="./termos.html">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">ECHO © Alguns direitos reservados.</p>
    </div>
  </footer>
</body>

</html>
