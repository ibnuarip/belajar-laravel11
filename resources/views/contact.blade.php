<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
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
</x-layout>
