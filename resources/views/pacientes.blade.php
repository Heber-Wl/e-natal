@extends('layouts.app')

@section('title', 'Pacientes')

@section('content')

    <div class="cabecalho-pagina">
        <div class="info-pagina">
            <div class="caminho-navegacao">
                <a href="#">Início</a> / Pacientes
            </div>
            <h1 class="titulo-pagina">Pacientes</h1>
        </div>
    </div>

    <div class="barra-busca">
        <i class="fas fa-search"></i>
        <input type="text" class="campo-busca" placeholder="Nome, CPF, Carteira do SUS...">
    </div>

    <div class="lista-pacientes">

        <a href="#" class="cartao-paciente">
            <div class="foto-paciente">
                <i class="fas fa-user"></i>
            </div>
            <div class="info-paciente">
                <span class="nome-paciente">HEBER SAFADINHO</span>
                <span class="sus-paciente">xxx-xxxx-xxxx-xxx (número sus)</span>
            </div>
            <span class="data-paciente">xx/xx/xx às xx:xxh</span>
            <i class="fas fa-chevron-right seta-paciente"></i>
        </a>



        <a href="#" class="cartao-paciente">
            <div class="foto-paciente">
                <i class="fas fa-user"></i>
            </div>
            <div class="info-paciente">
                <span class="nome-paciente">ODEIO A FACULDADE</span>
                <span class="sus-paciente">xxx-xxxx-xxxx-xxx (número sus)</span>
            </div>
            <span class="data-paciente">xx/xx/xx às xx:xxh</span>
            <i class="fas fa-chevron-right seta-paciente"></i>
        </a>

        <a href="#" class="cartao-paciente">
            <div class="foto-paciente">
                <i class="fas fa-user"></i>
            </div>
            <div class="info-paciente">
                <span class="nome-paciente">SAUDADES DA EX</span>
                <span class="sus-paciente">xxx-xxxx-xxxx-xxx (número sus)</span>
            </div>
            <span class="data-paciente">xx/xx/xx às xx:xxh</span>
            <i class="fas fa-chevron-right seta-paciente"></i>
        </a>

        <a href="#" class="cartao-paciente">
            <div class="foto-paciente">
                <i class="fas fa-user"></i>
            </div>
            <div class="info-paciente">
                <span class="nome-paciente">ODEIO A SEPLAG</span>
                <span class="sus-paciente">xxx-xxxx-xxxx-xxx (número sus)</span>
            </div>
            <span class="data-paciente">xx/xx/xx às xx:xxh</span>
            <i class="fas fa-chevron-right seta-paciente"></i>
        </a>

        <a href="#" class="cartao-paciente">
            <div class="foto-paciente">
                <i class="fas fa-user"></i>
            </div>
            <div class="info-paciente">
                <span class="nome-paciente">QUERO MEU SALARIO</span>
                <span class="sus-paciente">xxx-xxxx-xxxx-xxx (número sus)</span>
            </div>
            <span class="data-paciente">xx/xx/xx às xx:xxh</span>
            <i class="fas fa-chevron-right seta-paciente"></i>
        </a>

    </div>


@endsection
