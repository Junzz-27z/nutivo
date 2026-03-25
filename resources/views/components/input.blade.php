@props([
    'label' => null,
    'name',
    'type' => 'text',
    'placeholder' => '',
])

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
        {{ $attributes->class(['w-full px-4 py-2.5 font-semibold bg-primary text-white placeholder:text-white rounded-lg border text-sm outline-none border-none transition-all duration-300']) }}>
</div>