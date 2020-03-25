{{--
Template Name: Конструктор заказа носков
--}}
@extends('layouts.app')

@section('content')
    @component('components.banner.banner', ['classes' =>'banner_bg', 'title' =>'Изготовление носков на заказ','buttonText'=>'Как изготавливаются носки'])
        @slot('text')
            Заполните форму — через 15 минут после прочтения мы пришлем смету со сроками, а после утверждения сразу начнем работу.
        @endslot
        @slot('icon')
            <img width="200" src="@asset('images/components/banners/Izgotovlenie_Noskov_Na_Zakaz.png')"
                 alt="Изготовление носков на заказ">
        @endslot
    @endcomponent
@endsection
