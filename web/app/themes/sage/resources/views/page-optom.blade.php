{{--Template Name: Носки оптом
--}}

@extends('layouts.app')

@section('content')
    <div class="defaultpage">
        @include('components.category-output.output-all', ['button' => 'Показать все носки', 'class' => 'mrgn15-bottom'])
        <div class="defaultpage__imgwrap">
            <img class="defaultpage__image" src="@asset('images/defaultpages/fabrikanoskov.ru_noski_optom.jpg')"
                 alt="Купить носки оптом">
        </div>

        <div class="block-text">
            <div class="block-text__text">
                Fabrikanoskov.ru всегда готова к сотрудничеству и рада новым партнерам. Ассортимент фабрики более 500
                моделей
                мужских, женских и детских носков и колгот. Для своей продукции мы выбираем лучшее сырье от мировых
                производителей.
            </div>
            <br/>
            <div class="block-text__text">
                Для постоянных клиентов предусмотрена система индивидуальных скидок
            </div>
            <br/>
            <div class="block-text__text">
                Минимальный заказ – 100 изделий одного дизайна и размера.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">Услуга индивидуального дизайна</div>
            <br/>
            <div class="block-text__text">
                Вы можете заказать свой <a class="block-text__link" href="/polozhenie-o-razrabotke-disajna-ot-2019.jpg">уникальный
                    дизайн</a>. Наши дизайнеры подготовят технический дизайн по вашим эскизам, а
                производственная часть изготовит опытный образец, который будет доставлен до вашего адреса. Стоимость
                пересылки
                входит в стоимость и распространяется только на города РФ.
                <br/><br/>
                Носки по вашему макету выпускаются в количестве от 100 шт. на каждый дизайн/цвет. Стоимость разработки
                технического макета и образца — 2000 руб.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">Сроки разработки образцов</div>
            <br/>
            <div class="block-text__text">
                От 3 до 7 дней, в зависимости от сложности. Сроки производства носков с логотипом, при наличии пряжи на
                складе
                1- 4 недели. Если пряжу нужно заказывать у поставщика, срок изготовления увеличивается до 6-14 недель.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">
                Дополнительно предлагаем <a class="block-text__link" href="/etiketka-i-upakovka-noskov">услугу
                    упаковки</a> с
                учетом ваших требований и пожеланий.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">
                Для крупных оптовых покупателей
            </div>
            <br/>
            <div class="block-text__text">
                Отгрузка товара зависит от загруженности сотрудников склада, менеджеров и наличия товара на складе.
                Заказ
                собирается не больше 5-7 рабочих дней. Перед праздниками и в сезон, сроки отгрузки немного
                увеличиваются. Но
                наша команда старается сокращать сроки и отгружать заказы быстрее.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">
                Помощь со стороны наших менеджеров во время выбора компании, которая будет осуществлять <a
                        class="block-text__link" href="/uslovija-dostavki">доставку товара</a>
                непосредственно в ваш регион проживания
            </div>
            <br/>
            <div class="block-text__text">
                Можно быть уверенным в том, что товар не потеряется в пути, а время доставки не увеличится из-за
                недостаточно
                профессиональной работы сотрудников службы доставки товаров. Доставка со склада по всей России.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">
                Юридические лица и индивидуальные предприниматели
            </div>
            <br/>
            <div class="block-text__text">
                <a class="block-text__link" href="/konstruktor-zakaza-noskov">Создаете заявку на сайте</a>, указывая
                форму
                оплаты и способ доставки и получаете от менеджера подтверждение того,
                что заказ принят, сумму к оплате и счет для оплаты. Подтвержденный заказ можно оплатить в течении 5
                суток. На
                этот срок бронируется товар на складе. Отгружаем товар НЕ ПОЗДНЕЕ 5-7 СУТОК с момента поступления денег
                на наш
                счет. Предоставляем полный пакет документов: договор, счет, сертификаты, накладные. Напоминаем
                плательщикам
                НДС,
                что мы работаем по упрощенной системе налогообложения — без НДС.
            </div>
            <br/>
            <div class="block-text__text block-text__text_bold">
                <a class="block-text__link block-text__link_bold" href="/uslovija-oplaty">Способы оплаты</a> для
                физических
                лиц
            </div>
            <ul class="block-text__list">
                <li class="block-text__point">Оплата через платежный терминал на сайте</li>
            </ul>

            <div class="block-text__text">
                Если у Вас возникли вопросы, можете их задать нам на электронную почту:
                <a class="block-text__link" href="mailto:mail@fabrikanoskov.ru">mail@fabrikanoskov.ru</a> или
                проконсультироваться по бесплатному телефону <a class="block-text__link" href="tel:88004441156">8 800
                    444 11
                    56</a>
            </div>
        </div>

        <div class="block-text">
            <a href="/kommercheskoe_predlozhenie_fabrikanoskov.ru.pdf" class="link-with-icon">
                @include('icon::pdf')
                Коммерческое предложение на носки и колготки оптом от fabrikanoskov.ru
            </a>
        </div>
    </div>

    @include('components.whyus.whyus')

    <div class="work-order mrgn50">
        <div class="title title_large pdng35-bottom">
            Порядок работы со склада
        </div>
        <ol class="text work-order__list">
            <li>Поступление запроса по необходимому артикулу, размеру и цвету</li>
            <li>Подтверждение наличия на складе, если необходимый артикул отсутствуют на складе в нужном количестве,
                производителем предлагаются условия производства
            </li>
            <li>Заключение договора</li>
            <li>Оплата стоимости тиража</li>
            <li>Отгрузка или производство тиража</li>
            <li>Доставка</li>
        </ol>
    </div>
@endsection
