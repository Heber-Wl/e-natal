<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Registro</title>

    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>

<body>
    <div class="conteiner">
        <div class="cartao-formulario">

            <div class="cabecalho-pagina">
                <h1 class="titulo-pagina">Novo Registro</h1>
                <button class="botao-fechar" onclick="window.history.back()">&times;</button>
            </div>

            <form>

                <div class="grupo-formulario">
                    <label class="rotulo">Cartão do SUS: <span class="obrigatorio">*</span></label>
                    <input type="text" id="sus" class="campo" required>
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Nome</label>
                    <input type="text" class="campo">
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Peso (KG) <span class="obrigatorio">*</span></label>
                    <input type="text" id="peso" class="campo" required>
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Altura (M) <span class="obrigatorio">*</span></label>
                    <input type="text" id="altura" class="campo" required>
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Data da última menstruação</label>
                    <input type="date" class="campo">
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Data de nascimento</label>
                    <input type="date" class="campo">
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Primeira gestação?</label>
                    <input type="checkbox" id="primeiraGestacao">
                </div>

                <div class="grupo-formulario">
                    <label class="rotulo">Data da última gestação</label>
                    <input type="date" id="ultimaGestacao" class="campo">
                </div>

                <div class="acoes-formulario">
                    <button type="button" class="botao botao-secundario" onclick="window.history.back()">Cancelar</button>
                    <button type="submit" class="botao botao-primario">Salvar</button>
                </div>

                <div class="secao-gestacao">
                    <div class="titulo-secao">
                        <svg class="icone-edicao" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <h2>Gestação</h2>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Primeira Gestação?</label>
                        <label class="switch">
                            <input type="checkbox" id="primeiraGestacao">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Gestação Múltipla?</label>
                        <label class="switch">
                            <input type="checkbox" id="gestacaoMultipla">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Foi por reprodução assistida?</label>
                        <label class="switch">
                            <input type="checkbox" id="reproducaoAssistida">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Já teve alguma perda gestacional?</label>
                        <label class="switch">
                            <input type="checkbox" id="perdaGestacional">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>

                <div class="secao-gestacao">
                    <div class="titulo-secao">
                        <svg class="icone-edicao" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <h2>Mental</h2>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Vive num ambiente estressante?</label>
                        <label class="switch">
                            <input type="checkbox" id="primeiraGestacao">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">A gestação foi planejada?</label>
                        <label class="switch">
                            <input type="checkbox" id="gestacaoMultipla">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">A gestante aceita a gravidez?</label>
                        <label class="switch">
                            <input type="checkbox" id="reproducaoAssistida">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Tem histórico psiquiátrico?</label>
                        <label class="switch">
                            <input type="checkbox" id="perdaGestacional">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>

                <div class="secao-gestacao">
                    <div class="titulo-secao">
                        <svg class="icone-edicao" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <h2>Saúde</h2>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Histórico de pré-eclampsia?</label>
                        <label class="switch">
                            <input type="checkbox" id="primeiraGestacao">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Gestação Múltipla?</label>
                        <label class="switch">
                            <input type="checkbox" id="gestacaoMultipla">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Foi por reprodução assistida?</label>
                        <label class="switch">
                            <input type="checkbox" id="reproducaoAssistida">
                            <span class="slider"></span>
                        </label>
                    </div>

                    <div class="grupo-toggle">
                        <label class="rotulo-toggle">Já teve alguma perda gestacional?</label>
                        <label class="switch">
                            <input type="checkbox" id="perdaGestacional">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>



            </form>

        </div>
    </div>

    <script src="{{ asset('js/cadastroScript.js') }}"></script>
</body>

</html>