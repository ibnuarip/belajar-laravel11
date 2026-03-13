<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-section class="!py-8 sm:!py-16">
        <article class="mx-auto w-full max-w-4xl prose dark:prose-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <a href="/posts" class="font-medium text-sm text-primary-600 hover:underline inline-flex items-center mb-6">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to posts
                </a>
                <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                            alt="{{ $post->author->name }}">
                        <div>
                            <a href="/posts?author={{ $post->author->username }}"
                                class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                <time pubdate datetime="{{ $post->created_at->toIso8601String() }}" title="{{ $post->created_at->format('F jS, Y') }}">
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                            </p>
                            <x-category-badge :category="$post->category" />
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $post->title }}</h1>
            </header>
            <div class="text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                {{ $post->body }}
            </div>
        </article>
    </x-section>
</x-layout>
