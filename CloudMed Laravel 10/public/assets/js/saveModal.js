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
});