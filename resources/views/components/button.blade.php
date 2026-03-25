<a href="" @class([
    'rounded-lg border border-primary-250 px-3 py-2',
    'bg-primary-250 text-white' => $variant == 'primary',
    'text-primary-250' => $variant == 'outline'
])>
    {{ $slot }}
</a>