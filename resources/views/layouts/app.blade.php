<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detalhesPaciente.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/recomendacoes.css') }}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    {{-- FONTE --}}
    <style>@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');</style>
</head>
<body>
    @include('layouts.alert')
    @include('components.navbar')

    <div class="conteudo-principal">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="{{ asset('js/listagemScript.js') }}"></script>
    <script src="{{ asset('js/cadastroScript.js') }}"></script>

</body>
</html>
