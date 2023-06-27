@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }}  {!! $attributes->merge(['class' =>'mt-1 w-full bg-white text-gray-800 border-nblue border-b shadow-sm',]) !!}>
    {{ $slot }}
</select>
