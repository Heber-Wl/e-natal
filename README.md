# 👶 E-NATAL: Sistema Inteligente de Apoio ao Pré-Natal

## ✨ Visão Geral do Projeto

O **E-NATAL** é uma solução digital robusta e intuitiva, projetada para otimizar e qualificar o acompanhamento pré-natal. Ele permite que profissionais de saúde realizem o **cadastro detalhado de gestantes**, conduzam um **diagnóstico de risco gestacional** automatizado e tenham acesso a **calculadoras obstétricas** essenciais em uma única plataforma móvel.

O sistema processa informações clínicas, históricas e de exames para classificar o risco da gestação (Alto, Moderado ou Baixo), oferecendo **recomendações personalizadas** e identificando possíveis complicações, auxiliando na tomada de decisão clínica e garantindo um cuidado mais direcionado.

## 🌟 Demonstração Visual

## 🚀 Funcionalidades Detalhadas

O E-NATAL abrange três pilares fundamentais no acompanhamento da gestante:

### 1. Cadastro e Histórico Clínico

O sistema permite a entrada de uma vasta gama de dados cruciais para a avaliação de risco:

* **Identificação:** Nome, Cartão SUS e CPF.
* **Dados Físicos:** Peso (KG) e Altura (M).
* **Datas Obstétricas:** Data da Última Menstruação, Data de Nascimento, Data da Última Gestação.
* **Histórico de Gestação:**
    * Primeira Gestação? Gestação Múltipla? Foi por reprodução assistida? Já teve alguma perda gestacional?
* **Fatores de Risco Mental:**
    * Ambiente estressante, Gestação planejada, Aceitação da gravidez, Histórico psiquiátrico.
* **Histórico de Saúde Geral (Saúde):**
    * Histórico e/ou familiar de pré-eclâmpsia, complicações, doenças renais e autoimunes, hipertensão, cardiopatia, risco de diabetes, uso de álcool ou drogas, morte perinatal ou parto prematuro anterior, pneumopatia e infecções pré-existentes.
    * Registro de Glicemia (MG/DL).

### 2. Exames e Vacinas

* **Exames Registrados:** Tipagem Sanguínea, Sorologias, Urina Tipo 1, Urocultura.
* **Vacinas Registradas:** Hepatite B, Covid-19, Influenza, DTPA.

### 3. Diagnóstico Automático e Recomendações

Com base nas informações registradas, o aplicativo gera um resumo diagnóstico instantâneo:

* **Classificação de Risco:** Alto Risco, Risco Moderado, ou (presumivelmente) Risco Habitual/Baixo.
* **Lista de Fatores de Risco:** Apresenta claramente todos os pontos que contribuíram para a classificação.
* **Complicações Potenciais:** Lista as possíveis complicações (ex: Desenvolvimento de pré-eclâmpsia, Restrição de Crescimento Fetal).
* **Recomendações:** Fornece um plano de conduta direcionado, incluindo: acompanhamento especializado, monitoramento de pressão arterial, exames específicos, e orientações de estilo de vida.
* **Compartilhamento:** Opção de **Enviar Relatório** diagnóstico completo por e-mail.

### 4. Calculadoras Clínicas

Um menu dedicado (Calculadoras) fornece ferramentas úteis para o monitoramento:

| Calculadora | Fórmula / Descrição |
| :--- | :--- |
| **Idade Gestacional (IG)** | Cálculo da IG a partir da Data da Última Menstruação (DUM). |
| **Data Provável do Parto (DPP)** | Regra de Naegele: $\text{DPP} = \text{DUM} + 7 \text{ dias} + 9 \text{ meses}$. |
| **IMC Pré-Gestacional** | Índice de Massa Corporal: peso / (altura x altura). |
| **Ganho de Peso Recomendado** | Baseado no IMC pré-gestacional (Protocolo ACOG 2013). |
| **Pressão Arterial Média (PAM)** | $\text{PAM} = (\text{PAS} + 2 \times \text{PAD}) / 3$. Alerta para $\text{PAM} \ge 105 \text{ mmHg}$ (risco de pré-eclâmpsia). |
| **Risco de Pré-eclâmpsia** | Avaliação baseada na marcação de fatores de risco. |
| **Altura Uterina x IG** | Comparação: Altura uterina ($\text{cm}$) $\approx \text{IG (semanas)} \pm 2 \text{cm}$. |

## 🌟 Autores:
- HÉBER WILTON DUARTE DE ARAUJO
- MARCELO EUGENIO DE ALMEIDA BARBOSA
- RHAYANE FREITAS LINS DE OLIVEIRA
- ZEUS RAMALHO COSTA FARIAS

## 💻 Tecnologias Utilizadas
* **HTM, CSS, JAVASCRIPT, LARAVEL** .

## TELAS SITE
![TELAPRINCIPAL](https://github.com/user-attachments/assets/84406241-97aa-40bb-8623-108f501903da)
![TELAINICIO](https://github.com/user-attachments/assets/bb0f0901-0419-4bce-bf7a-70450c778763)
![TELACADASTRO](https://github.com/user-attachments/assets/e00dd791-497f-4742-81ae-ee53c3080c8c)
![TELARECOMENDACOES](https://github.com/user-attachments/assets/1b47be5f-ff4f-4b79-b4cd-85469d9c9212)

## FIGMA:
<img width="248" height="492" alt="Captura de Tela 2025-11-23 às 21 44 01" src="https://github.com/user-attachments/assets/ccce344c-6b53-4226-843f-f27eb1814b84" />
<img width="489" height="481" alt="Captura de Tela 2025-11-23 às 21 27 45" src="https://github.com/user-attachments/assets/42b57c2a-9035-4781-b197-1c7e4ed20933" />
<img width="253" height="477" alt="Captura de Tela 2025-11-23 às 21 28 38" src="https://github.com/user-attachments/assets/9c4f2e38-2f45-49a8-bb45-c2ae802092d6" />
<img width="203" height="360" alt="Captura de Tela 2025-11-23 às 21 29 18" src="https://github.com/user-attachments/assets/a92cea50-6139-4840-be78-16fbc43cc64f" />





