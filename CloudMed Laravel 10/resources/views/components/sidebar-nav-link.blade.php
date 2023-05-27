@props(['active'])

@php
    $classes = $active ?? false 
        ? 'w-full hover:bg-cyan-900 inline-flex items-center px-7 py-3 border-l-4 border-white font-medium leading-5 text-white focus:outline-none ' 
        : 'w-full hover:bg-cyan-900 inline-flex items-center px-5 hover:px-7 py-3 border-l-4 border-transparent font-medium leading-5 text-white focus:outline-none focus:text-white'
    ;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
