{{--Template Name: Коммерческое предложение
--}}

@extends('layouts.app')

@section('content')
    @component('components.banner.banner', ['classes' => 'banner_bg', 'href' => '/noski-optom', 'href2' => '/na-zakaz'])
        @slot('title')
            Коммерческое предложение для оптовых<br>
            покупателей и дилеров Фабрики Носков
        @endslot
        @slot('text')
            Сегодня компания «Фабрика Носков» - производитель, оснащенный уникальным оборудованием последнего поколения,
            разработанным итальянской компанией «Autotex» и «Lonati», имеющими в мире единичные аналоги.
        @endslot
        @slot('icon')
            <img width="210" src="@asset('images/components/banners/Fabrika_Noskov_O_Kompanii.png')"
                 alt="Производство и продажа нносков по низким ценам">
        @endslot
        @slot('buttonText')
            Носки оптом
        @endslot
        @slot('buttonText2')
            Носки на заказ
        @endslot
    @endcomponent

    <div class="block-text pdng35">
        <div class="title title_large pdng15-bottom">Отрисовка дизайна носков</div>
        <div class="block-text__text block-text__text_padding-away">
            Техническая отрисовка эскиза клиента – 3000 рублей, в эту стоимость включена стоимость производства опытного
            образца (1 пара носков), доставка опытного образца оплачивается клиентом отдельно при получении. Каждое
            изменение
            в дизайне оплачивается отдельно.
        </div>
    </div>


    <div class="title title_large pdng15-bottom">Носки на заказ по вашему дизайну от 100 пар</div>
    <div class="block-text">
        <div class="block-text__text block-text__text_padding-away">
            Стоимость 100 пар гладких носков (классический вид носка)<br/>
            Состав: 80% хлопок, Эластан 17-20%, полиамид 2-3%,<br/>
            130 рублей за пару, сроки изготовления 14 календарных дней, после согласования дизайна;
        </div>
        <div class="threeimage">
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject">
                <img src="@asset('images/components/kommpred/IMG_0163.jpg')"
                     alt="Стоимость 100 пар гладких носков" itemprop="contentUrl">
            </div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject">
                <img src="@asset('images/components/kommpred/IMG_0159.jpg')"
                     alt="Стоимость 100 пар гладких носков" itemprop="contentUrl"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject">
                <img src="@asset('images/components/kommpred/IMG_0177.jpg')"
                     alt="Стоимость 100 пар гладких носков" itemprop="contentUrl"></div>


        </div>
    </div>


    <div class="title title_large pdng15-bottom">Носки на заказ по вашему дизайну от 1000 пар</div>
    <div class="block-text">
        <div class="block-text__text block-text__text_padding-away">
            Стоимость 1000 пар гладких носков (классический вид носка)<br/>
            Состав: 80% хлопок, Эластан 17-20%, полиамид 2-3%,<br/>
            65 рублей за пару, сроки изготовления от 20 — 30 календарных дней, после согласования дизайна;
        </div>
        <div class="threeimage">
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        src="@asset('images/components/kommpred/IMG_3259.jpg')" itemprop="contentUrl"
                        alt="Стоимость 1000 пар гладких носков"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        src="@asset('images/components/kommpred/IMG_3255.jpg')" itemprop="contentUrl"
                        alt="Стоимость 1000 пар гладких носков"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        src="@asset('images/components/kommpred/IMG_3201.jpg')" itemprop="contentUrl"
                        alt="Стоимость 1000 пар гладких носков"></div>
        </div>
    </div>


    <div class="title title_large pdng15-bottom">Спортивные носки на заказ по вашему дизайну от 100 пар</div>
    <div class="block-text">
        <div class="block-text__text block-text__text_padding-away">
            Стоимость 100 пар спортивных носков (с высокой резинкой)<br/>
            Состав: 80% хлопок, Эластан 17-20%, полиамид 2-3%,<br/>
            140 рублей за пару, сроки изготовления 14 календарных дней после согласования дизайна;
        </div>
        <div class="threeimage">
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        itemprop="contentUrl" src="@asset('images/components/kommpred/IMG_5469.jpg')"
                        alt="Стоимость 100 пар спортивных носков"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        itemprop="contentUrl" src="@asset('images/components/kommpred/IMG_0265.jpg')"
                        alt="Стоимость 100 пар спортивных носков"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        itemprop="contentUrl" src="@asset('images/components/kommpred/IMG_3092.jpg')"
                        alt="Стоимость 100 пар спортивных носков"></div>


        </div>
    </div>


    <div class="title title_large pdng15-bottom">Спортивные носки на заказ по вашему дизайну от 1000 пар</div>
    <div class="block-text">
        <div class="block-text__text block-text__text_padding-away">
            Стоимость 1000 пар спортивных носков (с высокой резинкой)<br/>
            Состав: 80% хлопок, Эластан 17-20%, полиамид 2-3%,<br/>
            75 рублей за пару, сроки изготовления от 20 — 30 календарных дней;
        </div>
        <div class="threeimage">
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        itemprop="contentUrl" src="@asset('images/components/kommpred/IMG_5473.jpg')"
                        alt="Стоимость 1000 пар спортивных носков"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        itemprop="contentUrl" src="@asset('images/components/kommpred/IMG_5477.jpg')"
                        alt="Стоимость 1000 пар спортивных носков"></div>
            <div class="threeimage__image" itemscope itemtype="http://schema.org/ImageObject"><img
                        itemprop="contentUrl" src="@asset('images/components/kommpred/IMG_9292.jpg')"
                        alt="Стоимость 1000 пар спортивных носков"></div>


        </div>
    </div>


    <div class="title title_large pdng15-bottom">Доставка носочно-чулочной продукции оптом</div>
    <div class="block-text">
        <div class="block-text__text block-text__text_padding-away">
            Доставка готовой продукции осуществляется за счет клиента, изготовитель обязуется доставить изделия до точки
            отправки транспортной компании.
        </div>
    </div>

    @include('components.socksdesign.socksdesign')
@endsection
