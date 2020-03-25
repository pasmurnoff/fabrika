{{--
  Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')

  @component('components.banner.banner-duo', ['href' => '/noski-optom', 'href2' => '/konstruktor-zakaza-noskov'])
    @slot('title')
      Продажа носков, колготок и чулок оптом
    @endslot
    @slot('text')
      Оптовый склад носков, колготок и чулок от производителя. Цены от 12 рублей. Доставка по всей России, странам СНГ и миру.
    @endslot
    @slot('icon')
      @include('icon::okay')
    @endslot
    @slot('buttonText')
      Купить оптом
    @endslot

    @slot('title2')
      Носки, колготки и чулки на заказ по вашему дизайну
    @endslot
    @slot('text2')
      Наша фабрика может отвязать для вас носки, колготки и чулки на заказ. Любых расцветок и дизайнов. У нас своё производство и возможны даже минимальные оптовые партии.
    @endslot
    @slot('icon2')
      @include('icon::diamond')
    @endslot
    @slot('buttonText2')
      Оформить заказ
    @endslot
  @endcomponent

@endsection
