{{--
Template Name: Контакты
--}}

@extends('layouts.app')
@section('content')
    @include('components.writeus.writeus')
    @component('components.form.elements.form-item',
        ['class' => 'mrgn35-top', 'title' => 'Написать директору ООО "Фабрика Носков"', 'titleClass' => 'title_huge', 'textClass' => 'pdng15-top pdng35-bottom'])
        @slot('text')
            Хотите связаться с директором? Отправьте сообщение с подробным описанием по форме ниже.
        @endslot
        @slot('content')
            <form class="form" method="post">
                <div class="form_single">
                    <div class="form__col form__col_double">
                        <div class="dualrow">
                            @include('components.form.elements.input', [
                                  'positionClass' => 'labelwrap_dual',
                                  'type' => 'tel',
                                  'name' => 'Телефон',
                                  'attr' => 'required',
                                  'label' => 'Мобильный телефон*'
                                ])

                            @include('components.form.elements.input', [
                                'positionClass' => 'labelwrap_dual',
                                'type' => 'text',
                                'name' => 'Имя',
                                'attr' => 'required',
                                'label' => 'Ваше имя*'
                              ])
                        </div>
                        <div class="dualrow">
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'email',
                           'name' => 'Email',
                           'attr' => 'required',
                           'label' => 'Электронная почта*'
                         ])
                            @include('components.form.elements.input', [
                           'positionClass' => 'labelwrap_dual',
                           'type' => 'text',
                           'name' => 'Тема',
                           'label' =>'Тема письма'
                         ])
                        </div>
                    </div>
                    <div class="form__col form__col_double">
                        @include('components.form.elements.textarea', [
                              'textareaClass' => 'textarea_large',
                              'positionClass' => 'labelwrap_single textarea_large',
                              'name' => 'Описание',
                              'label' => 'Описание вашего вопроса'
                          ])
                    </div>
                </div>
                <input type="hidden" name="director">
                @include('components.form.elements.privacy')
            </form>
        @endslot
    @endcomponent

    <div class="title title_large">Горячая линия</div>
    <div class="pdng15 text">
        <span class="text_bold">Телефон:</span> <a class="text_link" href="tel:88004441156">8 800 444 11 56</a><br/>
        <span class="text_bold">Почта:</span> <a class="text_link" href="mailto@mail@fabrikanoskov.ru">mail@fabrikanoskov.ru</a>
    </div>

    <div class="points points_contact mrgn15-top">
        <div class="points__items">
            <div class="points__title text_grey text_bold">Москва</div>
            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Москва</span>, <span
                        class="points__city">Москва</span>, <span class="points__street">ул. Сергия Радонежского</span>,
                <span class="points__house">29/31</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:moskva@fabrikanoskov.ru">moskva@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-18:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Санкт-Петербург</div>
            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Санкт-Петербург</span>, <span
                        class="points__city">Санкт-Петербург</span>, <span
                        class="points__street">пр-т Коломяжский</span>, <span class="points__house">28, корп.2</span>,
                <span class="points__office">14-Н </span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link"
                   href="mailto:sankt-peterburg@fabrikanoskov.ru">sankt-peterburg@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 09:00-21:00</span> <span>Сб-Вс 10:00-19:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Новосибирск</div>
            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Новосибирская обл.</span>,
                <span class="points__city">Новосибирск</span>, <span class="points__street">пр-т Красный</span>, <span
                        class="points__house">99</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:novosibirsk@fabrikanoskov.ru">novosibirsk@fabrikanoskov.ru</a>
            </div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Екатеринбург</div>
            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Свердловская обл.</span>,
                <span class="points__city">Екатеринбург</span>, <span class="points__street">ул. Белинского</span>,
                <span class="points__house">232</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:ekaterinburg@fabrikanoskov.ru">ekaterinburg@fabrikanoskov.ru</a>
            </div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Нижний Новгород</div>
            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Нижегородская обл.</span>,
                <span class="points__city">Нижний Новгород</span>, <span class="points__street">ул. Гордеевская</span>,
                <span class="points__house">7</span>, <span class="points__office">117</span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:nizhniynovgorod@fabrikanoskov.ru">nizhniynovgorod@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Казань</div>
            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Татарстан респ.</span>, <span
                        class="points__city">Казань</span>, <span class="points__street">ул. Галиаскара Камала</span>,
                <span class="points__house">18</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:kazan@fabrikanoskov.ru">kazan@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Челябинск</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Челябинская обл.</span>, <span
                        class="points__city">Челябинск</span>, <span class="points__street">ул. Пионерская</span>, <span
                        class="points__house">3</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:chelyabinsk@fabrikanoskov.ru">chelyabinsk@fabrikanoskov.ru</a>
            </div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб-Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Омск</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Омская обл.</span>, <span
                        class="points__city">Омск</span>, <span class="points__street">ул. Новокирпичная</span>, <span
                        class="points__house">3/1</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:omsk@fabrikanoskov.ru">omsk@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Самара</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Самарская обл.</span>, <span
                        class="points__city">Самара</span>, <span class="points__street">ул. Фасадная</span>, <span
                        class="points__house">11</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:samara@fabrikanoskov.ru">samara@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 09:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Ростов-на-Дону</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Ростовская обл.</span>, <span
                        class="points__city">Ростов-на-Дону</span>, <span
                        class="points__street">ул. Республиканская</span>, <span class="points__house">84</span><span
                        class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link"
                   href="mailto:rostov-na-donu@fabrikanoskov.ru">rostov-na-donu@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Уфа</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Башкортостан респ.</span>,
                <span class="points__city">Уфа</span>, <span class="points__street">ул. Дагестанская</span>, <span
                        class="points__house">12</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:ufa@fabrikanoskov.ru">ufa@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Красноярск</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Красноярский край</span>,
                <span class="points__city">Красноярск</span>, <span class="points__street">ул. Борисова</span>, <span
                        class="points__house">34</span>, <span class="points__office">97</span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:krasnoyarsk@fabrikanoskov.ru">krasnoyarsk@fabrikanoskov.ru</a>
            </div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Пермь</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Пермский край</span>, <span
                        class="points__city">Пермь</span>, <span class="points__street">ул. Екатерининская</span>, <span
                        class="points__house">116</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:perm@fabrikanoskov.ru">perm@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб-Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Воронеж</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Воронежская обл.</span>, <span
                        class="points__city">Воронеж</span>, <span class="points__street">ул. 9 Января</span>, <span
                        class="points__house">270Б</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:voronezh@fabrikanoskov.ru">voronezh@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб-Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Волгоград</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Волгоградская обл.</span>,
                <span class="points__city">Волгоград</span>, <span class="points__street">ул. 8-й Воздушной Армии</span>,
                <span class="points__house">28а</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:volgograd@fabrikanoskov.ru">volgograd@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Краснодар</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Краснодарский край</span>,
                <span class="points__city">Краснодар</span>, <span class="points__street">ул. Коммунаров</span>, <span
                        class="points__house">31</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:krasnodar@fabrikanoskov.ru">krasnodar@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Саратов</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Саратовская обл.</span>, <span
                        class="points__city">Саратов</span>, <span class="points__street">ул. Бахметьевская</span>,
                <span class="points__house">20/24</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:saratov@fabrikanoskov.ru">saratov@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Тюмень</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Тюменская обл.</span>, <span
                        class="points__city">Тюмень</span>, <span class="points__street">ул. Николая Зелинского</span>,
                <span class="points__house">23</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:tyumen@fabrikanoskov.ru">tyumen@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб-Вс 10:00-16:00</span></div>
        </div>
        <div class="points__items">
            <div class="points__title text_grey text_bold">Тольятти</div>

            <div class="points__address points__item">
                <div class="points__icon">@include('icon::country.city.map-marker')</div>
                <span class="points__country">Россия</span>, <span class="points__region">Самарская обл.</span>, <span
                        class="points__city">Тольятти</span>, <span class="points__street">ул. Ворошилова</span>, <span
                        class="points__house">69</span><span class="points__office"></span></div>
            <div class="points__phone points__item">
                <div class="points__icon">@include('icon::country.city.phone')</div>
                <a class="points__link" href="tel:88004441156">8 800 444 11 56</a></div>
            <div class="points__mail points__item">
                <div class="points__icon">@include('icon::country.city.envelope')</div>
                <a class="points__link" href="mailto:tolyatti@fabrikanoskov.ru">tolyatti@fabrikanoskov.ru</a></div>
            <div class="points__work points__item">
                <div class="points__icon">@include('icon::country.city.clock')</div>
                <span>Пн-Пт 10:00-20:00</span> <span>Сб 10:00-16:00</span> <span>Вс 10:00-16:00</span></div>
        </div>
    </div>

    {{-- @php bullshit1() @endphp--}}
    {{--@php bullshit2() @endphp--}}
@endsection
