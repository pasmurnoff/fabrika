{{--Template Name: Программа лояльности
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/Skidki_fabrika_noskov.jpg')"
           alt="Программа лояльности">
    </div>
    <div class="block-text">

      <div class="block-text__text">
        Для крупных оптовиков и постоянных клиентов предусмотрена система лояльности.
        <br/><br/>
        <div class="block-text__text block-text__text_bold">Система скидок применяется по предоплате:</div>
        От 10000 руб. до 50000 руб. – 5%
        <br/>
        От 50000 руб. до 100000 руб. – 6%
        <br/>
        От 100000 руб. до 200000 руб. – 7%
        <br/>
        От 200000 руб. до 300000 руб. – 8%
        <br/>
        От 300000 руб. до 500000 руб. – 9%
        <br/>
        От 500000 руб. до 800000 руб. – 10%
        <br/>
        От 800000 руб. до 1000000 руб. – 12%
        <br/>
        Свыше 1000000 руб. применяется индивидуальная скидка
        <br/><br/>
        * система лояльности распространяется на текущую номенклатуру фабрики. Система скидок на индивидуальные заказы
        (с уникальным дизайном) рассчитывается отдельно по запросу.
      </div>

    </div>
  </div>
@endsection
