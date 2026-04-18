@props([
    'variant' => 'karbohidrat',
    'text' => '',
])

@php
    switch ($variant) {
        case 'karbohidrat':
            $text = 'Karbohidrat';
            break;
        case 'protein':
            $text = 'Protein';
            break;
        case 'lemak':
            $text = 'Lemak';
            break;
        case 'serat':
            $text = 'Serat';
            break;
        default:
            $text = '';
            break;
    }

    $baseClass = "flex items-center w-fit px-2 py-1 text-xs rounded-full bg-primary text-white font-semibold";
@endphp

<span {{ $attributes->class([$baseClass]) }}>{{ $text }}</span>