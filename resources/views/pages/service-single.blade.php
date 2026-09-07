@extends('layouts.app')

@section('title', ($service->meta_title ?: $service->title) . ' — NetServices')

@push('meta')
    <meta name="description" content="{{ $service->meta_description ?: $service->title }}">
@endpush

@section('content')
    <section class="container page">
        <a href="{{ route('services') }}" class="page__back-link">&larr; Все услуги</a>

        @if($service->image)
            <img src="{{ asset('storage/' . $service->image) }}" class="service-page__image" alt="{{ $service->image_alt ?: $service->title }}">
        @endif

        <h1 class="page__title">{{ $service->title }}</h1>

        <div class="page__text">
            {!! $service->description !!}
        </div>

        <a href="{{ route('contacts') }}" class="btn btn-primary">Оставить заявку</a>
    </section>
@endsection