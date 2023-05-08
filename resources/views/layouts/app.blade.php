<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ECHO</title>
  <meta name="description" content="Bicicletas ">

  <link rel="preload" href="./css/style.css" as="style">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon"  href="img/logo.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
  <body>
    <header class="header-bg">
      <div class="header container">
        <a href="./">
          <img src="/img/logo.png" width="100" height="50" alt="logo">
        </a>

        <nav aria-label="primaria">
          <ul class="header-menu font-1-m cor-5">
            <li><a href="./teclas.html">Teclas</a></li>
            <li><a href=".//cordas.html">Cordas</a></li>
            <li><a href="./audio.html">Audio</a></li>
            <li><a href="./contato.html">Contato</a></li>
            <!--barra de pesquisa-->
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" class="bi bi-search">
            </form>
           <li> <a href="./"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></a></li>

        @if(!Auth::check())
        <div class="dropdown">
                        <a href ="{{route('login')}}"> Entre ou Cadastre-se<svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
        </svg></a>
                </div>
        @endif

          @if(Auth::check())

            <li><a href="/resources/views/carrinho/index.blade.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg> </a></li>

            <li>Olá {{Auth::user()->USUARIO_NOME}}
            <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="dropdown-item" href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            sair
                        </a>
                    </form>

            </li>

            @endif
          </ul>



        </nav>
    </div>
</header>
@yield('main')
<footer class="footer-bg">
    <div class="footer container">
    <img src="/img/logo.png" width="100" height="50" alt="logo">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-5">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+552199999999 cor-5" style="text-decoration: none;color:aliceblue">+55 11 9999-9999</a></li>
          <li><a href="mailto:contato@bikcraft.com" style="text-decoration: none;color:aliceblue">contato@echo.com</a></li>
          <li>Rua Ali Perto, 42 - Botafogo</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="./img/redes/instagram.svg" width="32" height="32" alt="Instagram">
          </a>
          <a href="./">
            <img src="./img/redes/facebook.svg" width="32" height="32" alt="Facebook">
          </a>
          <a href="./">
            <img src="./img/redes/youtube.svg" width="32" height="32" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-5">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./contato.html" style="text-decoration: none;color:aliceblue">Contato</a></li>
            <li><a href="./termos.html" style="text-decoration: none;color:aliceblue">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-5" style="text-align: center;">ECHO © Alguns direitos reservados.</p>
    </div>
  </footer>
</body>

</html>
