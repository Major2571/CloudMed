@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'error-innput']) }}>
        @foreach ((array) $messages as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif
