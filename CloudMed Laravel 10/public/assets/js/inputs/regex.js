function formatarCPF(cpf) {
    cpf = cpf.replace(/\D/g, '');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    return cpf;
}

function formatarRG(rg) {
    rg = rg.replace(/\D/g, '');
    rg = rg.replace(/(\d{2})(\d{3})(\d{3})(\d{1})$/, '$1.$2.$3-$4');
    return rg;
}

function formatarTelefone(phone) {
    phone = phone.replace(/\D/g, '');
    phone = phone.replace(/(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    return phone;
}


function formatarPeso(input) {
    var valor = input.value.replace(/\D/g, '');
    valor = (valor / 100).toFixed(2);
    input.value = valor;
}

function formatarAltura(input) {
    var valor = input.value.replace(/\D/g, '');
    valor = (valor / 100).toFixed(2);
    input.value = valor;
}