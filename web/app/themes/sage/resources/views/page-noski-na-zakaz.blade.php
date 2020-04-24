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
                <h1 class="custom__title">Носки на заказ по вашему дизайну</h1>
                <p class="custom__text">На нашей фабрике можно заказать не только носки изготовленные нашими дизайнера,
                    но и носки с логотипом или в фирменной стилистике бренда и мероприятия для самых разных нужд.
                </p>
                <p class="custom__text">Мерч,
                    промо, сувениры, подарки, на продажу для расширения ассортимента - носки зарекомендовали себя как
                    отличный инструмент для самых различных целей.</p>
            </div>
        </section>
        <section class="custom__comunication">
            <p class="custom__communication-title">Новый проект</p>
            <form id="form" class="custom__form" method="POST">
                <div class="custom__items">
                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-1" value="Спортивные"
                               name="stylesocks[]" checked="checked">
                        <label for="style-1" class="custom__item">Спортивные</label>
                    </div>

                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-2" value="Классические"
                               name="stylesocks[]">
                        <label for="style-2" class="custom__item ">Классические</label>
                    </div>

                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-3" value="Подарочные"
                               name="stylesocks[]">
                        <label for="style-3" class="custom__item ">Подарочные</label>
                    </div>


                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-4" value="С текстом"
                               name="stylesocks[]">
                        <label for="style-4" class="custom__item ">С текстом</label>
                    </div>

                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-5" value="С логотипом"
                               name="stylesocks[]">
                        <label for="style-5" class="custom__item ">С логотипом</label>
                    </div>

                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-6" value="Из мультфильма"
                               name="stylesocks[]">
                        <label for="style-6" class="custom__item ">Из мультфильма</label>
                    </div>

                    <div class="custom__input-wrapper">
                        <input class="custom__checkbox" type="checkbox"
                               id="style-7" value="Другое"
                               name="stylesocks[]">
                        <label for="style-7" class="custom__item ">Другое</label>
                    </div>

                </div>
                <div class="custom__fields">
                    <div class="custom__field">
                        <label for="company" class="custom__field-name">Название компании</label>
                        <input id="company" name="company" class="custom__field-input" type="text">
                    </div>
                    <div class="custom__field">
                        <label for="budget" class="custom__field-name">Приблизительный бюджет</label>
                        <input id="budget" name="budget" class="custom__field-input" type="text">
                    </div>
                    <div class="custom__field">
                        <label for="email" class="custom__field-name">Email</label>
                        <input id="email" name="email" class="custom__field-input" type="email" required>
                    </div>
                    <div class="custom__field">
                        <label for="phone" class="custom__field-name">Ваш телефон</label>
                        <input id="phone" name="phone" class="custom__field-input" type="tel" required>
                    </div>
                    <div class="custom__field">
                        <label for="name" class="custom__field-name">Имя</label>
                        <input id="name" name="name" class="custom__field-input" type="text" required>
                    </div>
                </div>
                <button type="submit" class="design__custom-btn">Отправить заявку</button>
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