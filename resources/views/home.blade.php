<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- HERO SECTION -->
    <section id="home">
        <div class="relative bg-white dark:bg-gray-900 rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 overflow-hidden mb-12">
            <div class="mx-auto max-w-7xl px-6 py-12 sm:py-20 lg:grid lg:grid-cols-2 lg:gap-x-16 lg:items-center lg:px-8 lg:py-24">
                <div class="max-w-2xl lg:mx-0">
                    <div class="flex">
                        <div class="relative flex items-center gap-x-4 rounded-full px-4 py-1.5 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 dark:text-gray-400 dark:ring-gray-800 transition duration-200">
                            <span class="font-bold text-primary-600">New update</span>
                            <div class="h-4 w-px bg-gray-900/10 dark:bg-gray-800"></div>
                            <a href="#blog" class="flex items-center gap-x-1 hover:text-primary-600 transition-colors">
                                Check out recent posts
                                <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <h1 class="mt-10 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-6xl leading-[1.1]">
                        Membangun Masa Depan Digital Anda
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">
                        Selamat datang di blog pribadi saya. Tempat di mana ide-ide kreatif bertemu dengan teknologi modern. Mari menjelajahi dunia pengembangan web melalui lensa Laravel 11.
                    </p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#blog" class="rounded-xl bg-primary-600 px-8 py-3.5 text-sm font-bold text-white shadow-lg shadow-primary-200 hover:bg-primary-700 transition duration-200 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:shadow-none">
                            Mulai Membaca
                        </a>
                        <a href="#about" class="text-sm font-bold leading-6 text-gray-900 dark:text-white group hover:text-primary-600 transition-colors">
                            Tentang Saya <span aria-hidden="true" class="inline-block transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                </div>
                
                <div class="mt-16 sm:mt-24 lg:mt-0 w-full">
                    <div class="relative w-full rounded-2xl group">
                        <div class="absolute -inset-2 bg-gradient-to-tr from-primary-600 to-indigo-600 rounded-3xl blur-xl opacity-20 group-hover:opacity-40 transition duration-500 hidden lg:block"></div>
                        <img src="{{ asset('img/hero.png') }}" alt="Hero Workspace Disney Style" class="relative w-full h-auto object-cover rounded-2xl shadow-2xl border border-gray-100 dark:border-gray-800 transition duration-500 hover:scale-[1.02] hover:-translate-y-1 bg-white/50 dark:bg-black/50 backdrop-blur-sm">
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
            <a href="/posts" class="inline-flex items-center font-bold text-primary-600 hover:text-primary-700 transition-colors">
                Lihat Semua Artikel
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="scroll-mt-24 mb-24">
        <x-section>
            <div class="gap-16 items-center lg:grid lg:grid-cols-2">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white uppercase tracking-widest">Tentang Saya</h2>
                    <p class="mb-4 text-gray-600 dark:text-gray-400 font-medium text-xl">{{ $name }}</p>
                    <p class="mb-6">Halo! Saya adalah seorang pengembang muda yang sangat antusias dengan dunia teknologi, khususnya pengembangan web. Saat ini saya sedang mendalami framework Laravel 11 untuk membangun aplikasi yang tidak hanya fungsional, tetapi juga memiliki performa yang baik dan desain yang menarik.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                        <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700">
                            <div class="flex items-center mb-2">
                                <div class="p-2 bg-primary-100 dark:bg-primary-900 rounded-lg mr-3">
                                    <svg class="w-5 h-5 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-gray-900 dark:text-white">Fullstack Dev</h3>
                            </div>
                            <p class="text-sm text-gray-500">Membangun dari database hingga antarmuka pengguna.</p>
                        </div>
                        
                        <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-xl border border-gray-100 dark:border-gray-700">
                            <div class="flex items-center mb-2">
                                <div class="p-2 bg-primary-100 dark:bg-primary-900 rounded-lg mr-3">
                                    <svg class="w-5 h-5 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-gray-900 dark:text-white">Fast Learner</h3>
                            </div>
                            <p class="text-sm text-gray-500">Selalu mengikuti perkembangan teknologi terbaru.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 lg:mt-0 relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-primary-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <img class="relative w-full rounded-2xl shadow-2xl transition duration-500 group-hover:scale-[1.01]" src="{{ asset('img/about.png') }}" alt="Profile Image">
                </div>
            </div>
        </x-section>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="scroll-mt-24 mb-24">
        <x-section>
            <div class="mx-auto max-w-2xl lg:text-center mb-16">
                <h2 class="text-base font-semibold leading-7 text-primary-600 dark:text-primary-400 uppercase tracking-widest">Hubungi Saya</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">Mari Berkolaborasi</p>
                <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400">Ada ide proyek menarik atau sekadar ingin menyapa? Silakan kirimkan pesan melalui formulir di bawah ini.</p>
            </div>
            
            <div class="mx-auto grid max-w-4xl grid-cols-1 gap-x-12 gap-y-16 lg:grid-cols-2">
                <!-- Contact Info -->
                <div class="flex flex-col gap-y-10">
                    <div class="flex gap-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 transition duration-300 hover:shadow-md">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-600 text-white shadow-lg shadow-primary-200 dark:shadow-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold leading-7 text-gray-900 dark:text-white">Email</h3>
                            <p class="mt-1 leading-7 text-gray-600 dark:text-gray-400 font-medium">ibnu@example.com</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 transition duration-300 hover:shadow-md">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-600 text-white shadow-lg shadow-primary-200 dark:shadow-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold leading-7 text-gray-900 dark:text-white">Lokasi</h3>
                            <p class="mt-1 leading-7 text-gray-600 dark:text-gray-400">Bandung, Jawa Barat, Indonesia</p>
                        </div>
                    </div>

                    <div class="flex gap-x-4 p-6 bg-gray-50 dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 transition duration-300 hover:shadow-md">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary-600 text-white shadow-lg shadow-primary-200 dark:shadow-none">
                           <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                           </svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold leading-7 text-gray-900 dark:text-white">GitHub</h3>
                            <a href="https://github.com/ibnuarip" class="mt-1 leading-7 text-primary-600 dark:text-primary-400 hover:text-primary-500 font-bold">@ibnuarip</a>
                        </div>
                    </div>
                </div>

                <!-- Menggunakan Komponen Contact Form -->
                <x-contact-form />
            </div>
        </x-section>
    </section>
</x-layout>
