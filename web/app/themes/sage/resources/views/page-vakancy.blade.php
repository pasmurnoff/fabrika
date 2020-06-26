{{--Template Name: Вакансии
--}}

@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        <div class="defaultpage__imgwrap">
            <img class="defaultpage__image" src="@asset('images/defaultpages/vakancii_fabrika_noskov.jpg')"
                 alt="Вакансии на фабрику носков">
        </div>
        <div class="block-text">
            <div class="block-text__text">
                «Фабрика носков» всегда ищет высококлассных специалистов в свою команду по следующим направлениям:
            </div>
            <ul class="block-text__list">
                <li class="block-text__point">Специалист по продажам</li>
                <li class="block-text__point">Водитель</li>
                <li class="block-text__point">Бухгалтер</li>
                <li class="block-text__point">Дизайнер</li>
                <li class="block-text__point">Грузчик</li>
                <li class="block-text__point">Логист</li>
                <li class="block-text__point">Специалист отдела закупок</li>
                <li class="block-text__point">Менеджер по продажам</li>
                <li class="block-text__point">Региональный менеджер</li>
                <li class="block-text__point">Директор по продажам</li>
                <li class="block-text__point">Креативщик/Рекламщик</li>
            </ul>
            <div class="block-text__text">
                Официальное трудоустройство<br/>
                Официальная заработная плата<br/>
                Полис добровольного страхования<br/>
                Оплата сотовой связи<br/>
                Свое резюме в электронном виде, просим присылать на нашу электронную почту mail@fabrikanoskov.ru
            </div>
        </div>
    </div>
@endsection
