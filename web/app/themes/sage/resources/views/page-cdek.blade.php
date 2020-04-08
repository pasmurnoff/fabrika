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
                С помощью встроенного сервиса отслеживания заказов транспортной компании «СДЭК», у вас есть возможно
                отслеживать
                точное местоположение вашего заказа прямо на нашем сайте.
            </div>
        </div>

        <div class="cdek">
            <form method="POST" class="cdek__form">
                <div class="cdek__wrap">
                    <div class="labelwrap cdek__labelwrap">
                        <label class="label">Введите трек код вашего заказа</label>
                        <input type="text" class="input cdek__input">
                        <div class="cdek__alert">
                            Введен некорректный номер
                        </div>
                    </div>
                    <input type="submit" class="submit cdek__submit" value="Отследить">
                </div>
            </form>
        </div>
    </div>
@endsection
