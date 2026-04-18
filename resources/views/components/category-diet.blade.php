@props([
    'variant' => 'standar',
    'text' => '',
])

@php
    if ($variant == 1) {
        $variantClass = "bg-[#C30000]";
        $text = "Diet Ketat";
    } else if ($variant == 2) {
        $variantClass = "bg-[#00C8FF]";
        $text = "Diet Ringan";
    } else if ($variant == 3) {
        $variantClass = "bg-[#FFB200]";
        $text = "Diet Standar";
    } else {
        $variantClass = "bg-[#FFFFFF]";
        $text = "a";
    }
    $baseClass = "flex items-center w-fit px-2 py-1 text-xs rounded-full text-white font-semibold {{ $variantClass }}";
@endphp

<span {{ $attributes->class([$baseClass]) }}>{{ $text }}</span>