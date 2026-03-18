@props(['name'])

<section id="about" class="scroll-mt-24 mb-24 {{ request()->is('about') ? 'py-12' : '' }}">
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
                <img class="relative w-full rounded-2xl shadow-2xl transition duration-500 group-hover:scale-[1.01]" src="{{ asset('img/about-cute.png') }}" alt="Profile Image">
            </div>
        </div>
    </x-section>
</section>
