{{--
  Template Name: Носки на заказ
--}}
@extends('layouts.app')

@section('content')
    @include('components.price-filter.wrap')
    @include('components.blocks.zakaz.wrap')
    <div class="block-text">
        <div class="text">
            Наша фабрика может отвязать для вас носки на заказ. Любых расцветок и дизайнов. У нас своё производство и
            возможны
            даже минимальные партии. Мы используем дорогое европейское оборудование и качественный гребенной хлопок. Мы
            можем
            сделать носки с вашим логотипом или в фирменном стиле вашей футбольной команды. Носки с вашим собственным
            уникальным
            и неповторимым дизайном. Мы открыты к коллаборациям с другими брендами.
        </div>
    </div>
    @component('components.banner.banner', ['href' => '/konstruktor-zakaza-noskov', 'classes' =>'banner_bg'])
        @slot('title')
            Носки на заказ с Вашим дизайном<br/>
            от 1000 пар!
        @endslot
        @slot('text')
            Если вы хотите заказать стильные и качественные носки со своим дизайном, логотипом, инициалами или фамилией, обращайтесь к нам.
        @endslot
        @slot('icon')
            <img width="270" src="@asset('images/components/banners/noski_na_zakaz_s_vashim_dizainom.png')"
                 alt="Носки на заказ с Вашим дизайном от 1000 пар">
        @endslot
        @slot('buttonText')
            Конструктор заказа носков
        @endslot
    @endcomponent

    @include('components.individualsocks', ['classes' => 'pdng35'])

    {{--  @include('blocks.block-text', ['title' => 'Услуги по вязке носков'])--}}
    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Услуги по вязке носков</div>
        <div class="text">
            «Фабрика носков» предлагает услугу носки по собственному дизайну.
        </div>
        <ul class="block-text__list">
            <li class="block-text__point">Для начала работы, вам потребуется заполнить техническое задание для нашего
                отдела
                технического дизайна
            </li>
            <li class="block-text__point">Эскиз изделия может быть нарисован от руки либо разработан в дизайнерских
                программах
            </li>
            <li class="block-text__point">Необходимые шрифты, при их наличии передаются отдельными файлами</li>
            <li class="block-text__point">Необходимые цвета должны быть обозначены по цветовой схеме CMYK, для более
                удобного
                подбора цвета
            </li>
            <li class="block-text__point">Обязательно нужно указать интересующий вас размер мужских, женских либо
                детских
                изделий
            </li>
            <li class="block-text__point">Со стоимостью разработки дизайна по вашим эскизам вы можете ознакомиться в <a
                        class="block-text__link" href="/polozhenie-o-razrabotke-disajna-ot-2019.jpg">разделе «Положение
                    о разработке
                    дизайна»</a></li>
            <li class="block-text__point">Сроки изготовления дизайна по вашим эскизам от 3 до 5 рабочих дней</li>
            <li class="block-text__point">Первое согласование происходит по электронному макету</li>
            <li class="block-text__point">Второй этап согласования происходит по физической копии, отправленной
                клиенту.
            </li>
            <li class="block-text__point">Стоимость изготовления пробного образца и его доставка оплачивается
                отдельно.
            </li>
            <li class="block-text__point">После согласования физической копии, переходим к пошиву тиража, по
                согласованным
                размерам и цветам, на основании подписанного договора с двух сторон, а также оплаченного счета
            </li>
            <li class="block-text__point">При необходимости создать дизайн с нуля, без эскиза со стороны заказчика,
                стоимость
                дизайна увеличивается до 5000 рублей. В этом случае заказчик формирует направления идеи. В течении 3-5
                рабочих
                дней клиенту предоставляется 3 варианта дизайна на согласование.
            </li>
        </ul>
    </div>

    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Носки с логотипом на заказ</div>
        <div class="text">
            Мы можем отвязать партию носков с логотипом вашей компании. В фирменных цветах и стиле. Для корпоративных
            подарков, форменной одежды или продажи в ваших магазинах. Цветные носки зададут отличное настроение вашим
            сотрудникам и партнерам. Носки – это отличный подарок.
        </div>
    </div>

    <div class="block-text">
        <div class="title title_middle pdng15-bottom">Изготовим носки по индивидуальному дизайну</div>
        <div class="text">
            Используйте конструктор заказа, который поможет нам быстро обработать вашу заявку и создать носки по
            индивидуальному заказу. Если нужны определенные цвета или оттенки пряжи, оформим специальный заказ у наших
            поставщиков или подберем аналоги. Перед стартом производства утвердим с вами образцы.
        </div>
    </div>

    @component('components.banner.banner', ['href' => '/konstruktor-zakaza-noskov', 'classes' => 'mrgn35 banner_bg banner_design'])
        @slot('title')
            От вас идея, от нас - продукт!
        @endslot
        @slot('text')
            <ul class="banner__order-list">
                <li class="banner__order-item">Ваш дизайн и идея носков или колготок</li>
                <li class="banner__order-item">Наше производство и лучшие цены в России</li>
                <li class="banner__order-item">Минимальная партия 100 пар</li>
                <li class="banner__order-item">Доставка по всему миру</li>
            </ul>
        @endslot
        @slot('icon')
            <img width="310" src="@asset('images/components/banners/Noski_na_zakaz.png')"
                 alt="Носки на заказ с Вашим дизайном от 1000 пар">
        @endslot
        @slot('buttonText')
            Конструктор дизайна носков и колготок
        @endslot
    @endcomponent

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

    @include('components.form.default', ['title' => 'Бесплатная консультация по поставке и производству', 'submit' => 'Отправить'])

    @include('components.tables.table')

    @include('components.workyears.workyears')

    <div class="title title_large">Доставляем носки, колготки и прочие грузы:</div>
    <img class="partner-image" src="@asset('images/defaultpages/dostavka_noski_kolgotki.jpg')"
         alt="Доставляем носки, колготки и прочие грузы">

    @include('components.socksdesign.socksdesign')

@endsection
