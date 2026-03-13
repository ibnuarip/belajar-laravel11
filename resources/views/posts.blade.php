<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-search-bar />

    {{ $posts->links() }}

    <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <x-post-card :post="$post" />
            @empty
                <div>
                    <p class="font-semibold text-xl my-4">Articles not found.</p>
                    <a href="/posts" class="block text-blue-600 hover:underline">&laquo; Back to posts</a>
                </div>
            @endforelse
        </div>
    </div>

    {{ $posts->links() }}
</x-layout>
