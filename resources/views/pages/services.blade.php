@extends('layouts.app')

@section('title', 'NetServices — Услуги')

@section('content')
    <section class="max-w-6xl mx-auto px-6 pt-20 pb-24">
        <h1 class="text-4xl font-semibold mb-12">Услуги</h1>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <div class="border border-slate-200 rounded-xl p-6">
                    <h3 class="font-semibold text-lg mb-2">{{ $service['title'] }}</h3>
                    <p class="text-slate-600 text-sm">{{ $service['text'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection