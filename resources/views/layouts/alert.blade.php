<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="div">
        @if(session('success'))
            <div class="alert alert-success alert-withe rounded">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true"> x </button>
                <div class="icon"><i class="fa fa-check"></i></div>
                <span class="mensagem-alert"><strong>Sucesso! </strong> {{ session('success') }}</span>
            </div>
        @endif
        @if(session('info'))
            <div class="alert alert-info alert-withe rounded">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true"> x </button>
                <div class="icon"><i class="fa fa-info-circle"></i></div>
                <span class="mensagem-alert"><strong>Info! </strong> {{ session('info') }}</span>
            </div>
        @endif
        @if(session('warning'))
            <div class="alert alert-warning alert-withe rounded">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true"> x </button>
                <div class="icon"><i class="fa fa-warning"></i></div>
                <span class="mensagem-alert"><strong>Alerta! </strong> {{ session('warning') }}</span>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-withe rounded">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true"> x </button>
                <div class="icon"><i class="fa fa-times-circle"></i></div>
                <span class="mensagem-alert"><strong>Erro! </strong> {{ session('error') }}</span>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-withe rounded">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true"> x </button>
                <div class="icon"><i class="fa fa-times-circle"></i></div>
                <span class="mensagem-alert"><strong>Error! </strong> 
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </span>
            </div>
        @endif
    </div>

    <script>
        $('.alert').click(function() {
            $(this).fadeOut()
        });
    </script>
    <script>
        setTimeout(function() {
            document.querySelectorAll('.alert').forEach(function(alert) {
                alert.style.transition = "opacity 0.5s ease";
                alert.style.opacity = "0";
                setTimeout(() => alert.remove(), 500);
            });
        }, 6000);
    </script>
</body>
</html>