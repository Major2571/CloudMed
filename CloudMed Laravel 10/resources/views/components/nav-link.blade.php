@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-4 pt-1 border-b-2 border-cyan-400 dark:border-cyan-600 text-sm font-medium leading-5 text-black-900 dark:text-black-100 focus:outline-none focus:border-cyan-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-7 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black-500 dark:text-black-400 hover:bg-[#a2cdcf] dark:hover:text-black hover:border-cyan-300 dark:hover:border-cyan-700 focus:outline-none focus:text-black-700 dark:focus:text-black-300 focus:border-cyan-300 dark:focus:border-cyan-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

