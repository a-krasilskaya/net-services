@extends('layouts.app')

@section('title', 'NetServices — Главная')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('content')
    <section class="hero-full">
        <canvas id="networkCanvas" class="hero-full__canvas"></canvas>
        <div class="hero-full__overlay"></div>
        <div class="container hero-full__inner">
            <div class="hero-full__content">
                <h1 class="hero-full__title">
                    @typo($setting->hero_title)
                </h1>
                <p class="hero-full__text">
                    @typo($setting->hero_subtitle)
                </p>
                <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
                <div class="hero-full__status">
                    <span><span class="dot"></span>ONLINE 24/7</span>
                    <span>99.98% UPTIME</span>
                    <span>&lt;8MS LATENCY</span>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <button type="button" class="btn btn-primary calculator-loader" data-calculator-type="sks" data-target="calculator-dialog-sks">
            Рассчитать стоимость СКС
        </button>

        <dialog id="calculator-dialog-sks" class="calculator-dialog">
            <button type="button" class="calculator-dialog__close">&times;</button>
            <div class="calculator-dialog__content"></div>
        </dialog>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/calculator.js') }}"></script>
    <script src="{{ asset('js/pages/home.js') }}"></script>
@endpush