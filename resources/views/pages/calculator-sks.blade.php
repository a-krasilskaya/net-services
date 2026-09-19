@extends('layouts.app')

@section('title', 'Калькулятор стоимости монтажа СКС — NetServices')

@push('meta')
    <meta name="description" content="Рассчитайте стоимость монтажа локальной сети (СКС) онлайн — рабочие места, розетки, категория кабеля. Точная смета от специалиста бесплатно.">
@endpush

@section('content')
    <section class="container page">
        <h1 class="page__title">Калькулятор стоимости монтажа СКС</h1>
        <p class="page__text">Калькулятор поможет рассчитать примерную стоимость работ и материалов для монтажа сети в вашем офисе. Выезд специалиста для составления точной сметы — бесплатный.</p>

        @include('partials.calculator-sks')
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/calculator.js') }}"></script>
@endpush