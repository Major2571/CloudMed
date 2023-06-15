function confirmExclusao(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Tem certeza?',
        text: 'Essa ação não pode ser revertida!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#DE3F4D',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sim, excluir!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Excluido!',
                'Item excluido com sucesso!',
                'success'
            ).then(() => {
                window.location.href = event.target.closest('a').href;
            })
        }
    })
}