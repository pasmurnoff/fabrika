{{--Template Name: Бесплатная доставка
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/besplatnaya_dostavka_noskov.jpg')"
           alt="Бесплатная доставка носков оптом">
    </div>
    <div class="block-text">
      <ul class="block-text__list">
        <li class="block-text__point">Условия бесплатной доставки обсуждаются с крупными оптовиками на основании
          заключенных долгосрочных договоров.
        </li>
        <li class="block-text__point">Условия бесплатной доставки могут распространяться, как на территорию РФ, так и за
          ее пределы.
        </li>
        <li class="block-text__point">Доставка осуществляется силами сторонней транспортной компании, до
          распределительного центра в зоне вашего нахождения, либо до необходимого адреса.
        </li>
        <li class="block-text__point">Доставка груза осуществляется только с фирменной этикеткой в упаковке по 10 или
          100 пар изделий.
        </li>
        <li class="block-text__point">Сохранность и целостность груза обеспечивает транспортная компания.</li>
      </ul>
    </div>
  </div>
@endsection
