@props(['active' => false, 'mobile' => false])

<a {{ $attributes }} aria-current="{{ $active ? 'page' : 'false' }}"
    class="{{ $mobile ? 'block rounded-md px-3 py-2 text-base font-medium' : 'rounded-md px-3 py-2 text-sm font-medium' }} {{ $active ? 'bg-primary-600 text-white shadow-md' : 'text-primary-100 hover:bg-primary-800 hover:text-white transition-all duration-200' }}">
    {{ $slot }}
</a>
