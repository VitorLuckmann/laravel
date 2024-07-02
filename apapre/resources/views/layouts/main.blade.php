<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logoapapre.png" alt="Logo Apapre">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Eventos</a>
                        <li class="nav-item">
                        <a href="/events/cadastroevento" class="nav-link">Cadastrar Ação</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="/events/doacao" class="nav-link">Adoção</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/entrar" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/cadastro" class="nav-link">Cadastro</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>APAPRE &copy; 2024</p>
    </footer>

</body>

</html>