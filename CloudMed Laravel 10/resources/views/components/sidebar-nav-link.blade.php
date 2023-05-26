@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 pt-1 border-l-4 border-white dark:border-white font-medium leading-5 text-white dark:text-white focus:outline-none focus:border-white transition duration-150 ease-in-out'
            : 'inline-flex items-center px-7 pt-1 border-l-4 border-transparent font-medium leading-5 text-white dark:text-white dark:hover:text-whiteer:border-white dark:hover:border-white focus:outline-none focus:text-white dark:focus:text-white focus:border-white dark:focus:border-white transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

