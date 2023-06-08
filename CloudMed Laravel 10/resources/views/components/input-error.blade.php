@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'error-innput']) }}>
        @foreach ((array) $messages as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>

    <script>
        Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
        });

        Toast.fire({
            icon: 'error',
            title: 'Usuário não cadastrado!' 
        });
    </script>
@endif

