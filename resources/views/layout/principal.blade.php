<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppTeste - @yield('titulo')</title>
</head>
<body>
<header>
    @section('navbar')
        @include('layout._includes._navbar')
        <p>
            Aqui esta o nosso nav bar
        </p>
    @show
    <hr>
</header>

<main>
    <div>
        @yield('conteudo')
    </div>
</main>
<footer>
    <hr>
    @section('footer')

        @include('layout._includes._footer')
    @show
    <hr>
</footer>
</body>
</html>