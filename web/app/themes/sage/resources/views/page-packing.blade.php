{{--Template Name: Этикетка и упаковка носков
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov-upakovka_noskov.jpg')"
           alt="Этикетка и упаковка носков">
    </div>

    <div class="block-text">
      <div class="block-text__text block-text__text_bold">
        По запросу клиента, наш отдел дизайна может разработать для Вас дизайн иникальной упаковки и этикетки.
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">
          Процесс создание упаковки/этикетки начинается с предоставления клиентом технического задания либо
          идеи/концепции. При наличии брендбука, просим прикладывать его к письму;
        </li>
        <li class="block-text__point">Логотип должен быть предоставлен в векторном формате (.ai, .eps, .cdr) ;</li>
        <li class="block-text__point">Все необходимые текста для упаковки/этикетки предоставляет заказчик;</li>
        <li class="block-text__point">
          Сроки реализации проекта зависят от сложности разрабатываемого дизайна, которые обговариваются до начала
          работы (минимальные сроки выполнения 3-5 рабочих дней) ;
        </li>
        <li class="block-text__point">Минимальная стоимость дизайна этикетки/упаковки начинается от 10000 рублей;</li>
        <li class="block-text__point">
          Этикетка/упаковка может быть произведена силами собственной типографии фабрики, либо силами заказчика по
          рекомендациям к печати со стороны исполнителя. Исполнитель обязуется передать оригинальные дизайн-макеты в
          формате, подготовленном к печати, либо исходные данные по проекту по запросу клиента, после полной оплаты
          проекта;
        </li>
        <li class="block-text__point">
          Стоимость доставка этикетки/упаковки рассчитывается отдельно от тиража носочно-чулочных изделий;
        </li>
      </ul>
      <div class="block-text__text">
        *Обязательное условие — указание места производства и юридическое наименование производителя, как на этикетке,
        так и на упаковке. Так как производство и продукция завода сертифицирована, отпуск продукции без этикетки с
        указанием производителя невозможен.
      </div>
    </div>
  </div>

  @include('components.writeus.writeus')
@endsection
