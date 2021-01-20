{{--Template Name: Носки оптом
--}}

@extends('layouts.app')

@section('content')
  <div class="defaultpage">
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
    @include('components.category-output.all.wrap', ['overflow' => ''])

    <div class="defaultpage__imgwrap" itemscope itemtype="http://schema.org/ImageObject">
      <img class="defaultpage__image" itemprop="contentUrl"
        src="@asset('images/defaultpages/fabrikanoskov.ru_noski_optom.jpg')" alt="Купить носки оптом">
    </div>

    <div class="block-text">
      <h4 class="title title_large pdng15-bottom">Купить носки оптом от производителя дешево</h4>
      <p class="block-text__text">Мы готовы к сотрудничеству и будем рады обрести новых партнеров. Ассортимент нашей фабрики составляет более 500 для мужчин, женщин и детей.</p>
      <p class="block-text__text">Минимальная партия на заказ - 1000 пар одного дизайна и размера.</p>
      <br />
      <h5 class="title title_middle pdng10-bottom">Услуга индивидуального дизайна</h5>
      <p class="block-text__text">Бывает так, что на сайте не оказалось изделия, которое вы искали. Не беда! Мы свяжем для Вас носки с индивидуальным дизайном – свяжитесь с нашими менеджерами и они подскажут, как купить носки оптом от производителя. Наши дизайнеры подготовят технический дизайн по вашим эскизам, а производственная часть изготовит опытный образец, который будет доставлен до вашего адреса.</p>
      <p class="block-text__text">Носки по вашему макету выпускаются в количестве от 100 шт. на каждый дизайн/цвет. Стоимость разработки технического макета и образца — 3000 руб.</p>
      <br />
      <h5 class="title title_middle pdng10-bottom">Сколько времени занимает изготовление</h5>
      <p class="block-text__text">Чтобы изготовить образец, потребуется от 3 до 7 дней в зависимости от сложности дизайна. </p>
      <p class="block-text__text">Сроки производства носков варьируется от 1- 4 недель до 6-14, в зависимости от наличия необходимой пряжи на складе фабрики.</p>
      <p class="block-text__text">Предупреждаем, что в период праздников сроки отгрузки могут увеличиться.</p>
      <br>
      <h5 class="title title_middle pdng10-bottom">Упаковка</h5>
      <p class="block-text__text">Если ваш заказ нужно упаковать определенным образом, сообщите нам об этом. Мы сделаем нужную Вам этикетку и упакуем товар так, как Вы этого хотите.</p>
      <br />
      <h5 class="title title_middle pdng10-bottom">Юридические лица и индивидуальные предприниматели</h5>
      <p class="block-text__text">Воспользуйтесь специальной форой оформления заявки на сайте, чтобы заказать носки оптом дешево. Укажите в ней как вы хотите оплатить заказ и каким образом будет удобно его получить. После отправки заявки с вами свяжется ваш персональный менеджер, чтобы подтвердить заказ.</p>
      <p class="block-text__text">Подтвержденный заказ бронируется на складе на 5 дней, в течение которых он должен быть оплачен. Заказ отгружается НЕ ПОЗДНЕЕ 7 СУТОК с момента поступления оплаты.</p>
      <p class="block-text__text">Мы работаем по упрощенной системе налогообложения, т.е Вам не придется платить НДС.</p>
      <p class="block-text__text">По заказу предоставляется полный пакет документов, в который входят:</p>
      <ul class="block-text__list">
        <li class="block-text__point">Договор</li>
        <li class="block-text__point">Счет</li>
        <li class="block-text__point">Сертификаты</li>
        <li class="block-text__point">Накладные</li>
      </ul>
      <br />
      <h5 class="title title_middle pdng10-bottom">Способ оплаты для физических лиц</h5>
      <ul class="block-text__list">
        <li class="block-text__point">Оплата через платежный терминал на сайте</li>
      </ul>
      <br />
      <p class="block-text__text pdng35-bottom">Если у Вас возникли вопросы, можете их задать нам на электронную почту: <a href="mailto:{!! get_option('admin_email') !!}">{!! get_option('admin_email') !!}</a> или проконсультироваться по бесплатному телефону <a href="tel:88004441156">8 800 444 11 56</a></p>
      <h4 class="title title_large pdng15-bottom">Почему Fabrikanoskov.ru?</h4>
      <h5 class="title title_middle pdng5-bottom">Качество</h5>
      <p class="block-text__text">Мы хотим, чтобы наши носки ассоциировались с комфортом и уютом. Поэтому мы закупаем сырье из Турции, Узбекистана, Италии и Египта, испытываем его в начале производственного цикла, а готовые изделия проходят ручной контроль качества.</p>
      <br />
      <h5 class="title title_middle pdng5-bottom">Цена</h5>
      <p class="block-text__text">Мы вяжем носки на собственной фабрике. Поэтому приобретая носки у нас вы покупаете модные носки оптом от производителя без посредников.</p>
      <br />
      <h5 class="title title_middle pdng5-bottom">Доставка</h5>
      <p class="block-text__text">Бесплатно доставим до любой транспортной компании.</p>
      <br />
      <h5 class="title title_middle pdng5-bottom">Размерный ряд включен</h5>
      <p class="block-text__text">В минимальный тираж на один дизайн можно включить размерную сетку без увеличения стоимости заказа.</p>
    </div>

    <div class="block-text">
      <a href="/kommercheskoe_predlozhenie_fabrikanoskov.ru.pdf" class="link-with-icon">
        @include('icon::pdf')
        Коммерческое предложение на носки и колготки оптом от fabrikanoskov.ru
      </a>
    </div>
  </div>

  @include('components.whyus.whyus')
@endsection
