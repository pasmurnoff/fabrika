{{--
Template Name: Помощь сотрудникам
--}}

@extends('layouts.app')

@section('content')
    <div class="cards">
        @component('components.card.wrap', ['bgc' => '#F82F2F','title' => 'Готовые изделия', 'href' => '/sotrudnik-forma-zakaza-gotovoy-produkcii', 'buttonText' => 'Разместить заказ'])
            @slot('text')
                Разместить заказ на продажу оптом готовых изделий
            @endslot
            @slot('img')
                @include('icon::sotrudnik.sales')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#7F25FC', 'title' => 'Продукция на заказ', 'href' => '/sotrudnik/forma-zakaza-produkcii', 'buttonText' => 'Разместить заказ'])
            @slot('text')
                Разместить заказ на производство носков или колготок "Под заказ"
            @endslot
            @slot('img')
                @include('icon::sotrudnik.nazakaz')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#31D665', 'title' => 'Выставить счет на оплату', 'href' => '#', 'buttonText' => 'Выставить счет'])
            @slot('text')
                Если вы знаете сумму заказа, вы можете выставить счет на оплату
            @endslot
            @slot('img')
                @include('icon::sotrudnik.naoplatu')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#FFA523','title' => 'Договор на поставку', 'href' => '#', 'buttonText' => 'Получить договор'])
            @slot('text')
                Оформить договор на поставку продукции оптом
            @endslot
            @slot('img')
                @include('icon::sotrudnik.dogovor')
            @endslot
        @endcomponent

        @component('components.card.wrap', ['bgc' => '#1771e6','title' => 'Договор на изготовление под заказ', 'href' => '#', 'buttonText' => 'Получить договор'])
            @slot('text')
                Оформить договор на изготовление по собственному дизайну заказчика
            @endslot
            @slot('img')
                @include('icon::sotrudnik.dogovor')
            @endslot
        @endcomponent
    </div>
@endsection