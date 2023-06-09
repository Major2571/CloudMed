function saveProfileInfo(event) {
    event.preventDefault();
    Swal.fire({
        title: 'Informções Salvas!',
        icon: 'success',
        showConfirmButton: false, 
        timer: 1500,
        timerProgressBar: true
    }).then(function() {
        event.target.submit();
    });
}


  