<section id="contact" class="scroll-mt-24 mb-24 {{ request()->is('contact') ? 'py-12' : '' }}">
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
                        <p class="mt-1 leading-7 text-gray-600 dark:text-gray-400 font-medium">admin@arsipcode.dev</p>
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
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold leading-7 text-gray-900 dark:text-white">Jam Layanan</h3>
                        <p class="mt-1 leading-7 text-gray-600 dark:text-gray-400">Senin - Jumat: 09:00 - 17:00</p>
                    </div>
                </div>
            </div>

            <!-- Menggunakan Komponen Contact Form -->
            <x-contact-form />
        </div>
    </x-section>
</section>
