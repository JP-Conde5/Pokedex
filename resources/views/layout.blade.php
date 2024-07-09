<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../icon" type="image/x-icon">
    <title>Pokedex</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Bootstrap
        </a>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pokedex</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pesquisar</a>
            </li>
        </ul>
    </nav>

    
    <main role='main' class='flex-shrink-0'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @hasSection('content')
                        @yield('content')
                    @endif
                </div>
            </div>
        </div>
    </main>
    <footer class="container-fluid mastfoot mt-auto">
        <div class="inner">
          <p>Template de capa usando</p>
        </div>
      </footer>
</body>
</html>
