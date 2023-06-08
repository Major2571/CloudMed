@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'text-red-600 text-center font-medium']) }}>
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
            title: 'Tente novamente!'
        });
    </script>
@endif
