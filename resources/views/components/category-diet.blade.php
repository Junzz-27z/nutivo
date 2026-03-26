@props([
    'variant' => 'standar',
    'text' => '',
])

@php
    if ($variant == 'ketat') {
        $variantClass = "bg-[#C30000]";
        $text = "Diet Ketat";
    } else if ($variant == 'ringan') {
        $variantClass = "bg-[#00C8FF]";
        $text = "Diet Ringan";
    } else {
        $variantClass = "bg-[#FFB200]";
        $text = "Diet Standar";
    }

    $baseClass = "flex items-center w-fit px-2 py-1 text-xs rounded-full text-white font-semibold {{ $variantClass }}";
@endphp

<span {{ $attributes->class([$baseClass]) }}>{{ $text }}</span>