{{--
Template Name: Предложить помещение в аренду
--}}
@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov_predlozhit-arendu.jpg')"
           alt="Предложить помещение в аренду">
    </div>

    <div class="block-text">
      <div class="block-text__text block-text__text_padding-away">
        «Фабрика носков» ищет собственников помещений, готовых заключить арендный договор на срок более 11 месяцев.
      </div>
    </div>

    <div class="block-text">
      <div class="block-text__text block-text__text_bold">
        Арендные площади должны соответствовать следующим критериям:
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Площадь коммерческой недвижимости, не менее 20 квадратных метров (до 10 квадратных метров внутри ТРЦ, в формате остров)</li>
        <li class="block-text__point">Обязательное наличие складского помещения (от 5 квадратных метров)</li>
        <li class="block-text__point">Обязательное наличие туалета</li>
        <li class="block-text__point">Отдельная входная группа</li>
        <li class="block-text__point">Плотный пешеходный трафик</li>
        <li class="block-text__point">Возможность установки вывесочного оборудования</li>
        <li class="block-text__point">Витражные окна будут считаться преимуществом</li>
        <li class="block-text__point">Белый цвет помещений будет считаться преимуществом</li>
        <li class="block-text__point">Арендные каникулы на время ремонта будет считаться преимуществом</li>
        <li class="block-text__point">Уверенное покрытие сотовых сетей</li>
        <li class="block-text__point">Наличие проводного интернета (не менее 20 М/бит)</li>
        <li class="block-text__point">Минимальное удаление от офисов транспортных компаний будет считаться преимуществом</li>
        <li class="block-text__point">Наличие автомобильного трафика будет считаться преимуществом</li>
        <li class="block-text__point">Городское население, не менее 150000 человек</li>
        <li class="block-text__point">Наличии муниципальной парковки будет считаться преимуществом</li>
      </ul>
    </div>
  </div>

  @include('blocks.writeus.writeus')
@endsection
