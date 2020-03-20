{{--
Template Name: Статус заказа по номеру
--}}
@extends('layouts.app')

@section('content')
  <div class="defaultpage">
    <div class="defaultpage__imgwrap">
      <img class="defaultpage__image" src="@asset('images/defaultpages/status_zakaza_fabrika_noskov.jpg')"
           alt="Статус заказа по номеру">
    </div>

    <div class="block-text">
      <div class="block-text__text block-text__text_padding-away">
        С помощью встроенного сервиса отслеживания заказов транспортной компании «СДЭК», у вас есть возможно отслеживать
        точное местоположение вашего заказа прямо на нашем сайте.
      </div>
    </div>

    <div class="cdek">
      <form method="POST" class="form_single form_cdek">
        <div class="labelwrap labelwrap_single">
          <label class="label">Введите трек код вашего заказа</label>
          <input type="text" class="input input_single input_cdek">
        </div>
        <input type="text" class="submit submit_single submit_cdek" value="Отследить">
        <span class="alert">lol</span>
      </form>
    </div>
  </div>
@endsection
