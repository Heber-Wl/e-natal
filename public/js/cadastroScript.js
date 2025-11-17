document.getElementById('sus').addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, '');

    v = v.substring(0, 15);

    if (v.length > 3) v = v.replace(/(\d{3})(\d)/, '$1.$2');
    if (v.length > 8) v = v.replace(/(\d{3}\.\d{4})(\d)/, '$1.$2');
    if (v.length > 13) v = v.replace(/(\d{3}\.\d{4}\.\d{4})(\d)/, '$1.$2');

    e.target.value = v;
});
