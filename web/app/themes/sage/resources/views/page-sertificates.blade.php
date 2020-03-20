{{--
Template Name: Подарочные сертификаты
--}}
@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov_podarochnie-sertifikati.jpg')"
           alt="Подарочные сертификаты">
    </div>

    <div class="title title_large">Подарочные сертификаты</div>
    <div class="block-text pdng35">
      <div class="block-text__text block-text__text_bold">Всегда к вашим услугам наш сервис «Подарочный сертификат».</div>
      <ul class="block-text__list">
        <li class="block-text__point">
          Сертификат может быть любого номинала, доставка продукции и дизайн носочной чулочной продукции,
          этикетки/упаковки может быть включена в его стоимость. Минимальная партия заказа 100 пар одного размера и
          дизайна.
        </li>
        <li class="block-text__point">
          При покупке сертификата, вам будет необходимо указать ФИО, номер телефона, электронный адрес почты человека,
          которому вы хотите подарить сертификат.При покупке сертификата, вам будет необходимо указать ФИО, номер
          телефона, электронный адрес почты человека, которому вы хотите подарить сертификат.
        </li>
        <li class="block-text__point">
          Именной сертификат будет прислан вам в электронном виде и может быть обменен только на продукцию завода
          эквивалентную номиналу сертификата.
        </li>
        <li class="block-text__point">
          Обмен сертификата на продукцию может быть осуществлен только человеком на чье имя был выписан сертификат,
          после пройденной аутентификации по указанному номеру телефона.
        </li>
        <li class="block-text__point">
          Условия выполнения сертификата обсуждаются только с человеком, чье ФИО указано в сертификате, либо с
          назначенным им исполнителем.
        </li>
      </ul>
    </div>

    <div class="title title_large">Купить подарочные сертификаты</div>
    <form class="form mrgn35" method="POST">

      <div class="singlerow singlerow_mrgn15">
        <div class="labelwrap labelwrap_single">
          <input type="text" class="input" name="name">
          <label class="label">Фамилия Имя Отчество*</label>
        </div>
      </div>

      <div class="dualrow dualrow_mrgn15">
        <div class="labelwrap labelwrap_dual">
          <input type="text" class="input" name="city">
          <label class="label">Город*</label>
        </div>
        <div class="labelwrap labelwrap_dual">
          <input type="tel" class="input" name="name">
          <label class="label">Мобильный телефон*</label>
        </div>
      </div>

      <div class="dualrow dualrow_mrgn15">
        <div class="labelwrap labelwrap_dual">
          <input type="email" class="input" name="email">
          <label class="label">Электронная почта</label>
        </div>
        <div class="labelwrap labelwrap_dual">
          <input type="text" class="input" name="sertificate-price">
          <label class="label">Сумма подарочного сертификата</label>
        </div>
      </div>

      <div class="singlerow_privacy">
        <input type="submit" class="submit" value="Заказать">
        <div class="form__privacy form__privacy_left">
          Отправляя форму я соглашаюсь<br/> с <a class="form__privacy_link" href="/uslovija-peredachi-informacii">условиями
            передачи информации</a>
        </div>
      </div>

    </form>

  </div>
@endsection
