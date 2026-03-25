@props([
    'variant' => 'karbohidrat',
    'text' => '',
])

@php
    switch ($variant) {
        case 'karbohidrat':
            $text = 'Karbohidrat';
            break;
        case 'protein_hewani':
            $text = 'Protein Hewani';
            break;
        case 'protein_nabati':
            $text = 'Protein Nabati';
            break;
        case 'buah':
            $text = 'Buah';
            break;
        case 'olahan_susu':
            $text = 'Olahan Susu';
            break;
        default:
            $text = '';
            break;
    }

    $baseClass = "flex items-center w-fit px-2 py-1 text-xs rounded-full bg-primary text-white font-semibold";
@endphp

<span {{ $attributes->class([$baseClass]) }}>{{ $text }}</span>