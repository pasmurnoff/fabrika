{{--Template Name: Менеджер по продажам
--}}

@extends('layouts.app')

@section('content')

  @component('components.banner.banner', ['href' => '/menedzher-po-prodazham/#manager-form', 'classes' => 'mrgn35'])
    @slot('title')
      Мы платим 10%<br/>
      от суммы всех твоих продаж
    @endslot
    @slot('text')
      В компанию "Фабрика Носков" на постоянную основу требуются менеджер по оптовым продажам и помощники менеджеров. Гарантируем ежемесячные выплаты агентских вознаграждений!
    @endslot
    @slot('icon')
      {{--      <img class="banner__img" src="@asset('images/blocks/banners/Menedzher_po_prodazham_noskov_kolgotok.png')" alt="Менеджер по продажам">--}}
    @endslot
    @slot('buttonText')
      Я хочу работать с вами!
    @endslot
  @endcomponent

  @include('components.worksteps.worksteps')
  @include('components.workformat.workformat')
  @include('components.workfeatures.workfeatures')

  <div class="block-text">
    <div class="block-text__text block-text__text_padding-away">
      Fabrikanoskov.ru является производителем носочно-чулочных изделий. География наших клиентов весь мир. Носки нужны
      всем.
      <br/><br/>
      Наши мощности позволяют производить до 500 тысяч изделий в месяц. А на нашем складе хранится более 2 млн. изделий,
      готовых к реализации.
      <br/><br/>
      Также в нашем распоряжении отдел дизайна, который в кратчайшие сроки обрисует дизайн по любым желаниям клиента.
      Отдел дизайна разработает, как дизайн носков, так и дизайн этикетки и упаковки.
      <br/><br/>
      Мы ищем в нашу команду «Менеджера по продажам».
    </div>
  </div>

  <div class="block-text">
    <div class="block-text__text block-text__text_bold">Ваши обязанности:</div>
    <ul class="block-text__list">
      <li class="block-text__point">
        Поиск клиентов любым доступным для вас способом
      </li>
      <li class="block-text__point">
        Проведение встреч и консультирование клиента по возможностям фабрики (уникальный дизайн носочно-чулочных
        изделий, производство, доставка)
      </li>
      <li class="block-text__point">
        Составление договора и ведение клиента до окончания сделки
      </li>
      <li class="block-text__point">
        Работать можно из любого места в любое удобное для вас время
      </li>
      <li class="block-text__point">
        Для полноценной работы достаточно компьютера или ноутбука с подключением к интернету
      </li>
    </ul>
  </div>

  <div class="block-text">
    <div class="block-text__text block-text__text_bold">Мы предлагаем:</div>
    <ul class="block-text__list">
      <li class="block-text__point">Корпоративное обучение</li>
      <li class="block-text__point">Свободный график</li>
      <li class="block-text__point">Удаленная работа</li>
      <li class="block-text__point">10% от сделки</li>
    </ul>
    <div class="block-text__text">
      Мы ищем коллег, которые нацелены на построение карьеры, улучшение своего финансового благополучия, при этом будучи
      самостоятельными профессионалами, умеющими добиваться результата, пунктуальными и клиентоориентированными.
    </div>
  </div>

  @include('components.form.default', ['title' => 'Я хочу работать с вами'])
@endsection
