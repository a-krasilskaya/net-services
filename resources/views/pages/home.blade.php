@extends('layouts.app')

@section('title', 'NetServices — Главная')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('content')
    <section class="hero-full">
        <canvas id="networkCanvas" class="hero-full__canvas"></canvas>
        <div class="hero-full__overlay"></div>
        <div class="hero-full__content">
            <h1 class="hero-full__title">
                Проектируем и монтируем СКС, ВОЛС и видеонаблюдение с сервисом 24/7
            </h1>
            <p class="hero-full__text">
                Меняем хаос проводов на сеть, которая просто работает
            </p>
            <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>

            <div class="hero-full__status">
                <span><span class="dot"></span>ONLINE 24/7</span>
                <span>99.98% UPTIME</span>
                <span>&lt;8MS LATENCY</span>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/pages/home.js') }}"></script>
@endpush