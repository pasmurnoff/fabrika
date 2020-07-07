{{--Template Name: Отсрочка платежа
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov_otsrochka_platezha.jpg')"
           alt="Отсрочка платежа" itemprop="contentUrl">
    </div>

    <div class="block-text">
      <div class="block-text__text">
        Дорогие клиенты, мы работаем с отсрочкой платежа.
        <br/><br/>
        Мы не даем продукцию под реализацию и комиссию, но мы можем предложить следующие условия.
        <br/>
        При подтвержденном оптовом заказе от 100 тысяч рублей на основании подписанного договора, вы можете предоплатить
        50% заказа, в этом случае вы экономите время на производственный процесс. Окончательная оплата производится по
        факту готовности изделий, до отправки его Вам.
      </div>
    </div>
  </div>
@endsection
