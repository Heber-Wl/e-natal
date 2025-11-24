@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">

@section('title', 'Pacientes')

@section('content')
    <div class="cabecalho-pagina">
        <div class="info-pagina">
            <div class="caminho-navegacao">
                <a href="{{ route('pacientes') }}">Início</a> / Pacientes
            </div>
            <h1 class="titulo-pagina">Pacientes</h1>
        </div>
    </div>

    <div class="barra-busca">
        <i class="fas fa-search"></i>
        <input type="text" class="campo-busca" placeholder="Nome, CPF, Carteira do SUS...">
    </div>

    <div class="lista-pacientes">
        @foreach ($pacientes as $paciente)    
            <a href="{{ route('detalhes', $paciente->id) }}" class="cartao-paciente">
                <div class="foto-paciente">
                    <i class="fas fa-user"></i>
                </div>
                <div class="info-paciente">
                    <span class="nome-paciente">{{ $paciente->nome }}</span>
                    <span class="sus-paciente">{{ $paciente->cartao_sus }}(número sus)</span>
                </div>
                <span class="data-paciente">{{ \Carbon\Carbon::parse($paciente->created_at)->format('d/m/Y') }} às {{ \Carbon\Carbon::parse($paciente->created_at)->format('H:s') }}h</span>
                <i class="fas fa-chevron-right seta-paciente"></i>
            </a>
        @endforeach
    </div>


@endsection
