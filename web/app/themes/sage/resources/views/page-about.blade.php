{{--
Template Name: О фабрике
--}}

@extends('layouts.app')
@section('content')
    @component('components.banner.banner', ['href' => '/noski-optom', 'buttonText' => 'Носки оптом', 'href2' => '/na-zakaz', 'buttonText2' => 'Носки на заказ'])
        @slot('title')
            Производство и продажа носков<br/>
            по низким ценам
        @endslot

        @slot('text')
            Сегодня компания «Фабрика Носков» - производитель, оснащенный уникальным оборудованием последнего поколения,
            разработанным итальянской компанией «Autotex» и «Lonati», имеющими в мире единичные аналоги.
        @endslot

        @slot('icon')
            <img width="210" src="@asset('images/components/banners/Fabrika_Noskov_O_Kompanii.png')"
                 alt="Производство и продажа носков по низким ценам">
        @endslot

    @endcomponent

    <div class="block-text pdng35">
        <h2 class="title title_large mrgn15-bottom">Фабрика носков</h2>
        <div class="block-text__text">
            Мы рады приветствовать вас на сайте нашей носочной фабрики. Все действия в одном клике. 90% клиентов
            работают с нами полностью в электронном виде и никогда не приезжали в наш офис.
            <br/><br/>
            В ассортименте нашей фабрики Вы найдете: мужские носки, женские носки, детские носки от самых простых до
            носков
            всех цветов радуги. Помимо цвета наши носки различаются составом от 100% хлопка до носков из бамбука, льна.
            Собственное красильное оборудование позволяет предложить широкую палитру расцветок, а современное вязальное
            оборудование — создать уникальный рисунок на колготках и носках под ваш заказ.
            <br/>
            Предприятие на российском рынке уже более 60 лет. Но, не смотря на столь солидный возраст, оно ориентировано
            на
            покупателя, имеющего представление о модных тенденциях. Наши изделия носят все, кто ценит стиль, качество и
            комфорт.
            <br/><br/>
            Весь выпускаемый ассортимент производится в соответствии с ГОСТом и обладает всеми необходимыми
            сертификатами.
            <br/>
            Фабрика владеет собственной производственной площадкой, общей площадью 10 000 кв.м. в находящимися в
            республиках
            Татарстан и Башкортостан.
            <br/>
            Максимальная производственная мощность составляет 450 000 пар в месяц. Складской запас составляет более 1
            000 000
            пар.
            <br/>
            Производственный процесс состоит из нескольких этапов контроля качества: от испытания сырья в начале
            производственного цикла до ручного контроля качества готового изделия.
            <br/><br/>
            Современное оборудование и высокая квалификация специалистов позволяет воплощать в жизнь самые невероятные
            идеи.
            Производственный цикл выстроен только из высококачественного сырья и профессионального оборудования марки
            Lonati.
            <br/>
            Являясь производителем своей продукции, мы предлагаем нашим партнерам выгодные цены, без ущерба качеству.
            <br/>
            Широкий модельный ряд выпускаемых на предприятии изделий учитывает потребности покупателей и покупательниц
            всех
            возрастов, создаются коллекции для всех сезонов года, климатических особенностей различных регионов страны.
        </div>
    </div>
    <div class="block-text">
        <div class="block-text__text block-text__text_bold">Ассортимент компании уже сегодня насчитывает более 500
            наименований, включая в себя:
        </div>

        <ul class="block-text__list">
            <li class="block-text__point">
                мужскую линию моделей: зимние, летние, межсезонные модельные разработки, спортивные носки и следки,
                включая
                изделия разного класса — от бюджетного до категории «люкс» для самых требовательных покупателей;
            </li>
            <li class="block-text__point">
                женскую модельную линию: зимние, летние, межсезонные носки, колготки и гольфы, предлагая широкий спектр
                расцветок, орнаментов, стильных решений;
            </li>
            <li class="block-text__point">
                детскую модельную линию: от «софт 3Д» для новорожденных до детских удобных, натуральных и безопасных
                колготок,
                стильных носочков и гольфов всех нужных размеров, цветов и температурных характеристик;
            </li>
        </ul>

        <div class="block-text__text">
            <br/>Компания может изготавливать продукцию и по индивидуальному заказу, начиная с разработки дизайна
            изделия и
            заканчивая его упаковкой.
            <br/>
            Коллектив фабрики насчитывает 400 сотрудников.
        </div>
    </div>

    <div class="block-text">
        <div class="block-text__text block-text__text_bold">Принципы:</div>
        <ul class="block-text__list">
            <li class="block-text__point">
                Мы не посредники, а производители! Это позволит Вам приобрести товары наших брендов на максимально
                выгодных
                условиях!
            </li>
            <li class="block-text__point">
                Постоянно в наличии более 500 товарных позиций!
            </li>
            <li class="block-text__point">
                Возможность изготовления продукции под вашей СТМ, в том числе и собственные дизайны!
            </li>
            <li class="block-text__point">
                Индивидуальная упаковка каждой единицы продукции!
            </li>
            <li class="block-text__point">
                Возможен заказ товара онлайн и оплата картой на сайте компании.
            </li>
            <li class="block-text__point">
                Вам предоставляется персональный менеджер, с которым можно связаться в любое время!
            </li>
            <li class="block-text__point">
                Мы разработали для наших будущих партнеров систему лояльности, которая позволит в сжатые сроки стать
                лидером
                продаж!
            </li>
            <li class="block-text__point">
                Наша система скидок дает возможность поддерживать конкурентный уровень цен в тяжелых рыночных условиях!
            </li>
        </ul>
    </div>

    <div class="forwhom forwhom_padding-bottom">
        <div class="forwhom__item">
            <div class="title title_middle forwhom__title">Коммерческим организациям</div>
            <div class="forwhom__sep"></div>
            <div class="forwhom__text">Работаем по безналичному расчёту без НДС. Выставляем счёт и образец договора, ваша
                организация переводит деньги на наш расчётный счёт.
            </div>
        </div>
        <div class="forwhom__item">
            <div class="title title_middle forwhom__title">Государственным учреждениям</div>
            <div class="forwhom__sep"></div>
            <div class="forwhom__text">Мы зарегистрированы на электронных площадках. Можем участвовать в государственных
                аукционах, тендерах.
            </div>
        </div>
        <div class="forwhom__item">
            <div class="title title_middle forwhom__title">Физическим лицам</div>
            <div class="forwhom__sep"></div>
            <div class="forwhom__text">Выставляем счёт на физическое лицо. Деньги можете перевести на наш расчётный счёт
                через
                банк либо электронным платежом со своей банковской карты.
            </div>
        </div>
    </div>

    @include('components.workyears.workyears')
@endsection
