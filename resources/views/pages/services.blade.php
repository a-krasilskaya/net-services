@extends('layouts.app')

@section('title', 'NetServices — Услуги')

@section('content')
    <section class="container page">
        <h1 class="page__title">Услуги</h1>
        <div class="services-grid">
            @foreach ($services as $service)
                <div class="service-card">
                    <h3 class="service-card__title">{{ $service['title'] }}</h3>
                    <p class="service-card__text">{{ $service['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection