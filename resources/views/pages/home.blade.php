@extends('layouts.app')

@section('title', 'NetServices — Главная')

@section('content')
    <section class="max-w-6xl mx-auto px-6 pt-20 pb-24">
        <h1 class="text-4xl font-semibold mb-6 max-w-2xl">
            Проектируем и монтируем СКС, ВОЛС и видеонаблюдение с сервисом 24/7
        </h1>
        <p class="text-slate-600 text-lg mb-8 max-w-md">
            Меняем хаос проводов на сеть, которая просто работает
        </p>
        <a href="{{ route('contacts') }}" class="bg-slate-900 text-white px-6 py-3 rounded-full font-semibold">
            Оставить заявку
        </a>
    </section>
@endsection