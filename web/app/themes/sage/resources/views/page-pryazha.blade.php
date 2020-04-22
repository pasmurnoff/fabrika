{{--Template Name: Пряжа
--}}

@extends('layouts.app')

@section('content')
    @component('components.banner.banner', ['href' => '/noski-optom', 'buttonText' => 'Носки оптом', 'href2' => '/na-zakaz', 'buttonText2' => 'Носки на заказ'])
        @slot('title')
            Наличие высококачественного основного сырья
        @endslot

        @slot('text')
            Лаборатория красильной разрабатывает цвета любой сложности, производит анализ на содержание химических веществ, а также разрабатывать рецептуры для получения оптимального результата при крашении пряжи
        @endslot

        @slot('icon')
            <img width="210" src="@asset('images/components/banners/pryazha/fabrika-noskov-prazha.png')"
                 alt="Производство и продажа носков по низким ценам">
        @endslot

    @endcomponent
    <div class="pryazha__blocks mrgn35 pdng35-top">
        <div class="block-text pryazha__block">
            <div class="pryazha__icon">
                @include('icon::pryazha.rocket')
            </div>
            <div class="pryazha__item">
                <div class="title title_middle pdng5-bottom">Производительность</div>
                <div class="text"> Собственные мощности позволяют осуществлять крашение пряжи до 2 тонн в сутки.</div>
            </div>
        </div>
        <div class="block-text pryazha__block">
            <div class="pryazha__icon">
                @include('icon::pryazha.palette')
            </div>
            <div class="pryazha__item">
                <div class="title title_middle pdng5-bottom"> Цвета любой сложности</div>
                <div class="text">Цвета любой сложности по базовой карте предприятия, а также текстильному пантону
                    (PANTONE
                    TPX
                    и TCX)
                </div>
            </div>
        </div>
        <div class="block-text pryazha__block">
            <div class="pryazha__icon">
                @include('icon::pryazha.swatchbook')
            </div>
            <div class="pryazha__item">
                <div class="title title_middle pdng5-bottom">Заданное количество сложений</div>
                <div class="text">В любой вариации, согласно требованию заказчика</div>
            </div>
        </div>
        <div class="block-text pryazha__block">
            <div class="pryazha__icon">
                @include('icon::pryazha.paint-roller')
            </div>
            <div class="pryazha__item">
                <div class="title title_middle pdng5-bottom">Красильное оборудование</div>
                <div class="text">Современный технопарк. Загрузки красильных аппаратов — 100, 200, 300, 400, 600, 1200
                    кг.
                </div>
            </div>
        </div>
    </div>

    @component('components.form.default', ['title' => 'Проконсультируйтесь с нами'])
        @slot('text')
            Наши специалисты подробно расскажут вам о вариациях товара, а также об оборудовании
        @endslot
    @endcomponent
@endsection
