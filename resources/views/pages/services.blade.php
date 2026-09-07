@extends('layouts.app')

@section('title', 'NetServices — Услуги')

@section('content')
    <section class="container page">
        <h1 class="page__title">Услуги</h1>
        <div class="services-grid">
            @foreach ($services as $service)
                <div class="service-card">
                    @if($service->icon)
                        <img src="{{ asset('storage/' . $service->icon) }}" class="service-card__icon" alt="">
                    @endif

                    @if($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" class="service-card__image" alt="{{ $service->image_alt ?: $service->title }}" loading="lazy">
                    @endif

                    <h3 class="service-card__title">{{ $service->title }}</h3>
                    <div class="service-card__text">{!! $service->description !!}</div>

                    @if($setting->services_link_type === 'page')
                        <a href="{{ route('services.show', $service->slug) }}" class="btn btn-primary">
                            {{ $setting->services_button_text }}
                        </a>
                    @else
                        <button type="button" class="btn btn-primary" onclick="document.getElementById('popup-{{ $service->id }}').showModal()">
                            {{ $setting->services_button_text }}
                        </button>
                        <dialog id="popup-{{ $service->id }}" class="service-popup">
                            <h3>{{ $service->title }}</h3>
                            <div>{!! $service->description !!}</div>
                            <button type="button" onclick="document.getElementById('popup-{{ $service->id }}').close()">Закрыть</button>
                        </dialog>
                    @endif
                </div>
            @endforeach
        </div>
    </section>
@endsection