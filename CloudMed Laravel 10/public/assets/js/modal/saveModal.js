document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Informações Cadastradas com Sucesso!',
        icon: 'success',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    }).then(function() {
        event.target.submit();
    });


    let requiredFileInputs = document.querySelectorAll('input[data-validation="required"]');

    let isFileInputEmpty = Array.from(requiredFileInputs).some(function(fileInput) {
        return fileInput.files.length === 0;
    });
    
    if (isFileInputEmpty) {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            text: 'O campo de upload de arquivo é obrigatório!',
        });
        event.preventDefault();
    }

});







