@props(['post'])

<article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <x-category-badge :category="$post->category" />
        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <a href="/posts/{{ $post->slug }}" class="hover:underline">
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{ $post->title }}</h2>
    </a>
    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 150) }}</p>
    <div class="flex justify-between items-center">
        <a href="/posts?author={{ $post->author->username }}" class="flex items-center space-x-3">
            <img class="w-7 h-7 rounded-full"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                alt="{{ $post->author->name }}" />
            <span class="font-medium dark:text-white text-sm">
                {{ $post->author->name }}
            </span>
        </a>
        <a href="/posts/{{ $post->slug }}"
            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
            Read more
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>
