<a href="" @class([
    'rounded-lg border border-primary px-3 py-2',
    'bg-primary text-white' => $variant == 'primary',
    'text-primary' => $variant == 'outline'
])>
    {{ $slot }}
</a>