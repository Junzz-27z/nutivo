@props([
    'variant' => 'primary',
    'href' => null,
    'size' => 'base',
])

@php
    if ($variant == 'outline') {
        $variantClass = "text-primary bg-transparent border-2 border-primary hover:bg-primary hover:text-white";
    } else if ($variant == 'logout') {
        $variantClass = "text-white bg-[#C30000] border-2 border-[#C30000] hover:opacity-90";
    } else if ($variant == 'white') {
        $variantClass = "text-primary bg-white border-2 border-white hover:bg-background hover:text-primary hover:border-cream hover:opacity-90";
    } else if ($variant == 'outline-white') {
        $variantClass = "text-white bg-transparent border-2 border-white hover:bg-secondary hover:border-secondary hover:opacity-90";
    } else {
        $variantClass = "text-white bg-primary border-2 border-primary hover:opacity-90";
    }

    if ($size == 'sm') {
        $sizeClass = "px-2.5 py-1 text-sm rounded-md";
    } else if ($size == 'lg') {
        $sizeClass = "px-3.5 py-1 text-base rounded-lg";
    } else {
        $sizeClass = "px-4 py-1.5 text-base rounded-full";
    }

    $baseClass = "flex items-center justify-center transition-all duration-300 font-semibold {{ $variantClass }} {{ $sizeClass }}"
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class([$baseClass]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->class([$baseClass]) }}>{{ $slot }}</button>
@endif
