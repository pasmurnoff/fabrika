@switch($prodCat->slug)
    @case('detskaja-kollekcija')
    @include('components.afisha.afisha')
    @break

    @case('zhenskaja-kollekcija')
    @component('components.banner.banner', ['classes' => 'banner__order banner_bg mrgn35-top', 'title' => 'Носки на заказ с Вашим дизайном от 35 рублей', 'href' => '/konstruktor-zakaza-noskov', 'buttonText' => 'Заказать носки' ])
        @slot('text')
            <ul class="banner__order-list">
                <li class="banner__order-item">Носки для магазинов шоурумов</li>
                <li class="banner__order-item">Носки с логотипами компаний</li>
                <li class="banner__order-item">Носки для промо акций</li>
                <li class="banner__order-item">Носки под мероприятия</li>
            </ul>
        @endslot
        @slot('icon')
            <img width="200" src="@asset('images/components/banners/fabrikanoskov_konstruktor.png')"
                 alt="Носки с логотипами компаний">
        @endslot
    @endcomponent
    @break

    @case('muzhskaja-kollekcija')
    @component('components.banner.banner', ['classes' => 'banner__manager mrgn35-top', 'title' => 'Зарабатывай с нами! Платим 10% от суммы счета', 'href' => '/konstruktor-zakaza-noskov', 'buttonText' => 'Заказать носки' ])
        @slot('text')
            <a class="banner__manager-link" href="/menedzher-po-prodazham"></a>
            <div class="banner__manager-text"> Мы всегда заинтересованы в том, чтобы работать с нами было не только
                удобно, но и выгодно! Продавай носки онлайн и оффлайн!
            </div>
            <span class="banner__manager-action text text_bold text_large">Мне интересно</span>
        @endslot
        @slot('icon')
            <img width="200" src="@asset('images/components/banners/manager.png')"
                 alt="Носки с логотипами компаний">
        @endslot
    @endcomponent
    @break

    @default
    @php echo '' @endphp
@endswitch