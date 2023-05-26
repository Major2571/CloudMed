@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'mb-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-cyan-700 focus:ring-cyan-700 disabled:border-slate-200 disabled:bg-slate-50 disabled:text-slate-500 disabled:shadow-none']) !!}>
