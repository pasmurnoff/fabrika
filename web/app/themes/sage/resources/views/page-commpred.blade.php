{{--Template Name: Коммерческое предложение
--}}

@extends('layouts.app')

@section('content')
    @component('components.banner.banner', ['classes' => 'banner_bg', 'href' => '/noski-optom', 'href2' => '/na-zakaz'])
        @slot('title')
            Коммерческое предложение для оптовых<br>
            покупателей и дилеров Фабрики Носков
        @endslot
        @slot('text')
            Сегодня компания «Фабрика Носков» - производитель, оснащенный уникальным оборудованием последнего поколения,
            разработанным итальянской компанией «Autotex» и «Lonati», имеющими в мире единичные аналоги.
        @endslot
        @slot('icon')
            <img width="210" src="@asset('images/components/banners/Fabrika_Noskov_O_Kompanii.png')"
                 alt="Производство и продажа нносков по низким ценам">
        @endslot
        @slot('buttonText')
            Носки оптом
        @endslot
        @slot('buttonText2')
            Носки на заказ
        @endslot
    @endcomponent

    @include('components.сommercial-offer.wrap', ['page_id' => get_the_ID()] )
@endsection
