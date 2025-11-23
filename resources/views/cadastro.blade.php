@extends('layouts.app')

@section('title', 'Novo Registro')

@section('content')
    <form class="cartao-formulario" action="{{ route('cadastrar') }}" method="POST">
        @csrf
        <div class="secao-formulario secao-dados">
            <div class="titulo-secao">
                <i class="fas fa-user"></i>
                <span>Dados Pessoais</span>
            </div>
            <div class="grade-campos">
                <div class="grupo-campo">
                    <label class="rotulo">Cartão do SUS <span class="obrigatorio">*</span></label>
                    <input id="sus" type="text" class="campo-entrada" name="cartao_sus" placeholder="000 0000 0000 0000" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Nome</label>
                    <input id="nome" type="text" class="campo-entrada" name="nome" placeholder="Nome completo" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Peso (KG) <span class="obrigatorio">*</span></label>
                    <input id="peso" type="text" class="campo-entrada" name="peso" placeholder="Ex: 65" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Altura (M) <span class="obrigatorio">*</span></label>
                    <input id="altura" type="text" class="campo-entrada" name="altura" placeholder="Ex: 1.65" required>
                </div>
                <div class="grupo-campo">
                    <label class="rotulo">Data de nascimento</label>
                    <input type="date" class="campo-entrada" name="data_nascimento" name="data_ultima_mestruacao" required>
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