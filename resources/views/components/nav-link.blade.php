@props([
    'href' => '/',
    'active' => false
])

@php
    $class = $active
    ? "text-primary font-semibold"
    : "text-black font-semibold transition-all duration-300 hover:text-primary"
@endphp

<a href="{{ $href }}" {{ $attributes->class([$class]) }}>{{ $slot }}</a>