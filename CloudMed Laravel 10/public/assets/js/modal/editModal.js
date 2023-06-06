function confirmEdit(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Confirmar edição',
        text: 'Deseja confirmar a edição?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            event.target.form.submit();
        }
      });
}


  