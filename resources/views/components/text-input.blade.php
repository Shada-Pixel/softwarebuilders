@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'mt-1 w-full bg-white border-nblue shadow-sm',
]) !!}>
