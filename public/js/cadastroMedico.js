document.addEventListener('DOMContentLoaded', () => {

    const cpfInput = document.getElementById('cpf');
    cpfInput.addEventListener('input', e => {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d)/, '$1.$2');
        value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        e.target.value = value;
    });

    const nomeInput = document.getElementById('nome');
    nomeInput.addEventListener('input', e => {
        e.target.value = e.target.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '').slice(0, 100);
    });

    const emailInput = document.getElementById('email');
    emailInput.addEventListener('input', e => {
        e.target.value = e.target.value.slice(0, 40);
    });

    const crmInput = document.getElementById('crm');
    crmInput.addEventListener('input', e => {
        e.target.value = e.target.value.replace(/[^a-zA-Z0-9]/g, '').slice(0, 8);
    });

    const senhaInput = document.getElementById('senha');
    const confirmarSenhaInput = document.getElementById('confirmar-senha');

    [senhaInput, confirmarSenhaInput].forEach(input => {
        input.addEventListener('input', e => {
            e.target.value = e.target.value.slice(0, 15);
        });
    });

    const toggles = document.querySelectorAll('.toggle-senha');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const input = toggle.previousElementSibling;
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    });

});
