<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-section>
        <div class="gap-16 items-center lg:grid lg:grid-cols-2">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tentang Saya</h2>
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

                <div class="mt-8 flex gap-4">
                    <a href="/posts" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 transition duration-200">
                        Lihat Blog Saya
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="/contact" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 transition duration-200">
                        Hubungi Saya
                    </a>
                </div>
            </div>
            <div class="mt-8 lg:mt-0 relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                <img class="relative w-full rounded-2xl shadow-2xl transition duration-500 group-hover:scale-[1.01]" src="{{ asset('img/about.png') }}" alt="Profile Image">
            </div>
        </div>
    </x-section>
</x-layout>
