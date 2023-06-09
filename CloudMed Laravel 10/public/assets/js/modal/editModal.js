const requiredFileInputs = document.querySelectorAll('input[data-validation="required"]');

const isFileInputEmpty = Array.from(requiredFileInputs).some(function (fileInput) {
  return fileInput.files.length === 0 && fileInput.getAttribute('data-default-value') === '';
});

function confirmEdit(event) {

  if (isFileInputEmpty) {

    Swal.fire({
      icon: 'error',
      title: 'Erro',
      text: 'O campo de upload de arquivo é obrigatório!',
    });

    event.preventDefault();
  } 
  
  else {

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
}
