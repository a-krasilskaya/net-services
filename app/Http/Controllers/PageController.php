<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = [
            [
                'title' => 'Разработка сайтов',
                'text' => 'Корпоративные сайты, интернет-магазины и веб-приложения под ключ.',
            ],
            [
                'title' => 'Telegram-боты',
                'text' => 'Боты для продаж, поддержки клиентов и автоматизации процессов.',
            ],
            [
                'title' => 'Интеграции и API',
                'text' => 'Подключение платёжных систем, CRM и внешних сервисов.',
            ],
        ];

        return view('pages.services', compact('services'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }
}