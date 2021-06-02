{{--
  Template Name: Носки на заказ
--}}
@extends('layouts.app')

@section('content')
    @php
        $page_id = get_the_ID();
    @endphp

    @include('components.price-filter.wrap', ['page_id' => $page_id])
    @include('components.blocks.zakaz.wrap', ['page_id' => $page_id])
    @include('components.banner.wrap', ['field_slug' => 'na_zakaz_banner1'])
    @include('components.individualsocks', ['page_id' => $page_id, 'classes' => 'pdng35'])
    @include('components.banner.wrap', ['field_slug' => 'na_zakaz_banner2'])

    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Виды чулочно-носочных изделий:</div>
        <div class="text mrgn35-bottom">
            Носки следки, носки низкие, носки средние, носки высокие, носки гольфы, чулки низкие, чулки высокие, чулки
            сетка
        </div>
        <img class="block-text__img" src="@asset('images/components/text/tipi_noskov_kolgotok_chulok_getr.jpg')"
             alt="Типы носков, колготок, чулок и гетр">
    </div>

    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Материалы</div>
        <div class="text">
            Мы используем только качественные материалы, обязательно проверяем сертификацию у всех поставщиков. Закупаем
            пряжу
            и синтетическую основу (резинки и укрепления пятки и мыска) у Российских и Европейских производителей. На
            всю нашу
            продукцию предоставляем сертификат качества. Можем помочь вам с разработкой и печатью этикеток для ваших
            носков,
            чтобы вам не пришлось тратиться на доставку.
        </div>
    </div>

    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Состав носков</div>
        <div class="text">
            Наши крошки на 80% состоят из качественного гребенного хлопка. Никаких примесей и хитростей. 15% полиамида –
            это
            укрепление для пятки и мыска и основа, которая позволяет носку свободно тянуться и комфортно облегать ногу.
            5% —
            эластан, это резиночки.
            <br/><br/>
            В нашем штате есть двухсистемные вязальные автоматы. Они позволяют сделать носок с минимальным количеством
            «бахромы» на изнанке. А так же вязать сложный жаккард. В этом случае процент полиамида будет немного выше, а
            сам
            носок заметно уплотнится.
        </div>
    </div>

    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Минимальный тираж и стоимость</div>
        <div class="text">
            Мы работаем на собственном оборудовании и готовы взяться за заказы всего от 100 пар.
            <br/><br/>
            Конечно, чтобы получить хорошую цену надо вязать большими партиями. Наши цены начинаются от 35 рублей/пара и
            напрямую зависят от общего объема заказа, количества на каждый артикул и сложности вязки.
        </div>
    </div>

    @include('components.block-additional.additional')

    @include('components.whyus.whyus')

    @include('components.workorder.workorder')

    @include('components.form.default', ['title' => pll__('Бесплатная консультация по поставке и производству')])

    @include('components.tables.table')

    @include('components.workyears.workyears')

    <div class="title title_large">{{ pll__('Доставляем носки, колготки и прочие грузы') }}:</div>
    <img class="partner-image" src="@asset('images/defaultpages/dostavka_noski_kolgotki.jpg')"
         alt="{{ pll__('Доставляем носки, колготки и прочие грузы') }}">

    @include('components.сommercial-offer.wrap', ['page_id' => get_the_ID()] )

@endsection
