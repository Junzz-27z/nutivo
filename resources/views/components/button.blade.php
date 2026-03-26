<a href="" @class([
    'rounded-lg border',
    'bg-primary-250 text-white border-primary-250 px-3 py-2' => $variant == 'primary',
    'text-primary-250 border-primary-250 px-3 py-2' => $variant == 'outline',
    'bg-white text-primary-250 px-8.5 py-5.5' => $variant == 'white',
    'text-white border-white border-2 px-11 py-5.5' => $variant == 'outline-white'
])>
    {{ $slot }}
</a>