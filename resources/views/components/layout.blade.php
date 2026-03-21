<!DOCTYPE html>
<html lang="en" class="h-full bg-white scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" type="image/svg+xml" href="https://laravel.com/img/logomark.min.svg">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title ?? 'Home Page' }}</title>
</head>

<body class="h-full">

    <div class="min-h-full" x-data="{ 
        mobileMenuOpen: false, 
        profileMenuOpen: false,
        scrollTo(id) {
            if (window.location.pathname !== '/') {
                if (id === 'home') {
                    window.location.href = '/';
                } else if (id === 'blog') {
                    window.location.href = '/blog';
                } else {
                    window.location.href = '/' + id;
                }
                return;
            }
            const el = document.getElementById(id);
            if (el) {
                el.scrollIntoView({ behavior: 'smooth' });
                history.replaceState(null, null, window.location.pathname + window.location.search);
            }
        }
    }" x-init="
        if (window.location.hash) {
            setTimeout(() => {
                history.replaceState(null, null, window.location.pathname + window.location.search);
            }, 50);
        }
    ">
        <x-navbar></x-navbar>

        <x-header>{{ $title ?? 'Home Page' }}</x-header>

        <main class="bg-gray-50">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        <x-footer></x-footer>
    </div>

</body>

</html>
