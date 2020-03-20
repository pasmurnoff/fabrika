{{--Template Name: Центр поддержки
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/centr_podderzhki_fabrika_noskov.jpg')"
           alt="Центр поддержки фабрики носков">
    </div>

    <div class="block-text">
      <div class="block-text__text block-text__text_bold">Центр поддержки</div>
      <ul class="block-text__list">
        <li class="block-text__point">Поддержка осуществляется в рабочие дни с 08:00 до 20:00 по Московскому времени</li>
        <li class="block-text__point">Поддержка клиентов осуществляется по телефону <a class="block-text__link" href="tel:88004441156">8 800 444 11 56</a>&nbsp;и электронной почте <a class="block-text__link" href="mailto:mail@fabrikanoskov.ru">mail@fabrikanoskov.ru</a></li>
        <li class="block-text__point">Для получения информации по оформлению заказа, нужно воспользоваться соответствующем разделом <a class="block-text__link" href="/kak-oformit-zakaz">«Как оформить заказ»</a></li>
        <li class="block-text__point">Получить шаблона договора и реквизитов можно по <a class="block-text__link" href="/shablon_dogovora.docx">данной ссылке</a></li>
        <li class="block-text__point">Для получения условий сотрудничества, необходимо воспользоваться <a class="block-text__link" href="/podkljuchitsja-k-partnjorskoj-programme">соответствующим разделом</a></li>
        <li class="block-text__point">Для предложения своих услуг, просим написать письмо на почту <a class="block-text__link" href="mailto:mail@fabrikanoskov.ru">mail@fabrikanoskov.ru</a></li>
        <li class="block-text__point">Для получения условий по возврату продукции, необходимо воспользоваться соответствующим разделом <a class="block-text__link" href="/uslovija-vozvrata">«Условия возврата»</a></li>
        <li class="block-text__point">Получить пример технического задания на уникальный дизайн можно по <a class="block-text__link" href="/fabrikanoskov-tehnicheskoe_zadanie.pdf">данной ссылке</a></li>
      </ul>
    </div>
  </div>
@endsection
