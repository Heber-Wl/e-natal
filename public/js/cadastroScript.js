document.addEventListener('DOMContentLoaded', function () {
    const corPrincipal = '#00bcd4';

    const sus = document.getElementById('sus');
    const peso = document.getElementById('peso');
    const altura = document.getElementById('altura');
    const nome = document.getElementById('nome');

    if (sus) {
        sus.addEventListener('input', function (e) {
            let v = e.target.value.replace(/\D/g, '');
            v = v.substring(0, 15);
            if (v.length > 3) v = v.replace(/(\d{3})(\d)/, '$1.$2');
            if (v.length > 8) v = v.replace(/(\d{3}\.\d{4})(\d)/, '$1.$2');
            if (v.length > 13) v = v.replace(/(\d{3}\.\d{4}\.\d{4})(\d)/, '$1.$2');
            e.target.value = v;
        });
    }

    if (nome) {
        nome.addEventListener('input', function () {
            this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '');
        });
    }

    if (peso) {
        peso.addEventListener('input', function () {
            let valor = this.value.replace(/\D/g, '');
            if (valor.length > 5) valor = valor.slice(0, 5);
            if (valor.length > 2) valor = valor.slice(0, valor.length - 2) + '.' + valor.slice(-2);
            this.value = valor;
        });
    }

    if (altura) {
        altura.addEventListener('input', function () {
            let valor = this.value.replace(/\D/g, '');
            if (valor.length > 3) valor = valor.slice(0, 3);
            if (valor.length > 2) valor = valor.slice(0, valor.length - 2) + '.' + valor.slice(-2);
            this.value = valor;
        });
    }

    document.querySelectorAll('.campo-entrada').forEach(function (input) {
        input.addEventListener('focus', function () {
            this.style.borderColor = corPrincipal;
        });
        input.addEventListener('blur', function () {
            this.style.borderColor = '#e0e0e0';
        });
    });
});
