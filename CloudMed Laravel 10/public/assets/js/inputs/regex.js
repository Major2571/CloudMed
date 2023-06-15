function formatCPF(cpf) {
    cpf = cpf.replace(/\D/g, '');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
    return cpf;
}

function formatRG(rg) {
    rg = rg.replace(/\D/g, '');
    rg = rg.replace(/(\d{2})(\d{3})(\d{3})(\d{1})$/, '$1.$2.$3-$4');
    return rg;
}

function formatPhone(phone) {
    phone = phone.replace(/\D/g, '');
    phone = phone.replace(/(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    return phone;
}


function formatWeight(input) {
    var weight = input.value.replace(/\D/g, '');
    weight = (weight / 100).toFixed(2);
    input.value = weight;
}

function formatHeight(input) {
    var height = input.replace(/\D/g, '');
    height = height.replace(/(\d{1})(\d{2})/, '$1.$2');
    return height;
}


function formatSusCardNumber(susCardNumber) {
    susCardNumber = susCardNumber.replace(/\D/g, '');
    susCardNumber = susCardNumber.replace(/(\d{11})(\d{4})/, '$1 $2');
    return susCardNumber;
}