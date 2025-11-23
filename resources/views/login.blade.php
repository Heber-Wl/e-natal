<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href=" {{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    {{-- FONTE --}}
    <style>@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');</style>

    <title>Login</title>
</head>
<body>
    @include('layouts.alert')
    <section class="container-login">
        <div class="bloco-form">
            <div class="top">
                <svg class="icon-baby" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><defs><mask id="SVGHRhf0LCr"><g fill="none"><path fill="#000" fill-rule="evenodd" stroke="#fff" stroke-width="4" d="M24 43.6c8.432 0 15.56-6.68 17.894-14.35C42.418 27.526 46 27.526 46 23.8s-3.616-3.94-4.201-5.752C39.372 10.535 32.32 4 24 4C15.675 4 8.62 10.54 6.197 18.06C5.615 19.87 2 20.01 2 23.8s3.592 3.79 4.135 5.542C8.497 36.964 15.602 43.6 24 43.6Z" clip-rule="evenodd"/><path stroke="#fff" stroke-linecap="round" stroke-width="4" d="M41.799 18.048C39.372 10.535 32.32 4 24 4"/><path fill="#fff" stroke="#fff" d="M19.1 21.6c0 .826-.224 1.552-.56 2.056c-.339.508-.751.744-1.14.744s-.8-.236-1.14-.744c-.336-.504-.56-1.23-.56-2.056s.224-1.552.56-2.056c.34-.508.752-.744 1.14-.744c.389 0 .801.236 1.14.744c.336.504.56 1.23.56 2.056Zm13.2 0c0 .826-.224 1.552-.56 2.056c-.339.508-.752.744-1.14.744s-.801-.236-1.14-.744c-.336-.504-.56-1.23-.56-2.056s.224-1.552.56-2.056c.339-.508.752-.744 1.14-.744s.801.236 1.14.744c.336.504.56 1.23.56 2.056Z"/><path fill="#fff" fill-rule="evenodd" d="M18.498 31.75q2.896 1.95 5.511 1.95q2.613 0 5.18-1.945" clip-rule="evenodd"/><path stroke="#fff" stroke-linecap="round" stroke-width="4" d="M18.498 31.75q2.896 1.95 5.511 1.95q2.613 0 5.18-1.945M31.728 6.2q.402 2.901-1.769 4.239t-7.055 1.254"/></g></mask></defs><path fill="#2EAEAF" d="M0 0h48v48H0z" mask="url(#SVGHRhf0LCr)"/></svg>
                <span class="titulo">E-NATAL</span>
            </div>
            <form class="conteudo" action="{{ route('logar') }}" method="POST">
                @csrf
                <div class="inputs">
                    <label class="label" for="">Email</label>
                    <input class="input" name="email" type="email" required>
                </div>
                <div class="inputs">
                    <label class="label" for="">Senha</label>
                    <input class="input" name="password" type="password" required>
                </div>
                <a class="cadastre-se" href="{{ route('cadastroMedico') }}">Cadastre-se</a>
                <button class="botao-entrar" type="submit">
                    <svg class="icone-botao" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="#fff" d="M365.52 209.85L59.22 67.01c-16.06-7.49-35.15-.54-42.64 15.52L3.01 111.61c-7.49 16.06-.54 35.15 15.52 42.64L236.96 256.1L18.49 357.99C2.47 365.46-4.46 384.5 3.01 400.52l13.52 29C24 445.54 43.04 452.47 59.06 445l306.47-142.91a32 32 0 0 0 18.48-29v-34.23c-.01-12.45-7.21-23.76-18.49-29.01"/></svg>
                </button>
            </form>
        </div>
    </section>
</body>
</html>