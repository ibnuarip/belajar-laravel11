@props(['category'])

<a href="/posts?category={{ $category->slug }}">
    <span class="bg-{{ $category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
        {{ $category->name }}
    </span>
</a>
