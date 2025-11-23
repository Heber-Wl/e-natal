<<<<<<<<< Temporary merge branch 1
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Registro</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    {{-- FONTE --}}
    <style>@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');</style>
</head>
<body>
    @include('layouts.alert')
    <nav class="barra-navegacao">
        <div class="logo">
            <i class="fas fa-heartbeat"></i>
            <span>E-Natal</span>
        </div>
        <div class="menu-links">
            <a href="#">Início</a>
            <a href="#" class="ativo">Novo Registro</a>
        </div>
        <div class="info-usuario">
            <span>{{ Auth::guard('medico')->user()->resgatarPrimeirosDoisNomes() }}</span>
            <div class="avatar-usuario">DS</div>
        </div>
    </nav>

    <div class="conteudo-principal">
        <div class="cabecalho-pagina">
            <div class="caminho-navegacao">
                <a href="#">Pacientes</a> / Novo Registro
            </div>
            <h1 class="titulo-pagina">Novo Registro</h1>
        </div>

        <form class="cartao-formulario" method="POST" action="{{ route('cadastrar') }}">
            @csrf
            <div class="secao-formulario secao-dados">
                <div class="titulo-secao">
                    <i class="fas fa-user"></i>
                    <span>Dados Pessoais</span>
                </div>
                <div class="grade-campos">
                    <div class="grupo-campo">
                        <label class="rotulo">Cartão do SUS <span class="obrigatorio">*</span></label>
                        <input type="text" class="campo-entrada" name="cartao_sus" placeholder="000 0000 0000 0000" required>
                    </div>
                    <div class="grupo-campo">
                        <label class="rotulo">Nome</label>
                        <input type="text" class="campo-entrada" name="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="grupo-campo">
                        <label class="rotulo">Peso (KG) <span class="obrigatorio">*</span></label>
                        <input type="text" class="campo-entrada" name="peso" placeholder="Ex: 65" required>
                    </div>
                    <div class="grupo-campo">
                        <label class="rotulo">Altura (M) <span class="obrigatorio">*</span></label>
                        <input type="text" class="campo-entrada" name="altura" placeholder="Ex: 1.65" required>
                    </div>
                    <div class="grupo-campo">
                        <label class="rotulo">Data de nascimento</label>
                        <input type="date" class="campo-entrada" name="data_nascimento" required>
                    </div>
                    <div class="grupo-campo">
                        <label class="rotulo">Data da última menstruação</label>
                        <input type="date" class="campo-entrada" name="data_ultima_mestruacao">
                    </div>
                </div>
=========
@extends('layouts.app')

@section('title', 'Novo Registro')

@section('content')

    <div class="cabecalho-pagina">
        <div class="info-pagina">
            <div class="caminho-navegacao">
                <a href="/">Início</a> / Pacientes
>>>>>>>>> Temporary merge branch 2
            </div>
            <h1 class="titulo-pagina">Novo Registro</h1>
        </div>

<<<<<<<<< Temporary merge branch 1
            <div class="secao-formulario secao-gestacao">
                <div class="titulo-secao">
                    <i class="fas fa-baby"></i>
                    <span>Gestação</span>
                </div>
                <div class="grade-alternancia">
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Primeira Gestação?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="primeira_gestacao">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Gestação Múltipla?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="gestacao_multipla">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Reprodução assistida?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="reproducao_assistida">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Perda gestacional anterior?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="perda_gestacional">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="secao-formulario secao-mental">
                <div class="titulo-secao">
                    <i class="fas fa-brain"></i>
                    <span>Mental</span>
                </div>
                <div class="grade-alternancia">
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Ambiente estressante?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="ambiente_estressante">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Gestação planejada?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="gestacao_planejada">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Aceita a gravidez?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="aceita_gravidez">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Histórico psiquiátrico?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="historico_psiquiatrico">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="secao-formulario secao-saude">
                <div class="titulo-secao">
                    <i class="fas fa-notes-medical"></i>
                    <span>Saúde</span>
                </div>
                <div class="grade-alternancia">
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Histórico de pré-eclâmpsia?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="pre_eclampsia">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Diabetes gestacional?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="diabetes_gestacional">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Hipertensão?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="hipertensao">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                    <div class="item-alternancia">
                        <span class="rotulo-alternancia">Doenças crônicas?</span>
                        <label class="interruptor">
                            <input type="checkbox" name="doencas_cronicas">
                            <span class="deslizante"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="acoes-formulario">
                <button type="button" class="botao botao-secundario" onclick="window.history.back()">Cancelar</button>
                <button type="submit" class="botao botao-primario">Salvar</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/cadastroScript.js') }}"></script>

    <footer class="rodape">
        <div class="rodape-conteudo">
            <div class="rodape-logo">
                <i class="fas fa-heartbeat"></i>
                <span>E-natal</span>
            </div>
            <div class="rodape-info">
                <p> 2025 E-natal
                <p>Sistema de Acompanhamento Gestacional</p>
            </div>
        </div>
    </footer>
