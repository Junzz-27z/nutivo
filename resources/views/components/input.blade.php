@props([
    'label' => null,
    'name',
    'type' => 'text',
    'placeholder' => '',
    'variant' => 'primary',
])

@php
    $class = $variant === 'auth'
    ? "bg-background text-primary placeholder:text-primary border-2 border-primary"
    : "bg-primary text-white placeholder:text-white";

    $baseClass = "w-full px-4 py-2.5 font-semibold rounded-lg text-sm outline-none transition-all duration-300 {{ $class }}"
@endphp

<div class="flex flex-col gap-y-1.5">
    @if ($label)
        <label for="{{ $name }}" class="text-sm font-semibold text-primary">
            {{ $label }}
        </label>
    @endif
    <input 
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        placeholder="{{ $placeholder }}"
        {{ $attributes->class([$baseClass]) }}>
</div>