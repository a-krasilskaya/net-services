<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'NetServices')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    @stack('styles')
    @stack('meta')
</head>
<body>

    <header class="site-header">
        <div class="container site-header__inner">
            <a href="{{ route('home') }}" class="logo">Net<span>Services</span></a>
            <nav class="nav">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('about') }}">О компании</a>
                <a href="{{ route('services') }}">Услуги</a>
                <a href="{{ route('contacts') }}">Контакты</a>
            </nav>
            <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container site-footer__inner">
            <p>© {{ date('Y') }} NetServices</p>
            <p>ИНН 000000000000 · г. Город, ул. Улица, 1</p>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>