</body>
</html>
=========
        <div class="perfil-profissional">
            <img src="{{ asset('images/avatar-profissional.jpg') }}" alt="Foto" class="foto-profissional">
            <div class="dados-profissional">
                <span class="nome-profissional">Dr. Silva</span>
                <span class="registro-profissional">xxx-xxx-xxx (coren ou crm)</span>
            </div>
        </div>
    </div>

    <form class="cartao-formulario">
        <div class="secao-formulario secao-dados">
            <div class="titulo-secao">
                <i class="fas fa-user"></i>
                <span>Dados Pessoais</span>
            </div>
            <div class="grade-campos">
                <div class="grupo-campo">
                    <label class="rotulo">Cartão do SUS <span class="obrigatorio">*</span></label>
                    <input id="sus" type="text" class="campo-entrada" placeholder="000 0000 0000 0000" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Nome</label>
                    <input id="nome" type="text" class="campo-entrada" placeholder="Nome completo">
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Peso (KG) <span class="obrigatorio">*</span></label>
                    <input id="peso" type="text" class="campo-entrada" placeholder="Ex: 65" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Altura (M) <span class="obrigatorio">*</span></label>
                    <input id="altura" type="text" class="campo-entrada" placeholder="Ex: 1.65" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Data de nascimento</label>
                    <input type="date" class="campo-entrada">
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Data da última menstruação</label>
                    <input type="date" class="campo-entrada">
                </div>
            </div>
        </div>

        <div class="secao-formulario secao-gestacao">
            <div class="titulo-secao">
                <i class="fas fa-baby"></i>
                <span>Gestação</span>
            </div>
            <div class="grade-alternancia">
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Primeira Gestação?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="primeira_gestacao">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Gestação Múltipla?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="gestacao_multipla">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Reprodução assistida?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="reproducao_assistida">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Perda gestacional anterior?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="perda_gestacional">
                        <span class="deslizante"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="secao-formulario secao-mental">
            <div class="titulo-secao">
                <i class="fas fa-brain"></i>
                <span>Mental</span>
            </div>
            <div class="grade-alternancia">
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Ambiente estressante?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="ambiente_estressante">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Gestação planejada?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="gestacao_planejada">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Aceita a gravidez?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="aceita_gravidez">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Histórico psiquiátrico?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="historico_psiquiatrico">
                        <span class="deslizante"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="secao-formulario secao-saude">
            <div class="titulo-secao">
                <i class="fas fa-notes-medical"></i>
                <span>Saúde</span>
            </div>
            <div class="grade-alternancia">
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Histórico de pré-eclâmpsia?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="pre_eclampsia">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Diabetes gestacional?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="diabetes_gestacional">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Hipertensão?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="hipertensao">
                        <span class="deslizante"></span>
                    </label>
                </div>
                <div class="item-alternancia">
                    <span class="rotulo-alternancia">Doenças crônicas?</span>
                    <label class="interruptor">
                        <input type="checkbox" name="doencas_cronicas">
                        <span class="deslizante"></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="acoes-formulario">
            <button type="button" class="botao botao-secundario" onclick="window.history.back()">Cancelar</button>
            <button type="submit" class="botao botao-primario">Salvar</button>
        </div>
    </form>

@endsection
>>>>>>>>> Temporary merge branch 2
