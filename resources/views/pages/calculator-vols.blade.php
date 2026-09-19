@extends('layouts.app')

@section('title', 'Калькулятор стоимости монтажа ВОЛС — NetServices')

@push('meta')
    <meta name="description" content="Рассчитайте стоимость монтажа и сварки ВОЛС онлайн — длина трассы, количество волокон, тип кабеля. Точная смета от специалиста бесплатно.">
@endpush

@section('content')
    <section class="container page">
        <h1 class="page__title">Калькулятор стоимости монтажа ВОЛС</h1>
        <p class="page__text">Калькулятор поможет рассчитать примерную стоимость работ и материалов для монтажа и сварки ВОЛС. Выезд специалиста для составления точной сметы — бесплатный.</p>

        @include('partials.calculator-vols')
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/calculator.js') }}"></script>
@endpush