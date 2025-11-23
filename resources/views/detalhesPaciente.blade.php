@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/detalhesPaciente.css') }}">
@section('title', 'Detalhes do Paciente')

@section('content')

    <div class="cabecalho-pagina">
        <div class="info-pagina">
            <div class="caminho-navegacao">
                <a href="{{ route('pacientes') }}">Início</a> / <a href="{{ route('pacientes') }}">Pacientes</a> / Detalhes
            </div>
            <h1 class="titulo-pagina">Detalhes do Paciente</h1>
        </div>
    </div>

    <div class="card-principal-paciente">
        <div class="foto-principal">
            <i class="fas fa-user"></i>
        </div>
        <div class="dados-principais">
            <h2 class="nome-principal">{{ $paciente->nome }}</h2>
            <div class="info-secundaria">
                <span><i class="fas fa-id-card"></i> CNS: {{ $paciente->cartao_sus }}</span>
                <span><i class="fas fa-calendar"></i> Cadastrado em: {{ \Carbon\Carbon::parse( $paciente->created_at)->format('d/m/Y') }} </span>
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
                    <span class="valor-info">{{ $paciente->nome }}</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Cartão do SUS</span>
                    <span class="valor-info">{{ $paciente->cartao_sus }}</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Data de Nascimento</span>
                    <span class="valor-info">{{ \Carbon\Carbon::parse($paciente->data_nascimento)->format('d/m/Y') }} ({{$idade}} anos)</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Peso</span>
                    <span class="valor-info">{{ $paciente->peso }} kg</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Altura</span>
                    <span class="valor-info">{{ $paciente->altura }} m</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">IMC</span>
                    <span class="valor-info">{{ number_format($imc, 2) }} kg/m²</span>
                </div>
                <div class="campo-info">
                    <span class="label-info">Data da Última Menstruação</span>
                    <span class="valor-info">{{ $paciente->data_ultima_mestruacao ?? 'N/D' }}</span>
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
                    @if ($paciente->primeira_gestacao == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Gestação Múltipla?</span>
                    @if ($paciente->gestacao_multipla == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Reprodução Assistida?</span>
                    @if ($paciente->reproducao_assistida == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Perda Gestacional Anterior?</span>
                    @if ($paciente->perda_gestacional == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
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
                    @if ($paciente->ambiente_estressante == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Gestação Planejada?</span>
                    @if ($paciente->gestacao_planejada == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Aceita a Gravidez?</span>
                    @if ($paciente->aceita_gravidez == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Histórico Psiquiátrico?</span>
                    @if ($paciente->historico_psiquiatrico == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
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
                    @if ($paciente->pre_eclampsia == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Diabetes Gestacional?</span>
                    @if ($paciente->diabetes_mellitus == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Hipertensão?</span>
                    @if ($paciente->hipertensao == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
                </div>
                <div class="campo-info-status">
                    <span class="label-info">Doenças Crônicas?</span>
                    @if ($paciente->doenca_tiroide == true)
                        <span class="badge-status badge-sim">Sim</span>
                    @else
                        <span class="badge-status badge-nao">Não</span>
                    @endif
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
                            <span class="data-atendimento">{{ \Carbon\Carbon::parse($paciente->created_at)->format('d/m/Y') }} às {{\Carbon\Carbon::parse($paciente->created_at)->format('H:s')}}h</span>
                            <span class="profissional-atendimento">Dr. {{ $paciente->medico->nome }} - CRM {{ $paciente->medico->crm }}</span>
                        </div>
                        <button class="botao-ver-detalhes">Ver mais</button>
                    </div>

                    {{-- <div class="item-atendimento">
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
                    </div> --}}
                </div>
            </div>
        </div>

    </div>

    <div class="acoes-formulario">
        <a href="{{ route('pacientes') }}" class="botao-acao botao-voltar">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>
        <a href="{{ route('recomendacoes') }}" class="botao-acao botao-deletar">
            <i class="fas fa-brain"></i> Recomendações
        </a>
    </div>

@endsection