document.getElementById('sus').addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, '');

    v = v.substring(0, 15);

    if (v.length > 3) v = v.replace(/(\d{3})(\d)/, '$1.$2');
    if (v.length > 8) v = v.replace(/(\d{3}\.\d{4})(\d)/, '$1.$2');
    if (v.length > 13) v = v.replace(/(\d{3}\.\d{4}\.\d{4})(\d)/, '$1.$2');

    e.target.value = v;
});

document.addEventListener("DOMContentLoaded", () => {
    const corPrincipal = "#00bcd4";

    const pesoInput = document.getElementById("peso");
    const alturaInput = document.getElementById("altura");
    const primeiraGestacaoCheckbox = document.getElementById("primeiraGestacao");
    const ultimaGestacaoInput = document.getElementById("ultimaGestacao");

    pesoInput.addEventListener("input", () => {
        let valor = pesoInput.value.replace(/\D/g, ""); 

        if (valor.length > 5) valor = valor.slice(0, 5); 

        if (valor.length > 2) {
            valor = valor.slice(0, valor.length - 2) + "," + valor.slice(-2);
        }

        pesoInput.value = valor;
    });

    alturaInput.addEventListener("input", () => {
        let valor = alturaInput.value.replace(/\D/g, "");

        if (valor.length > 3) valor = valor.slice(0, 3); 

        if (valor.length > 2) {
            valor = valor.slice(0, valor.length - 2) + "," + valor.slice(-2);
        }

        alturaInput.value = valor;
    });

    document.querySelectorAll(".campo").forEach(input => {
        input.addEventListener("focus", () => {
            input.style.borderColor = corPrincipal;
        });

        input.addEventListener("blur", () => {
            input.style.borderColor = "#e0e0e0";
        });
    });

    primeiraGestacaoCheckbox.addEventListener("change", () => {
        if (primeiraGestacaoCheckbox.checked) {
            ultimaGestacaoInput.value = "";
            ultimaGestacaoInput.disabled = true;
            ultimaGestacaoInput.style.backgroundColor = "#f0f0f0";
        } else {
            ultimaGestacaoInput.disabled = false;
            ultimaGestacaoInput.style.backgroundColor = "white";
        }
    });
});
