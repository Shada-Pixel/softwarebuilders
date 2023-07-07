@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-lgreen hover:bg-gray-100 text-dgreen px-5 py-3 border-nblue hover:border-nblue border-l-4 flex items-center justify-start gap-4 transition duration-150 ease-in-out'
            : 'hover:bg-gray-100 flex items-center justify-start gap-4 px-5 py-3 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

