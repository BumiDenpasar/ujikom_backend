@props(['active'])

@php
$classes = 'inline-flex hover:scale-110 transition-all duration-300 items-center px-1 pt-1 border-b-2 
border-transparent text-sm font-medium leading-5 text-blue-500 hover:text-blue-700 hover:border-blue-300 
focus:outline-none focus:text-blue-700 focus:border-blue-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
