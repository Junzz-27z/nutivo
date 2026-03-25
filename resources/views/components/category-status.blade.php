@props([
    'variant' => 'aktif',
    'text' => '',
])

@php
    if ($variant == 'non-aktif') {
        $variantClass = "bg-[#C30000]";
        $text = "Non Aktif";
    } else {
        $variantClass = "bg-primary";
        $text = "Aktif";
    }

    $baseClass = "flex items-center w-fit px-2 py-1 text-xs rounded-full text-white font-semibold {{ $variantClass }}";
@endphp

<span {{ $attributes->class([$baseClass]) }}>{{ $text }}</span>