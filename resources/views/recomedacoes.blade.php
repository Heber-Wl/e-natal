@extends('layouts.app')

@section('title', 'Recomendações')

@section('content')

    <div class="cabecalho-pagina">
        <div class="info-pagina">
            <div class="caminho-navegacao">
                <a href="#">Início</a> / <a href="#">Pacientes</a> / <a href="#">Detalhes</a> / Recomendações
            </div>
            <h1 class="titulo-pagina">Recomendações</h1>
        </div>
    </div>

    <div class="container-recomendacoes">

        <div class="card-risco card-alto-risco">
            <div class="cabecalho-risco">
                <div class="icone-risco">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <h2 class="titulo-risco">Alto Risco</h2>
            </div>
            <div class="conteudo-risco">
                <ul class="lista-itens">
                    <li>Obesidade (IMC 39)</li>
                    <li>Histórico de pré-eclâmpsia na família</li>
                    <li>Familiar de primeiro grau diabético</li>
                    <li>Hemoglobina glicada de 5,8%</li>
                </ul>
            </div>
        </div>

        <div class="card-risco card-risco-moderado">
            <div class="cabecalho-risco">
                <div class="icone-risco">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h2 class="titulo-risco">Risco Moderado</h2>
            </div>
            <div class="conteudo-risco">
                <ul class="lista-itens">
                    <li>Gestante tem 35 anos de idade</li>
                    <li>Faltando as vacinas dT e Covid 19</li>
                </ul>
            </div>
        </div>

        <div class="card-risco card-complicacoes">
            <div class="cabecalho-risco">
                <div class="icone-risco">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h2 class="titulo-risco">Complicações</h2>
            </div>
            <div class="conteudo-risco">
                <ul class="lista-itens">
                    <li>Considerando os fatores de risco, a gestante corre o risco de desenvolver diabetes mellitus
                        gestacional.</li>
                </ul>
            </div>
        </div>

        <div class="card-recomendacoes-principal">
            <div class="cabecalho-recomendacoes">
                <div class="icone-recomendacoes">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h2 class="titulo-recomendacoes">Recomendações</h2>
            </div>
            <div class="conteudo-recomendacoes">
                <ul class="lista-recomendacoes">
                    <li>
                        Encaminhar gestante para o pré-natal de <span class="destaque-alto-risco">alto-risco</span>.
                    </li>
                    <li>
                        Encaminhar gestante para tomar as vacinas dT e Covid-19.
                    </li>
                    <li>
                        Recomendar gestante a vigiar o ganho de peso adequado.
                    </li>
                    <li>
                        Encaminhar gestante para uma nutricionista.
                    </li>
                    <li>
                        Recomendar gestante para um educador físico.
                    </li>
                </ul>
            </div>
        </div>

        <div class="area-botoes-recomendacoes">
            <button type="button" class="botao-acao-rec botao-voltar-rec" onclick="window.history.back()">
                <i class="fas fa-arrow-left"></i>
                Voltar
            </button>
            <button type="button" class="botao-acao-rec botao-voltar-rec"
                onclick="window.location='{{ route('detalhes') }}'">
                <i class="fas fa-arrow-left"></i>
                Voltar
            </button>
        </div>

    </div>

@endsection
