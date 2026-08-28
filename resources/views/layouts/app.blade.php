<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NetServices')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-900 antialiased">

    <header class="border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-6 py-5 flex items-center justify-between">
            <a href="{{ route('home') }}" class="font-semibold text-lg">NetServices</a>
            <nav class="hidden md:flex gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Главная</a>
                <a href="{{ route('about') }}" class="hover:text-blue-600 transition">О компании</a>
                <a href="{{ route('services') }}" class="hover:text-blue-600 transition">Услуги</a>
                <a href="{{ route('contacts') }}" class="hover:text-blue-600 transition">Контакты</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-slate-200 mt-24">
        <div class="max-w-6xl mx-auto px-6 py-10 text-sm text-slate-500">
            © {{ date('Y') }} NetServices
        </div>
    </footer>

</body>
</html>