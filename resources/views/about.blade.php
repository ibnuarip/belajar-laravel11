<x-layout>
    <x-slot:title>{{ $title ?? 'About Page' }}</x-slot:title>
    
    <x-about-section :name="$name" />
</x-layout>
