@extends('layouts.app')

@section('title', 'Detalhes do Paciente')

@section('content')

    <div class="cabecalho-pagina">
        <div class="info-pagina">
            <div class="caminho-navegacao">
                <a href="#">Início</a> / <a href="#">Pacientes</a> / Detalhes
            </div>
            <h1 class="titulo-pagina">Detalhes do Paciente</h1>
        </div>
    </div>

    <div class="card-principal-paciente">
        <div class="foto-principal">
            <i class="fas fa-user"></i>
        </div>
        <div class="dados-principais">
            <h2 class="nome-principal">Nome da Paciente</h2>
            <div class="info-secundaria">
                <span><i class="fas fa-id-card"></i> CNS: 000 0000 0000 0000</span>
                <span><i class="fas fa-calendar"></i> Cadastrado em: xx/xx/xxxx</span>
            </div>
        </div>
    </div>

    <div class="secoes-informacoes">
        
        <div class="secao-card">
            <div class="cabecalho-secao">
                <h3><i class="fas fa-user"></i> Dados Pessoais</h3>
                <button class="botao-editar"><i class="fas fa-edit"></i> Editar</button>
            </div>
            <div class="conteudo-secao">
                <div class="campo-info">
                    <span class="label-info">Nome Completo</span>
                    <span class="valor-info">Nome da Paciente</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Cartão do SUS</span>
                    <span class="valor-info">000 0000 0000 0000</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Data de Nascimento</span>
                    <span class="valor-info">xx/xx/xxxx (XX anos)</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Peso</span>
                    <span class="valor-info">XX kg</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Altura</span>
                    <span class="valor-info">X.XX m</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">IMC</span>
                    <span class="valor-info">XX.X kg/m²</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Data da Última Menstruação</span>
                    <span class="valor-info">xx/xx/xxxx</span>
                </div>
            </div>
        </div>

        <div class="secao-card">
            <div class="cabecalho-secao">
                <h3><i class="fas fa-baby"></i> Gestação</h3>
                <button class="botao-editar"><i class="fas fa-edit"></i> Editar</button>
            </div>
            <div class="conteudo-secao">
                <div class="campo-info-status">
                    <span class="label-info">Primeira Gestação?</span>
                    <span class="badge-status badge-sim">Sim</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Gestação Múltipla?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Reprodução Assistida?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Perda Gestacional Anterior?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
            </div>
        </div>

        <div class="secao-card">
            <div class="cabecalho-secao">
                <h3><i class="fas fa-brain"></i> Mental</h3>
                <button class="botao-editar"><i class="fas fa-edit"></i> Editar</button>
            </div>
            <div class="conteudo-secao">
                <div class="campo-info-status">
                    <span class="label-info">Ambiente Estressante?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Gestação Planejada?</span>
                    <span class="badge-status badge-sim">Sim</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Aceita a Gravidez?</span>
                    <span class="badge-status badge-sim">Sim</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Histórico Psiquiátrico?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
            </div>
        </div>

        <div class="secao-card">
            <div class="cabecalho-secao">
                <h3><i class="fas fa-notes-medical"></i> Saúde</h3>
                <button class="botao-editar"><i class="fas fa-edit"></i> Editar</button>
            </div>
            <div class="conteudo-secao">
                <div class="campo-info-status">
                    <span class="label-info">Histórico de Pré-eclâmpsia?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Diabetes Gestacional?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Hipertensão?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Doenças Crônicas?</span>
                    <span class="badge-status badge-nao">Não</span>
                </div>
            </div>
        </div>

        <div class="secao-card secao-completa">
            <div class="cabecalho-secao">
                <h3><i class="fas fa-clipboard-list"></i> Histórico de Atendimentos</h3>
                <button class="botao-novo"><i class="fas fa-plus"></i> Novo Atendimento</button>
            </div>
            <div class="conteudo-secao">
                <div class="lista-atendimentos">
                    
                    <div class="item-atendimento">
                        <div class="icone-atendimento">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <div class="info-atendimento">
                            <span class="tipo-atendimento">Consulta de Pré-natal</span>
                            <span class="data-atendimento">xx/xx/xxxx às xx:xxh</span>
                            <span class="profissional-atendimento">Dr. Nome do Médico - CRM XXXXX</span>
                        </div>
                        <button class="botao-ver-detalhes">Ver mais</button>
                    </div>

                    <div class="item-atendimento">
                        <div class="icone-atendimento">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <div class="info-atendimento">
                            <span class="tipo-atendimento">Ultrassom</span>
                            <span class="data-atendimento">xx/xx/xxxx às xx:xxh</span>
                            <span class="profissional-atendimento">Dr. Nome do Médico - CRM XXXXX</span>
                        </div>
                        <button class="botao-ver-detalhes">Ver mais</button>
                    </div>

                    <div class="item-atendimento">
                        <div class="icone-atendimento">
                            <i class="fas fa-vials"></i>
                        </div>
                        <div class="info-atendimento">
                            <span class="tipo-atendimento">Exames Laboratoriais</span>
                            <span class="data-atendimento">xx/xx/xxxx às xx:xxh</span>
                            <span class="profissional-atendimento">Dr. Nome do Médico - CRM XXXXX</span>
                        </div>
                        <button class="botao-ver-detalhes">Ver mais</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="acoes-formulario">
        <a href="{{ route('pacientes') }}" class="botao-acao botao-voltar">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
        <button type="button" class="botao-acao botao-deletar">
            <i class="fas fa-brain"></i> Recomendações
        </button>
    </div>

@endsection