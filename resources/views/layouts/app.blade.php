<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">

    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    @include('components.navbar')

    <div class="conteudo-principal">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="{{ asset('js/listagemScript.js') }}"></script>
    <script src="{{ asset('js/cadastroScript.js') }}"></script>

</body>
</html>
