<form {{ $attributes->merge(['action' => '#', 'method' => 'POST', 'class' => 'flex flex-col gap-y-6 bg-white dark:bg-gray-900 p-8 rounded-2xl border border-gray-100 dark:border-gray-800 shadow-xl']) }}>
    <div>
        <label for="name" class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Nama Lengkap</label>
        <div class="mt-2">
            <input type="text" name="name" id="name" placeholder="Nama Anda" class="block w-full rounded-xl border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm">
        </div>
    </div>
    <div>
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Email Kerja</label>
        <div class="mt-2">
            <input type="email" name="email" id="email" placeholder="email@contoh.com" class="block w-full rounded-xl border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm">
        </div>
    </div>
    <div>
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900 dark:text-gray-300">Pesan Anda</label>
        <div class="mt-2">
            <textarea name="message" id="message" rows="4" placeholder="Tuliskan pesan di sini..." class="block w-full rounded-xl border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm"></textarea>
        </div>
    </div>
    <button type="button" class="block w-full rounded-xl bg-primary-600 px-4 py-3 text-center text-sm font-bold text-white shadow-lg shadow-primary-200 hover:bg-primary-700 transition duration-200 focus:ring-4 focus:ring-primary-300 dark:shadow-none">
        Kirim Pesan Sekarang
    </button>
</form>
