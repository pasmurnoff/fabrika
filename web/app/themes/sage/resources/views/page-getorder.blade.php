{{--Template Name: Как оформить заказ
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/kak_oformit_zakaz_noskov.jpg')"
           alt="Как оформить заказ носков">
    </div>
    <div class="block-text">
      <div class="block-text__text block-text__text_bold">
        Оформление заказа
      </div>
      <div class="block-text__text block-text__text_padding-away">
        Выбор существующего дизайна и размера носочно-чулочной продукции (минимальная партия заказа составляет 100 пар
        изделий в одном дизайне и размере), либо заказ индивидуального дизайна (Стоимость разработки индивидуального
        дизайна по эскизам заказчика – 2000р, при условии минимальной партии носочной-чулочной продукции 100 пар одного
        дизайна и размера)
      </div>

      <div class="block-text__text block-text__text_bold">
        Заказ существующей модели носочно-чулочной продукции
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Выбор интересующей Вас позиции в разрезе дизайна, формы изделия и его размера</li>
        <li class="block-text__point">Составление, подписание договора</li>
        <li class="block-text__point">Выставление и оплата счета</li>
        <li class="block-text__point">Отгрузка при наличии на складе, либо пошив и отправка груза транспортной
          компанией
        </li>
        <li class="block-text__point block-text__point_underline">Сроки изготовления и доставки продукции всегда
          рассчитываются индивидуально
        </li>
      </ul>

      <div class="block-text__text block-text__text_bold">
        Заказ индивидуальной партии носочно-чулочной продукции
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Составление и подписание договора на индивидуальный дизайн носочно-чулочной
          продукции
        </li>
        <li class="block-text__point">Выставление и оплата счета</li>
        <li class="block-text__point">Заполнение технического задания по существующему шаблону</li>
        <li class="block-text__point">Разработка дизайна и его согласование</li>
        <li class="block-text__point">Отправка и согласование физического образца пошитого изделия</li>
        <li class="block-text__point">Составление и подписание приложения к договору на пошив тиража носочно-чулочной
          продукции
        </li>
        <li class="block-text__point">Выставление и оплата счета</li>
        <li class="block-text__point">Пошив и отправка готовой носочно-чулочной продукции транспортной компанией</li>
        <li class="block-text__point block-text__point_underline">Сроки изготовления и доставки продукции всегда
          рассчитываются индивидуально
        </li>
      </ul>

      <div class="block-text__text block-text__text_bold">
        Заказ индивидуальной партии носочно-чулочной продукции с индивидуальной упаковкой/этикеткой
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Составление и подписание договора на индивидуальный дизайн носочно-чулочной
          продукции и индивидуальной упаковки/этикетки
        </li>
        <li class="block-text__point">Выставление и оплата счета</li>
        <li class="block-text__point">Заполнение технического задания по существующему шаблону</li>
        <li class="block-text__point">Разработка дизайна носочно-чулочной и полиграфической* продукции и их
          согласование
        </li>
        <li class="block-text__point">Отправка и согласование физического образца пошитого изделия</li>
        <li class="block-text__point">Составление и подписание приложения к договору на пошив тиража носочно-чулочной и
          полиграфической продукции
        </li>
        <li class="block-text__point">Выставление и оплата счета</li>
        <li class="block-text__point">Пошив и отправка готовой носочно-чулочной и полиграфической продукции транспортной
          компанией
        </li>
        <li class="block-text__point block-text__point_underline">Сроки изготовления и доставки продукции всегда рассчитываются индивидуально</li>
      </ul>

      <div class="block-text__text block-text__text_bold">
        Заказ пробной партии носочно-чулочной продукции
      </div>
      <ul class="block-text__list">
        <li class="block-text__point">Выбор интересующей Вас позиции в разрезе дизайна, формы изделия и его размера из
          существующей номенклатуры товаров, но не менее 20 пар различного дизайна и размеров
        </li>
        <li class="block-text__point">Составление, подписание договора на пробную партию</li>
        <li class="block-text__point">Выставление и оплата счета</li>
        <li class="block-text__point">Отправка пробной партии</li>
      </ul>

    </div>
  </div>
@endsection
