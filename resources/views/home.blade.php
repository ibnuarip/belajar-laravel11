<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- HERO SECTION -->
    <section id="home">
        <div class="relative bg-white dark:bg-gray-900 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 overflow-hidden mb-12">
            <div class="mx-auto max-w-7xl px-6 py-12 sm:py-20 lg:grid lg:grid-cols-2 lg:gap-x-16 lg:items-center lg:px-8 lg:py-24">
                <div class="max-w-2xl lg:mx-0">
                    <h1 class="mt-2 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-6xl leading-[1.1]">
                        Membangun Masa Depan Digital Anda
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                        Selamat datang di blog pribadi saya. Tempat di mana ide-ide kreatif bertemu dengan teknologi modern. Mari menjelajahi dunia pengembangan web melalui lensa Laravel 11.
                    </p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#blog" @click.prevent="scrollTo('blog')" class="rounded-xl bg-primary-600 px-8 py-3.5 text-sm font-bold text-white shadow-lg shadow-primary-200 hover:bg-primary-700 transition duration-200 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:shadow-none">
                            Mulai Membaca
                        </a>
                        <a href="/about" @click.prevent="scrollTo('about')" class="text-sm font-bold leading-6 text-gray-900 dark:text-white group hover:text-primary-600 transition-colors">
                            Tentang Saya <span aria-hidden="true" class="inline-block transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                </div>
                
                <div class="mt-16 sm:mt-24 lg:mt-0 w-full">
                    <div class="relative w-full rounded-2xl group">
                        <div class="absolute -inset-2 bg-gradient-to-tr from-primary-600 to-indigo-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition duration-500 hidden lg:block"></div>
                        <img src="{{ asset('img/hero-cute.png') }}" alt="Hero Workspace Pixar Style" class="relative w-full h-auto object-cover rounded-2xl shadow-2xl border border-gray-100 dark:border-gray-800 transition duration-500 hover:scale-[1.02] hover:-translate-y-1 bg-white/50 dark:bg-black/50 backdrop-blur-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section id="blog" class="scroll-mt-24 mb-24">
        <div class="mx-auto max-w-2xl lg:text-center mb-12">
            <h2 class="text-base font-semibold leading-7 text-primary-600 dark:text-primary-400 uppercase tracking-widest">Blog Terbaru</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Insight & Tutorial Terbaru</p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <x-post-card :post="$post" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="font-semibold text-xl my-4">Articles not found.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-12 text-center">
            <a href="/blog" class="inline-flex items-center font-bold text-primary-600 hover:text-primary-700 transition-colors">
                Lihat Semua Artikel
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <x-about-section :name="$name" />

    <!-- CONTACT SECTION -->
    <x-contact-section />
</x-layout>
