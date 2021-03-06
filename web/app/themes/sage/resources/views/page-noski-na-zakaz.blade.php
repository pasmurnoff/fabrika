{{--
Template name: Носки на заказ, отдельная страница
--}}
        <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel="shortcut icon" href="{{-- need favicon --}}" type="image/x-icon">
    <link href="@asset('styles/zakaz.css')" rel="stylesheet" type='text/css'>
    <meta property="og:title" content="Фабрика носков"/>
    <meta property="og:description" content="Купить носки оптом и в розницу"/>
    <meta property="og:url" content="@php echo get_home_url() @endphp"/>
    <meta property="og:image" content=""/>
    <link rel="alternate" href="https://www.fabrikanoskov.ru/zakazat-noski/" hreflang="ru" />
    <link rel="alternate" href="https://www.socksmanufacturer.com/make-an-order/" hreflang="en" />
    @php
        $ajax_href = ['ajax_url' => get_permalink()];
    echo
    '<script type="text/javascript">window.wp_data = ',
    json_encode($ajax_href),
    ';</script>'; @endphp
    @include('components.noski-zakaz.form')
</head>

<body>
<div class="container preload">
    <main class="custom__socks">
        <section class="custom__welcome">
            <div class="custom__welcome-wrap">
                <h1 class="custom__title">{!! get_field( "ordering_title" ) !!}</h1>
                <p class="custom__text">{!! get_field( "ordering_descr" ) !!}</p>
            </div>
        </section>
        <section class="custom__comunication">
            <p class="custom__communication-title">{!! get_field("ordering_new") !!}</p>
            <form id="form" class="custom__form" method="POST">
                <div class="custom__items">
                    @php $i = 1; @endphp
                    @foreach(get_field("ordering_types") as $item)
                        <div class="custom__input-wrapper">
                            <input class="custom__checkbox" type="checkbox"
                                   id="style-{{ $i }}" value="{{ $item['name'] }}"
                                   name="stylesocks[]" {{ $item['default'] ? 'checked' : ''  }}>
                            <label for="style-{{ $i }}" class="custom__item">{!! $item['name'] !!}</label>
                        </div>
                        @php $i++; @endphp
                    @endforeach
                </div>
                <div class="custom__fields">
                    <div class="custom__field">
                        <label for="company" class="custom__field-name">{!! pll__('Название компании') !!}</label>
                        <input id="company" name="company" class="custom__field-input" type="text">
                    </div>
                    <div class="custom__field">
                        <label for="budget" class="custom__field-name">{!! pll__('Приблизительный бюджет') !!}</label>
                        <input id="budget" name="budget" class="custom__field-input" type="text">
                    </div>
                    <div class="custom__field">
                        <label for="email" class="custom__field-name">{!! pll__('Email') !!}</label>
                        <input id="email" name="email" class="custom__field-input" type="email" required>
                    </div>
                    <div class="custom__field">
                        <label for="phone" class="custom__field-name">{!! pll__('Ваш телефон') !!}</label>
                        <input id="phone" name="phone" class="custom__field-input" type="tel" required>
                    </div>
                    <div class="custom__field">
                        <label for="name" class="custom__field-name">{!! pll__('Имя') !!}</label>
                        <input id="name" name="name" class="custom__field-input" type="text" required>
                    </div>
                </div>
                <button type="submit" class="design__custom-btn">{!! pll__('Отправить заявку') !!}</button>
            </form>
        </section>
    </main>
    <section class="custom__background">
        <div class="custom_bg-wrapper"></div>
        <div class="custom__bg-img"></div>
    </section>
    <a class="custom__cross" href="<?php echo get_home_url(); ?>">
        <svg class="cross__svg" xmlns="http://www.w3.org/2000/svg" width="12.766" height="12.766"
             viewBox="0 0 12.766 12.766">
            <g id="Group_2" data-name="Group 2" transform="translate(-92.86 -245.088)">
                <g id="Group_1" data-name="Group 1" transform="translate(0 2.228)">
                    <line id="Line_1" data-name="Line 1" x2="12.059" y2="12.059"
                          transform="translate(93.213 243.213)" fill="none" stroke="#fff" stroke-width="1"/>
                    <line id="Line_2" data-name="Line 2" x2="12.059" y2="12.059"
                          transform="translate(105.272 243.213) rotate(90)" fill="none" stroke="#fff"
                          stroke-width="1"/>
                </g>
            </g>
        </svg>
    </a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="@asset('scripts/zakaz.js')"></script>

</body>
</html>